<?php 
session_start();
require_once "../login/Cl/DBclass.php";
$correo = $_SESSION['user_correo'];
$sql = "";
if ($_SESSION['user_tipo']=="1") {
    $sql = "SELECT * FROM empresas WHERE correo_e='$correo'";
    $query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)>0) {
  while ($fila = mysqli_fetch_array($query)) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicciona - Panel Principal</title>

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
    <section id="container">
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>CLI<span>CCI</span>ONA</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-theme">4</span>
                </a>
              <ul class="dropdown-menu extended tasks-bar">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 4 pending tasks</p>
                </li>
                <li>
                  <a href="index.html#">
                    <div class="task-info">
                      <div class="desc">Estado de perfil:</div>
                      <div class="percent">40%</div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blank.php">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    Ingresa tus documentos faltantes.
                    </a>
                </li>
              </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-theme">5</span>
                </a>
              <ul class="dropdown-menu extended inbox">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 5 new messages</p>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                    <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                    </span>
                    <span class="message">
                    Hi mate, how is everything?
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                    <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                    </span>
                    <span class="message">
                    Hi, I need your help with this.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                    <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                    </span>
                    <span class="message">
                    Love your new Dashboard.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                    <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                    </span>
                    <span class="message">
                    Please, answer asap.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">See all messages</a>
                </li>
              </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">7</span>
                </a>
              <ul class="dropdown-menu extended notification">
                <div class="notify-arrow notify-arrow-yellow"></div>
                <li>
                  <p class="yellow">You have 7 new notifications</p>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    Server Overloaded.
                    <span class="small italic">4 mins.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                    Memory #2 Not Responding.
                    <span class="small italic">30 mins.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    Disk Space Reached 85%.
                    <span class="small italic">2 hrs.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                    New User Registered.
                    <span class="small italic">3 hrs.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">See all notifications</a>
                </li>
              </ul>
            </li>
            <!-- notification dropdown end -->
          </ul>
          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="#" data-bs-toggle="modal" data-bs-target="#modal_documentos">Logout</a></li>
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
            <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered"> <?php echo $_SESSION['user_name'];?></h5>
            <li class="mt">
              <a href="index.html">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-desktop"></i>
                <span>UI Elements</span>
                </a>
              <ul class="sub">
                <li><a href="general.html">General</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="panels.html">Panels</a></li>
                <li><a href="font_awesome.html">Font Awesome</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Components</span>
                </a>
              <ul class="sub">
                <li><a href="grids.html">Grids</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="todo_list.html">Todo List</a></li>
                <li><a href="dropzone.html">Dropzone File Upload</a></li>
                <li><a href="inline_editor.html">Inline Editor</a></li>
                <li><a href="file_upload.html">Multiple File Upload</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a class="active" href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Perfil</span>
                </a>
              <ul class="sub">
                <li class="active"><a href="">Profile</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Forms</span>
                </a>
              <ul class="sub">
                <li><a href="form_component.html">Form Components</a></li>
                <li><a href="advanced_form_components.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="contactform.html">Contact Form</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Data Tables</span>
                </a>
              <ul class="sub">
                <li><a href="basic_table.html">Basic Table</a></li>
                <li><a href="responsive_table.html">Responsive Table</a></li>
                <li><a href="advanced_table.php">Advanced Table</a></li>
              </ul>
            </li>
            <li>
              <a href="inbox.html">
                <i class="fa fa-envelope"></i>
                <span>Mail </span>
                <span class="label label-theme pull-right mail-info">2</span>
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
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-comments-o"></i>
                <span>Chat Room</span>
                </a>
              <ul class="sub">
                <li><a href="lobby.html">Lobby</a></li>
                <li><a href="chat_room.html"> Chat Room</a></li>
              </ul>
            </li>
            <li>
              <a href="google_maps.html">
                <i class="fa fa-map-marker"></i>
                <span>Google Maps </span>
                </a>
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
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-lg-12">
              <div class="container-fluid">
                <div class="row content-panel">
                  <div class="col-md-6 profile-text">
                    <h3><?php echo $_SESSION['user_name'];?></h3>
                    <h6>Main Administrator</h6>
                    <p><?php echo $fila['servicio_giro_e']; ?></p>
                    <br>
                  </div>
                  <div class="col-md-6 centered">
                    <div class="profile-pic">
                      <p><img src="img/ui-sam.jpg" class="img-circle"></p>
                      <p>
                        <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                        <button class="btn btn-theme02">Add</button>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- /col-md-4 -->
              </div>
              <!-- /row -->
            </div>
            <!-- /col-lg-12 -->
            <div class="col-lg-12 mt">
              <div class="row content-panel">
                <div class="panel-heading">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a data-toggle="tab" href="#overview">Overview</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#edit" id="edit_profile">Edit Profile</a>
                    </li>
                  </ul>
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                  <div class="tab-content">
                    <div id="overview" class="tab-pane active">
                      <div class="row">
                        <div class="col-md-6">
                          <textarea rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                          <div class="grey-style">
                            <div class="pull-left">
                              <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                              <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                            </div>
                            <div class="pull-right">
                              <button class="btn btn-sm btn-theme03">POST</button>
                            </div>
                          </div>
                          <div class="detailed mt">
                            <h4>Recent Activity</h4>
                            <div class="recent-activity">
                              <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                              <div class="activity-panel">
                                <h5>1 HOUR AGO</h5>
                                <p>Purchased: Dashio Admin Panel & Front-end theme.</p>
                              </div>
                              <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                              <div class="activity-panel">
                                <h5>5 HOURS AGO</h5>
                                <p>Task Completed. Resolved issue with Disk Space.</p>
                              </div>
                              <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                              <div class="activity-panel">
                                <h5>3 DAYS AGO</h5>
                                <p>Launched a new product: Flat Pack Heritage.</p>
                              </div>
                            </div>
                            <!-- /recent-activity -->
                          </div>
                          <!-- /detailed -->
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>User Stats</h4>
                          <div class="row centered mt mb">
                            <div class="col-sm-4">
                              <h1><i class="fa fa-money"></i></h1>
                              <h3>$22,980</h3>
                              <h6>LIFETIME EARNINGS</h6>
                            </div>
                            <div class="col-sm-4">
                              <h1><i class="fa fa-trophy"></i></h1>
                              <h3>37</h3>
                              <h6>COMPLETED TASKS</h6>
                            </div>
                            <div class="col-sm-4">
                              <h1><i class="fa fa-shopping-cart"></i></h1>
                              <h3>1980</h3>
                              <h6>ITEMS SOLD</h6>
                            </div>
                          </div>
                          <!-- /row -->
                          <h4>My Friends</h4>
                          <div class="row centered mb">
                            <ul class="my-friends">
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-01.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-02.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-03.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-04.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-05.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-06.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-07.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-08.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-09.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-10.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-11.jpg"></div>
                              </li>
                            </ul>
                            <div class="row mt">
                              <div class="col-md-4 col-md-offset-4">
                                <h6><a href="#">VIEW ALL</a></h6>
                              </div>
                            </div>
                          </div>
                          <!-- /row -->
                          <h4>Pending Tasks</h4>
                          <div class="row centered">
                            <div class="col-md-8 col-md-offset-2">
                              <h5>Dashboard Update (40%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                  <span class="sr-only">40% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Unanswered Messages (80%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                  <span class="sr-only">80% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Product Review (60%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                  <span class="sr-only">60% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Friend Requests (90%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                  <span class="sr-only">90% Complete (success)</span>
                                </div>
                              </div>
                            </div>
                            <!-- /col-md-8 -->
                          </div>
                          <!-- /row -->
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /OVERVIEW -->
                    </div>
                    <!-- /tab-pane -->
                    <div id="contact" class="tab-pane">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="map"></div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>Location</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p>
                              Postal Address<br/> PO BOX 12988, Sutter Ave<br/> Brownsville, New York.
                            </p>
                            <br>
                            <p>
                              Headquarters<br/> 844 Sutter Ave,<br/> 9003, New York.
                            </p>
                          </div>
                          <h4>Contacts</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p>
                              Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                            </p>
                            <br>
                            <p>
                              Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> Website: http://Alvarez.is
                            </p>
                          </div>
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                    <div id="edit" class="tab-pane">
                      <div class="row">
                        <?php 
                                  if ($fila['plan_contratado_e']=="1") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_e">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_e']=="2") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_e">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-8 col-sm-offset-4">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_e']=="0") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Litte $500.00 por 30 dias</h4>
                                                        <p>Beneficios:</p>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Link de Redes</li>
                                                            <li class="list-group-item">Costo de Honorarios</li>
                                                            <li class="list-group-item">Experiencia</li>
                                                            <li class="list-group-item">Y mas...</li>
                                                        </ul>
                                                        <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <br>
                                                <br>
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="col-lg-8 col-md-offset-2 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servici_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php 
                                  }
                                ?> 
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                  </div>
                  <!-- /tab-content -->
                </div>
                <!-- /panel-body -->
              </div>
              <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
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
    <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#modal_documentos').modal('show');    
        });
    </script>
  </body>

  </html>
    <?php 
  }
}
}else if ($_SESSION['user_tipo']=="0") {
    $sql = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
    $query = mysqli_query($con, $sql);
    if (mysqli_num_rows($query)>0) {
      while ($fila = mysqli_fetch_array($query)) {
    ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clicciona - Panel Principal</title>

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
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      </head>

      <body>
        <section id="container">
          <header class="header black-bg">
            <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>CLI<span>CCI</span>ONA</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Cerrar Sesion</a></li>
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
                <p class="centered"><a href="#"><img src="vistas/imagen.php?id=<?php echo $_SESSION['user_correo'];?>" class="img-circle" width="80"></a></p>
                <h5 class="centered"> <?php echo $_SESSION['user_name'];?></h5>
                <li class="mt">
                  <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>UI Elements</span>
                    </a>
                  <ul class="sub">
                    <li><a href="general.html">General</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="panels.html">Panels</a></li>
                    <li><a href="font_awesome.html">Font Awesome</a></li>
                  </ul>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Components</span>
                    </a>
                  <ul class="sub">
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="inline_editor.html">Inline Editor</a></li>
                    <li><a href="file_upload.html">Multiple File Upload</a></li>
                  </ul>
                </li>
                <li class="sub-menu">
                  <a class="active" href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Extra Pages</span>
                    </a>
                  <ul class="sub">
                    <li><a href="lock_screen.html">Lock Screen</a></li>
                    <li><a href="pricing_table.html">Pricing Table</a></li>
                  </ul>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                    </a>
                  <ul class="sub">
                    <li><a href="advanced_form_components.html">Advanced Components</a></li>
                  </ul>
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
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-comments-o"></i>
                    <span>Chat Room</span>
                    </a>
                  <ul class="sub">
                    <li><a href="lobby.html">Lobby</a></li>
                    <li><a href="chat_room.html"> Chat Room</a></li>
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
            <section class="wrapper site-min-height">
              <div class="row mt">
                <div class="col-lg-12">
                  <div class="container-fluid">
                    <div class="row content-panel">
                      <div class="col-md-1"></div>
                      <div class="col-md-6 profile-text">
                        <h3><?php echo $_SESSION['user_name'];?></h3>
                        <h6><?php 
                        $id_profesion = $fila['id_profesion'];
                        $sql = "SELECT nombre_profesion FROM profesiones WHERE id_profesion='$id_profesion'";
                        $query = mysqli_query($con, $sql);
                        while ($profesion = mysqli_fetch_array($query)) {
                          echo $profesion['nombre_profesion'];
                        }
                         ?></h6>
                        <p><?php echo $fila['servicio_p']; ?></p>
                        <br>
                      </div>
                      <div class="col-md-5 centered">
                        <div class="profile-pic">
                          <p><img src="vistas/imagen.php?id=<?php echo $_SESSION['user_correo'];?>" class="img-circle"></p>
                          <p>
                            <button class="btn btn-theme"><i class="fa fa-check"></i> Cambiar foto de perfil</button>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- /col-md-4 -->
                  </div>
                  <!-- /row -->
                </div>
                <!-- /col-lg-12 -->
                <div class="col-lg-12 mt">
                  <div class="row content-panel">
                    <div class="panel-heading">
                      <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                          <a data-toggle="tab" href="#overview">Vista general</a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#edit">Perfil</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /panel-heading -->
                    <div class="panel-body">
                      <div class="tab-content">
                        <div id="overview" class="tab-pane active">
                          <div class="row">
                            <div class="col-md-6">
                              <textarea rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                              <div class="grey-style">
                                <div class="pull-left">
                                  <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                                  <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                                </div>
                                <div class="pull-right">
                                  <button class="btn btn-sm btn-theme03">POST</button>
                                </div>
                              </div>
                              <div class="detailed mt">
                                <h4>Recent Activity</h4>
                                <div class="recent-activity">
                                  <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                  <div class="activity-panel">
                                    <h5>1 HOUR AGO</h5>
                                    <p>Purchased: Dashio Admin Panel & Front-end theme.</p>
                                  </div>
                                  <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                                  <div class="activity-panel">
                                    <h5>5 HOURS AGO</h5>
                                    <p>Task Completed. Resolved issue with Disk Space.</p>
                                  </div>
                                  <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                                  <div class="activity-panel">
                                    <h5>3 DAYS AGO</h5>
                                    <p>Launched a new product: Flat Pack Heritage.</p>
                                  </div>
                                </div>
                                <!-- /recent-activity -->
                              </div>
                              <!-- /detailed -->
                            </div>
                            <!-- /col-md-6 -->
                            <div class="col-md-6 detailed">
                              <h4>User Stats</h4>
                              <div class="row centered mt mb">
                                <div class="col-sm-4">
                                  <h1><i class="fa fa-money"></i></h1>
                                  <h3>$22,980</h3>
                                  <h6>LIFETIME EARNINGS</h6>
                                </div>
                                <div class="col-sm-4">
                                  <h1><i class="fa fa-trophy"></i></h1>
                                  <h3>37</h3>
                                  <h6>COMPLETED TASKS</h6>
                                </div>
                                <div class="col-sm-4">
                                  <h1><i class="fa fa-shopping-cart"></i></h1>
                                  <h3>1980</h3>
                                  <h6>ITEMS SOLD</h6>
                                </div>
                              </div>
                              <!-- /row -->
                              <h4>Mis Amigos</h4>
                              <div class="row centered mb">
                                <ul class="my-friends">
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-01.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-02.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-03.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-04.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-05.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-06.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-07.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-08.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-09.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-10.jpg"></div>
                                  </li>
                                  <li>
                                    <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-11.jpg"></div>
                                  </li>
                                </ul>
                                <div class="row mt">
                                  <div class="col-md-4 col-md-offset-4">
                                    <h6><a href="#">VIEW ALL</a></h6>
                                  </div>
                                </div>
                              </div>
                              <!-- /row -->
                              <h4>Tareas pendientes</h4>
                              <div class="row centered">
                                <div class="col-md-8 col-md-offset-2">
                                  <h5>Dashboard Update (40%)</h5>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                  </div>
                                  <h5>Unanswered Messages (80%)</h5>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                      <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                  </div>
                                  <h5>Product Review (60%)</h5>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                  </div>
                                  <h5>Friend Requests (90%)</h5>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                      <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                  </div>
                                </div>
                                <!-- /col-md-8 -->
                              </div>
                              <!-- /row -->
                            </div>
                            <!-- /col-md-6 -->
                          </div>
                          <!-- /OVERVIEW -->
                        </div>
                        <!-- /tab-pane -->
                        <div id="edit" class="tab-pane">
                          <div class="row">
                                <?php 
                                  if ($fila['plan_contratado_p']=="1") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_p']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_p']; ?>">
                                                    <label for="apellido_e">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_p']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_p']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_profesionista"><?php echo $fila['servicio_p']; ?></textarea>
                                                    <label for="servicio_profesionista">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_p']=="2") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_p']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_p']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_p']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_p']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_profesionista"><?php echo $fila['servicio_p']; ?></textarea>
                                                    <label for="servicio_profesionista">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-8 col-sm-offset-4">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_p']=="0") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_p']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_p']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_p']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_p']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_profesionista"><?php echo $fila['servicio_p']; ?></textarea>
                                                    <label for="servicio_profesionista">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Litte $500.00 por 30 dias</h4>
                                                        <p>Beneficios:</p>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Link de Redes</li>
                                                            <li class="list-group-item">Costo de Honorarios</li>
                                                            <li class="list-group-item">Experiencia</li>
                                                            <li class="list-group-item">Y mas...</li>
                                                        </ul>
                                                        <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <br>
                                                <br>
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="col-lg-8 col-md-offset-2 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_p']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_p']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_p']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_p']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_profesionista"><?php echo $fila['servicio_p']; ?></textarea>
                                                    <label for="servicio_profesionista">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php 
                                  }
                                ?> 
                            <!-- /col-lg-8 -->
                          </div>
                            <br>
                          <!-- /row -->
                        </div>
                        <!-- /tab-pane -->
                      </div>
                      <!-- /tab-content -->
                    </div>
                    <!-- /panel-body -->
                  </div>
                  <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
              </div>
              <!-- /container -->
            </section>
            <!-- /wrapper -->
          </section>
          <!-- /MAIN CONTENT -->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="lib/jquery.scrollTo.min.js"></script>
        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="lib/common-scripts.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <!--script for this page-->
        <?php 
        if ($fila['validacion_documentos_p']=="0") {
            ?>
            <script type="text/javascript">
                Toastify({text: "Ingresa tus datos faltantes para que sean verificados y se muestre tu perfil.", duration: 10000, gravity: "bottom", position: "right"}).showToast();
            </script>
        <?php 
        }else if ($fila['validacion_documentos_p']=="1") {
        ?>
            <script type="text/javascript">
                Toastify({text: "Tus documentos estan siendo validados por nuestro personal, se te enviara una notificación a tu correo cuando este proceso haya concluido.", duration: 10000, gravity: "bottom", position: "right"}).showToast();
            </script>
        <?php 
        }else {
            ?>
            <script type="text/javascript">
                Toastify({text: "Bienvenido(a) <?php echo $_SESSION['user_name']; ?>", duration: 10000, gravity: "bottom", position: "right"}).showToast();
            </script>
            <?php 
        }
        ?>

      </body>

      </html>
        <?php 
      }
  }
}else if ($_SESSION['user_tipo']=="3") {
  ?>
    <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicciona - Panel Principal</title>

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
    <section id="container">
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>CLI<span>CCI</span>ONA</b></a>
        <!--logo end-->
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="#" data-bs-toggle="modal" data-bs-target="#modal_documentos">Logout</a></li>
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
            <p class="centered"><a href="#"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered"> <?php echo $_SESSION['user_name'];?></h5>
            <li class="mt">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
              <a class="active" href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Perfil</span>
                </a>
              <ul class="sub">
                <li class="active"><a href="#">Vista General</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Revisar Informacion</span>
                </a>
              <ul class="sub">
                <li><a href="advanced_table.php">Perfiles por revisar</a></li>
                <li><a href="advanced_table.php">Perfiles revisados</a></li>
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
        <section class="wrapper site-min-height">
          <div class="row mt">
            <div class="col-lg-12">
              <div class="container-fluid">
                <div class="row content-panel">
                  <div class="col-md-6 profile-text">
                    <h3><?php echo $_SESSION['user_name'];?></h3>
                    <h6>Main Administrator</h6>
                    <br>
                  </div>
                  <div class="col-md-6 centered">
                    <div class="profile-pic">
                      <p><img src="img/ui-sam.jpg" class="img-circle"></p>
                      <p>
                        <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                        <button class="btn btn-theme02">Add</button>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- /col-md-4 -->
              </div>
              <!-- /row -->
            </div>
            <!-- /col-lg-12 -->
            <div class="col-lg-12 mt">
              <div class="row content-panel">
                <div class="panel-heading">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a data-toggle="tab" href="#overview">Overview</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#edit" id="edit_profile">Edit Profile</a>
                    </li>
                  </ul>
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                  <div class="tab-content">
                    <div id="overview" class="tab-pane active">
                      <div class="row">
                        <div class="col-md-6">
                          <textarea rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                          <div class="grey-style">
                            <div class="pull-left">
                              <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                              <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                            </div>
                            <div class="pull-right">
                              <button class="btn btn-sm btn-theme03">POST</button>
                            </div>
                          </div>
                          <div class="detailed mt">
                            <h4>Recent Activity</h4>
                            <div class="recent-activity">
                              <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                              <div class="activity-panel">
                                <h5>1 HOUR AGO</h5>
                                <p>Purchased: Dashio Admin Panel & Front-end theme.</p>
                              </div>
                              <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                              <div class="activity-panel">
                                <h5>5 HOURS AGO</h5>
                                <p>Task Completed. Resolved issue with Disk Space.</p>
                              </div>
                              <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                              <div class="activity-panel">
                                <h5>3 DAYS AGO</h5>
                                <p>Launched a new product: Flat Pack Heritage.</p>
                              </div>
                            </div>
                            <!-- /recent-activity -->
                          </div>
                          <!-- /detailed -->
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>User Stats</h4>
                          <div class="row centered mt mb">
                            <div class="col-sm-4">
                              <h1><i class="fa fa-money"></i></h1>
                              <h3>$22,980</h3>
                              <h6>LIFETIME EARNINGS</h6>
                            </div>
                            <div class="col-sm-4">
                              <h1><i class="fa fa-trophy"></i></h1>
                              <h3>37</h3>
                              <h6>COMPLETED TASKS</h6>
                            </div>
                            <div class="col-sm-4">
                              <h1><i class="fa fa-shopping-cart"></i></h1>
                              <h3>1980</h3>
                              <h6>ITEMS SOLD</h6>
                            </div>
                          </div>
                          <!-- /row -->
                          <h4>My Friends</h4>
                          <div class="row centered mb">
                            <ul class="my-friends">
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-01.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-02.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-03.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-04.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-05.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-06.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-07.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-08.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-09.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-10.jpg"></div>
                              </li>
                              <li>
                                <div class="friends-pic"><img class="img-circle" width="35" height="35" src="img/friends/fr-11.jpg"></div>
                              </li>
                            </ul>
                            <div class="row mt">
                              <div class="col-md-4 col-md-offset-4">
                                <h6><a href="#">VIEW ALL</a></h6>
                              </div>
                            </div>
                          </div>
                          <!-- /row -->
                          <h4>Pending Tasks</h4>
                          <div class="row centered">
                            <div class="col-md-8 col-md-offset-2">
                              <h5>Dashboard Update (40%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                  <span class="sr-only">40% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Unanswered Messages (80%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                  <span class="sr-only">80% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Product Review (60%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                  <span class="sr-only">60% Complete (success)</span>
                                </div>
                              </div>
                              <h5>Friend Requests (90%)</h5>
                              <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                  <span class="sr-only">90% Complete (success)</span>
                                </div>
                              </div>
                            </div>
                            <!-- /col-md-8 -->
                          </div>
                          <!-- /row -->
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /OVERVIEW -->
                    </div>
                    <!-- /tab-pane -->
                    <div id="contact" class="tab-pane">
                      <div class="row">
                        <div class="col-md-6">
                          <div id="map"></div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>Location</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p>
                              Postal Address<br/> PO BOX 12988, Sutter Ave<br/> Brownsville, New York.
                            </p>
                            <br>
                            <p>
                              Headquarters<br/> 844 Sutter Ave,<br/> 9003, New York.
                            </p>
                          </div>
                          <h4>Contacts</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p>
                              Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                            </p>
                            <br>
                            <p>
                              Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> Website: http://Alvarez.is
                            </p>
                          </div>
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                    <div id="edit" class="tab-pane">
                      <div class="row">
                        <?php 
                                  if ($fila['plan_contratado_e']=="1") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_e">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_p']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_e']=="2") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_e">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-8 col-sm-offset-4">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else if ($fila['plan_contratado_e']=="0") {
                                    ?>
                                    <div class="col-lg-6 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servicio_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 detailed">
                                        <div class="row">
                                            <h4 class="mb">Contrata una membresia</h4>
                                            <div class="col-sm-6">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Litte $500.00 por 30 dias</h4>
                                                        <p>Beneficios:</p>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Link de Redes</li>
                                                            <li class="list-group-item">Costo de Honorarios</li>
                                                            <li class="list-group-item">Experiencia</li>
                                                            <li class="list-group-item">Y mas...</li>
                                                        </ul>
                                                        <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Básico $999 por 30 días</h4>
                                                    <p>Beneficios:</p>
                                                      <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Link de Redes</li>
                                                        <li class="list-group-item">Beneficios de tu servicio</li>
                                                        <li class="list-group-item">Foto de portada</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                      </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <br>
                                                <br>
                                              <div class="card" style="width: 18rem;">
                                                  <div class="card-body">
                                                    <h4 class="card-title">Premium - $1999.90 por 30 dias</h4>
                                                    <p>Beneficios:</p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Tarjetas digitales</li>
                                                        <li class="list-group-item">Acceso a reserva de citas</li>
                                                        <li class="list-group-item">Agregar 3 imagenes</li>
                                                        <li class="list-group-item">Y mas...</li>
                                                    </ul>
                                                    <button class="btn" style="background: #09052b; color: white;">Comprar</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="col-lg-8 col-md-offset-2 detailed">
                                        <h4 class="mb">Información Personal</h4>
                                                <form role="form" class="form-horizontal">
                                            <div class="container-fluid">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre(s)" value="<?php echo $fila['nombres_e']; ?>">
                                                    <label for="floatingInput">Nombre(s)</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_p" placeholder="Apellido Paterno" value="<?php echo $fila['apellidoP_e']; ?>">
                                                    <label for="apellido_p">Apellido Paterno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="apellido_m" placeholder="Apellido Materno" value="<?php echo $fila['apellidoM_e']; ?>">
                                                    <label for="apellido_m">Apellido Materno</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="num_contact" placeholder="Numero de Contacto" value="<?php if($fila['numero_contacto_e']==NULL){
                                                        }else{
                                                     echo $fila['numero_contacto_e']; }?>">
                                                    <label for="num_contact">Numero de Contacto</label>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Servicio" id="servici_empresa"><?php echo $fila['servicio_giro_e']; ?></textarea>
                                                    <label for="servicio_empresa">Servicio</label>
                                                </div>
                                                <button class="btn col-md-4 col-md-offset-4" style="background: #09052b; color: white;" id="guardar_datos" name="guardar_datos">Guardar Datos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php 
                                  }
                                ?> 
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -->
                  </div>
                  <!-- /tab-content -->
                </div>
                <!-- /panel-body -->
              </div>
              <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#modal_documentos').modal('show');    
        });
    </script>
  </body>
  </html>
  <?php 
}
?>