<?php 
  session_start();
  include_once "../../login/Cl/DBclass.php";
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($con, "SELECT * FROM usuarios WHERE id_usuario = {$_SESSION['user_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="vistas/imagen.php?id=<?php echo $row['id_usuario']; ?>" width="20">
          <div class="details">
            <span><?php echo $row['primer_nombre']. " " . $row['apellido_p'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="../modelo/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Cerrar sesión</a>
      </header>
      <div class="search">
        <span class="text">Seleccione un usuario para iniciar el chat</span>
        <input type="text" placeholder="Ingrese el nombre para buscar ...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="js/usuarios.js"></script>

</body>
</html>
