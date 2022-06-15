<?php session_start();?>
<section id="container">
    <!-- **********************************************************************************************************************************************************TOP BAR CONTENT & NOTIFICATIONS*********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <!--logo start-->
      <a href="../index.php" class="logo"><b>CLICCI<span>ONA</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************MAIN SIDEBAR MENU*********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="vistas/imagen.php?id=<?php echo $_SESSION['user_id']; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['user_name'] ?></h5>
          <li class="sub-menu">
            <a href="blank.php">
              <i class="fa fa-book"></i>
              <span>Documentos</span>
              </a>
          </li>
          <li>
            <a href="index.php">
              <i class="fa fa-envelope"></i>
              <span>Mensajes</span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->