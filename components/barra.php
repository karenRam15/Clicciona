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
              <li><a href="#" class="nav-link active" id="abrir_panel" name="abrir_panel">Panel de control</a></li>
              <li><a href="#" class="nav-link active" onclick="cerrar_sesion()">Cerrar Sesion</a></li>
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
      $('#abrir_panel').click(function() {
        $.ajax({
          url: './php/check_status_doc.php',
          type: 'POST',
        })
        .done(function(r) {
          if (r==0) {
            abrir_modal('#modal_registro_ine_cedula');
          }else if (r==1) {
            Toastify({text: "Tus documentos estan siendo validados por nuestro personal, se te enviara una notificación a tu correo cuando este proceso haya concluido.", duration: 10000, gravity: "bottom", position: "right"}).showToast();
          }else if (r==2) {
            window.location = "panel/index.php";
          }
        });
      });

    </script>