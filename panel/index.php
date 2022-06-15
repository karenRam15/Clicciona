<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Clicciona</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <div id="barra"></div>
    <!-- /MAIN CONTENT -->
    <!-- ********************************************************************************************************************************************************** MAIN CONTENT*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-4">
            <section class="panel">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked labels-info ">
                  <li>
                    <h4>CHATS</h4>
                  </li>
              </header>
                <div class="users-list">
                  <?php 
                    require_once "../login/Cl/DBclass.php";
                    $sql = mysqli_query($con, "SELECT * FROM usuarios WHERE tipo_usuario='1' OR tipo_usuario='0'");
                    if(mysqli_num_rows($sql) > 0){
                      while ($row=mysqli_fetch_array($sql)) {
                      ?>
                       <li>
                          <a href="#">
                            <img src="vistas/imagen.php?id=<?php echo $row['id_usuario']; ?>" class="img-circle" width="20"> <?php echo $row['primer_nombre']." ".$row['apellido_p']; ?>
                            <p>
                              <?php 
                                if($row['status']){
                                  ?>
                                  <span class="label label-success">Available</span>
                                  <?php 
                                }else{
                                  ?>
                                  <span class="label label-danger">Offline</span>
                                  <?php 
                                }
                              ?>
                            </p>
                            </a>
                        </li>
                      <?php
                      }
                    }
                 ?>
                </ul>
              </div>
            </section>
          </div>
          <div class="col-sm-8">
            <div id="contenido"></div>
          </div>
        </div>
      </section>
    </section>
    <!--main content end--
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#barra').load('../components/barra_panel.php');
      //$('#contenido').load('vistas/listado_mensajes.php');
      //$('#contenido').load('vistas/usuarios.php');
    });
  </script>
</body>

</html>
