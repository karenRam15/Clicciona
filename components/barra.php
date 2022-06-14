<?php session_start(); ?>
<div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php" class="nav-link active">Clicciona</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="drop-down"><a href="" class="nav-link active">Profesionistas</a>
            <ul>
              <li><a href="#" class="nav-link active">Paquetes</a></li>
            </ul>
          </li>
          
          <li><a href="#" class="nav-link active">Oportunidades</a></li>
          <li><a href="#" class="nav-link active">Aprende Más</a></li>
          <li><a href="universidades.php" class="nav-link active">Universidades</a></li>
          <li><a href="coworkings.php" class="nav-link active">Coworks</a></li>
          <li class="drop-down"><a href="#" class="nav-link active">Servicios</a>
            <ul>
              <li><a href="#" class="nav-link active">Servicios Adicionales</a></li>
              <li><a href="#" class="nav-link active">Servicios Business</a></li>
            </ul>
          </li>
          <?php 
      if (isset($_SESSION['user_sesion'])) {
        ?>
        <li class="drop-down"><a href="#" class="nav-link active"><?php echo $_SESSION['user_name']; ?></a>
            <ul>
              <li><a href="#" class="nav-link active">Panel de control</a></li>
              <li><a href="#" class="nav-link active" id="cerrar_s" name="cerrar_s">Cerrar Sesion</a></li>
            </ul>
          </li>
        <?php 
      }else{
        ?>
        <a href="#" class="get-started-btn scrollto" id="acceso" name="acceso">Acceso / Registrarse</a>
      <?php 
      }
      ?>
      </nav>
      <!-- .nav-menu -->
    </div>
    <script type="text/javascript">
      $('#acceso').click(function() {
        abrir_modal('#acceso_modal');
      });
      $('#cerrar_s').click(function(){
        $.ajax({
          url: 'login/logout.php',
          type: 'POST',
        })
        .done(function(r) {
          if (r==1) {
            $('#barra').load('components/barra.php');
            Toastify({text: "Tu sesion se a cerrado satisfactoriamente.", duration: 3000}).showToast();
          }else{
            Toastify({text: "Error al cerrar sesion.", duration: 3000}).showToast();
          }
        });
      });
    </script>