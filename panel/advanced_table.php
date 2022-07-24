<?php 
session_start(); 
unset($_SESSION['plan']);
unset($_SESSION['tipo']);
unset($_SESSION['profesion']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Clicciona - Validacion de documentos</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/>
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>CLI<span>CCI</span>ONA</b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="#">Cerrar Sesion</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><img src="vistas/imagen.php?id=<?php echo $_SESSION['user_correo'];?>" class="img-circle" width="80"></p>
            <h5 class="centered"> <?php echo $_SESSION['user_name'];?></h5>
            <li class="mt">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Perfil</span>
                </a>
              <ul class="sub">
                <li><a href="index.php">Vista General</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a class="active" href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Revisar Informacion</span>
                </a>
              <ul class="sub">
                <li  class="active"><a href="advanced_table.php">Perfiles por revisar</a></li>
                <li><a href="basic_table.php">Perfiles revisados</a></li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mb">
          <h2 class="col-lg-12 text-center">Información pendiente de revisión</h2>
          <!-- page start-->
          <div class="container-fluid">
            <div class="col-lg-12">
              <br>
              <br>
            <div id="tabla"></div>
          </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  </section>
  <!-- Modal -->
<div class="modal" id="modal_plan_gratuito" data-backdrop="static" data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Revision de informacion</h5>
      </div>
      <div class="modal-body">
        <h4 class="text-center"><b>Verifica la informacion(incluyendo la imagen) que ves a continuación, una ves terminado, verificala.</b></h4>
        <form action="" >
            <div class="row">
                <img src="vistas/imagen.php?id=<?php echo $_SESSION['user_correo'];?>" width="80" class="img-circle img-fluid" id="img_revision_pg" name="img_revision_pg" style="
                      width: 20%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto">
            </div>
            <br>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Correo Electronico:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="correo_pg" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre (s):</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nombres_pg" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Apellido Paterno :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="apellido_p_pg" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Apellido Materno :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="apellido_m_pg" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Numero contacto:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="numero_contacto_pg" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Servicio:</label>
              <div class="col-sm-8">
                <textarea id="servicio_pg" class="form-control" readonly></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Localidad:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="localidad_pg" readonly>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="col-sm-8 col-sm-offset-1">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-warning">Enviar correo</button>
          <button type="button" class="btn btn-primary" id="validar">Validar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="modal_plan_litte"  data-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Revision de informacion</h5>
      </div>
      <div class="modal-body">
        <h4 class="text-center"><b>Verifica la informacion(incluyendo la imagen) que ves a continuación, una ves terminado, verificala.</b></h4>
            <div class="row"> 
              <img src="vistas/imagen.php?id=<?php echo $_SESSION['user_correo'];?>" width="80" class="img-circle img-fluid" id="img_revision_pg" name="img_revision_pg" style="
                      width: 20%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto">
                <br>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Correo Electronico:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="correo_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre (s):</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombres_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Apellido Paterno :</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellido_p_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Apellido Materno :</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellido_m_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Numero contacto:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="numero_contacto_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Servicio:</label>
                  <div class="col-sm-8">
                    <textarea id="servicio_pl" class="form-control" readonly></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Localidad:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="localidad_pl" readonly>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Forma de trabajo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="forma_trabajo_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Experiencia:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="experiencia_pl" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Costo de honorarios:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="costo_honorarios_pl" readonly>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <div class="col-sm-8 col-sm-offset-1">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-warning">Enviar correo</button>
          <button type="button" class="btn btn-primary" id="validar">Validar</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- Data Tables-->
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script src="../assets/js/funciones.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    $(document).ready(function() {
      $('#tabla').load('../components/tabla_administrador.php');
    });
   
  </script>
</body>

</html>
