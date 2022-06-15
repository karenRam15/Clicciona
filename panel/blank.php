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
  <link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
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
                    <div class="desc">Dashio Admin Panel</div>
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
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
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
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <div id="barra"></div>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <?php 
            if (isset($_SESSION['user_tipo']) && ($_SESSION['user_tipo']==1 ||$_SESSION['user_tipo']==0) ) {
            ?>
              <form class="form-row">
                <div class="row">
                  <div class="col-lg-6">
                    <label for="logo">Logo o Imagen</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                  </div>
                  <div class="col-lg-6">
                    <label for="servicio">Servicio/Giro</label>
                    <input type="file" class="form-control" id="servicio" name="servicio">
                  </div>
                  <div class="col-lg-6">
                    <label for="redes">Ubicación geografica</label>
                    <input type="file" class="form-control" id="redes" name="redes">
                  </div>
                  <div class="col-lg-6">
                    <label for="forma_trabajo">Forma de Trabajo</label>
                    <input type="file" class="form-control" id="forma_trabajo" name="forma_trabajo">
                  </div>
                  <div class="col-lg-6">
                    <label for="experiencia">Experiencia</label>
                    <input type="file" class="form-control" id="experiencia" name="experiencia">
                  </div>
                  <div class="col-lg-6">
                    <label for="costo_honorarios">Costo de honorarios</label>
                    <input type="file" class="form-control" id="costo_honorarios" name="costo_honorarios">
                  </div>
                  <div class="col-lg-6">
                    <label for="beneficios_servicios">Beneficios de tu servicio</label>
                    <input type="file" class="form-control" id="beneficios_servicios" name="beneficios_servicios">
                  </div>
                  <div class="col-lg-6">
                    <label for="foto_portada">Foto de portada</label>
                    <input type="file" class="form-control" id="foto_portada" name="foto_portada">
                  </div>
                  <div class="col-lg-6">
                    <label for="video">Video o gift </label>
                    <input type="file" class="form-control" id="video" name="video">
                  </div>
                  <div class="col-lg-6">
                    <label for="imagenes">Imagenes (3)</label>
                  <input type="file" class="form-control" id="imagenes" name="imagenes">
                  </div>
                  <div class="col-lg-6">
                    <label for="imagenes">Imagenes (3)</label>        
                    <input type="file" class="form-control" id="sucursales" name="sucursales">
                  </div>
                  <div class="col-lg-6">
                     <label for="imagenes">Sucursales</label>
                      <input type="file" class="form-control" id="tarjetas_digitales" name="tarjetas_digitales">
                  </div>
                  <div class="col-lg-6">
                    <label for="imagenes">sistema_reservas</label>
                    <input type="file" class="form-control" id="sistema_reservas" name="sistema_reservas">
                  </div>
                </div>
              </form>
            <?php 
            }else if (isset($_SESSION['user_tipo']) && $_SESSION['user_tipo']==3) {
              ?>
              <table id="example" style="width:100%">
                <thead>
                    <tr>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Tipo de Usuario</th>
                        <th>Lugar de Origen</th>
                        <th>Edad</th>
                        <th>Fecha de registro</th>
                        <th>Salario</th>
                        <th>Extn.</th>
                        <th>Correo Electronico</th>
                        <th>Archivos a Revisar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>5421</td>
                        <td>t.nixon@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Garrett</td>
                        <td>Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                        <td>8422</td>
                        <td>g.winters@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Ashton</td>
                        <td>Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                        <td>1562</td>
                        <td>a.cox@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Cedric</td>
                        <td>Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                        <td>6224</td>
                        <td>c.kelly@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Airi</td>
                        <td>Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                        <td>5407</td>
                        <td>a.satou@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Brielle</td>
                        <td>Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                        <td>4804</td>
                        <td>b.williamson@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Herrod</td>
                        <td>Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                        <td>9608</td>
                        <td>h.chandler@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Rhona</td>
                        <td>Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                        <td>6200</td>
                        <td>r.davidson@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Colleen</td>
                        <td>Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                        <td>2360</td>
                        <td>c.hurst@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Sonya</td>
                        <td>Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                        <td>1667</td>
                        <td>s.frost@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jena</td>
                        <td>Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                        <td>3814</td>
                        <td>j.gaines@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Quinn</td>
                        <td>Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                        <td>9497</td>
                        <td>q.flynn@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Charde</td>
                        <td>Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                        <td>6741</td>
                        <td>c.marshall@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Haley</td>
                        <td>Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                        <td>3597</td>
                        <td>h.kennedy@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Tatyana</td>
                        <td>Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                        <td>1965</td>
                        <td>t.fitzpatrick@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Michael</td>
                        <td>Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                        <td>1581</td>
                        <td>m.silva@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Paul</td>
                        <td>Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010-06-09</td>
                        <td>$725,000</td>
                        <td>3059</td>
                        <td>p.byrd@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Gloria</td>
                        <td>Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009-04-10</td>
                        <td>$237,500</td>
                        <td>1721</td>
                        <td>g.little@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Bradley</td>
                        <td>Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012-10-13</td>
                        <td>$132,000</td>
                        <td>2558</td>
                        <td>b.greer@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Dai</td>
                        <td>Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012-09-26</td>
                        <td>$217,500</td>
                        <td>2290</td>
                        <td>d.rios@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jenette</td>
                        <td>Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011-09-03</td>
                        <td>$345,000</td>
                        <td>1937</td>
                        <td>j.caldwell@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Yuri</td>
                        <td>Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009-06-25</td>
                        <td>$675,000</td>
                        <td>6154</td>
                        <td>y.berry@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Caesar</td>
                        <td>Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011-12-12</td>
                        <td>$106,450</td>
                        <td>8330</td>
                        <td>c.vance@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Doris</td>
                        <td>Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sydney</td>
                        <td>23</td>
                        <td>2010-09-20</td>
                        <td>$85,600</td>
                        <td>3023</td>
                        <td>d.wilder@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Angelica</td>
                        <td>Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009-10-09</td>
                        <td>$1,200,000</td>
                        <td>5797</td>
                        <td>a.ramos@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Gavin</td>
                        <td>Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010-12-22</td>
                        <td>$92,575</td>
                        <td>8822</td>
                        <td>g.joyce@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jennifer</td>
                        <td>Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010-11-14</td>
                        <td>$357,650</td>
                        <td>9239</td>
                        <td>j.chang@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Brenden</td>
                        <td>Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011-06-07</td>
                        <td>$206,850</td>
                        <td>1314</td>
                        <td>b.wagner@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Fiona</td>
                        <td>Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010-03-11</td>
                        <td>$850,000</td>
                        <td>2947</td>
                        <td>f.green@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Shou</td>
                        <td>Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011-08-14</td>
                        <td>$163,000</td>
                        <td>8899</td>
                        <td>s.itou@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Michelle</td>
                        <td>House</td>
                        <td>Integration Specialist</td>
                        <td>Sydney</td>
                        <td>37</td>
                        <td>2011-06-02</td>
                        <td>$95,400</td>
                        <td>2769</td>
                        <td>m.house@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Suki</td>
                        <td>Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009-10-22</td>
                        <td>$114,500</td>
                        <td>6832</td>
                        <td>s.burks@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Prescott</td>
                        <td>Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011-05-07</td>
                        <td>$145,000</td>
                        <td>3606</td>
                        <td>p.bartlett@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Gavin</td>
                        <td>Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008-10-26</td>
                        <td>$235,500</td>
                        <td>2860</td>
                        <td>g.cortez@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Martena</td>
                        <td>Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011-03-09</td>
                        <td>$324,050</td>
                        <td>8240</td>
                        <td>m.mccray@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Unity</td>
                        <td>Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009-12-09</td>
                        <td>$85,675</td>
                        <td>5384</td>
                        <td>u.butler@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Howard</td>
                        <td>Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008-12-16</td>
                        <td>$164,500</td>
                        <td>7031</td>
                        <td>h.hatfield@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Hope</td>
                        <td>Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010-02-12</td>
                        <td>$109,850</td>
                        <td>6318</td>
                        <td>h.fuentes@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Vivian</td>
                        <td>Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009-02-14</td>
                        <td>$452,500</td>
                        <td>9422</td>
                        <td>v.harrell@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Timothy</td>
                        <td>Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008-12-11</td>
                        <td>$136,200</td>
                        <td>7580</td>
                        <td>t.mooney@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jackson</td>
                        <td>Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008-09-26</td>
                        <td>$645,750</td>
                        <td>1042</td>
                        <td>j.bradshaw@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Olivia</td>
                        <td>Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011-02-03</td>
                        <td>$234,500</td>
                        <td>2120</td>
                        <td>o.liang@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Bruno</td>
                        <td>Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011-05-03</td>
                        <td>$163,500</td>
                        <td>6222</td>
                        <td>b.nash@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Sakura</td>
                        <td>Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009-08-19</td>
                        <td>$139,575</td>
                        <td>9383</td>
                        <td>s.yamamoto@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Thor</td>
                        <td>Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013-08-11</td>
                        <td>$98,540</td>
                        <td>8327</td>
                        <td>t.walton@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Finn</td>
                        <td>Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009-07-07</td>
                        <td>$87,500</td>
                        <td>2927</td>
                        <td>f.camacho@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Serge</td>
                        <td>Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012-04-09</td>
                        <td>$138,575</td>
                        <td>8352</td>
                        <td>s.baldwin@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Zenaida</td>
                        <td>Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010-01-04</td>
                        <td>$125,250</td>
                        <td>7439</td>
                        <td>z.frank@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Zorita</td>
                        <td>Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012-06-01</td>
                        <td>$115,000</td>
                        <td>4389</td>
                        <td>z.serrano@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jennifer</td>
                        <td>Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013-02-01</td>
                        <td>$75,650</td>
                        <td>3431</td>
                        <td>j.acosta@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Cara</td>
                        <td>Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011-12-06</td>
                        <td>$145,600</td>
                        <td>3990</td>
                        <td>c.stevens@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Hermione</td>
                        <td>Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011-03-21</td>
                        <td>$356,250</td>
                        <td>1016</td>
                        <td>h.butler@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Lael</td>
                        <td>Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009-02-27</td>
                        <td>$103,500</td>
                        <td>6733</td>
                        <td>l.greer@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Jonas</td>
                        <td>Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010-07-14</td>
                        <td>$86,500</td>
                        <td>8196</td>
                        <td>j.alexander@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Shad</td>
                        <td>Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008-11-13</td>
                        <td>$183,000</td>
                        <td>6373</td>
                        <td>s.decker@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Michael</td>
                        <td>Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011-06-27</td>
                        <td>$183,000</td>
                        <td>5384</td>
                        <td>m.bruce@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Donna</td>
                        <td>Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011-01-25</td>
                        <td>$112,000</td>
                        <td>4226</td>
                        <td>d.snider@datatables.net</td>
                    </tr>
                </tbody>
            </table>
          <?php     } ?>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

    <script type="text/javascript">
    $(document).ready(function() {
      $('#barra').load('../components/barra_panel.php');
      $('#example').DataTable();
      //$('#contenido').load('vistas/listado_mensajes.php');
      //$('#contenido').load('vistas/usuarios.php');
    });
  </script>
</body>

</html>
