<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Clicciona</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <?php 
    require_once "dependencias/dependencias_cdn.php";
    ?>
    <script type="text/javascript" src="assets/js/funciones.js"></script>     
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div id="barra"></div>
  </header><!-- End Header -->

  <!-- Modal para Inicio de Sesion -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="acceso_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <img src="login/img/user.png" class="img-fluid" alt="icon" style="
                      width: 30%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto;">
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-mb-12 ">
                <input name="email" id="email" type="email" class="form-control-lg" placeholder="Correo electr??nico" autofocus>
              </div>
            </div>
            <div class="row">
              <div class="col-mb-12">
                <input name="password" id="password" type="password" class="form-control-lg" placeholder="Contrase??a"> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <button class="btn" type="submit" id="login" name="login" style=" background-color: #1abc9c;
                      color: #09052b;
                      padding-bottom: 10px;
                      padding-top: 10px;
                      transition: background-color 300ms linear 0s;">Iniciar sesi??n</button>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </div>
        <div class="form-footer">
          <div class="container">
            <div class="row">
              <div class="col-xs-7 col-sm-7 col-md-7">
                <i class="fa fa-lock"></i>
                <a href="#" id="forget_password" name="forget_password" class="nav-link">??Olvid?? su contrase??a?</a>
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5">
                <i class="fa fa-check"></i>
                <a href="#" id="registrarse1" name="registrarse1" class="nav-link"> Registrarse </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para resetear contrase??a-->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="forget_password_modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">??Olvidaste tu contrase??a?</h4>
          </div>
          <div class="modal-body">
              <div class="container">
                <div class="row">
                  <p>Ingresa tu correo electronico para resetear tu contrase??a.</p>
                  <input type="text" placeholder="example@gmail.com" autocomplete="off" class="form-control placeholder-no-fix col-lg-12" id="email_reset_password" name="email_reset_password">
                  <p style="color: red;">*Se enviara un token a tu correo registrado con las instrucciones para resetear tu contrase??a.*</p>
                </div>
              </div>
            </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button" id="cancel_reset" name="cancel_reset">Cancelar</button>
            <button class="btn" style=" background-color: #1abc9c;
              color: white;
              padding-bottom: 10px;
              padding-top: 10px;
              transition: background-color 300ms linear 0s;" id="reset_password" name="reset_password">Recuperar</button>
          </div>
        </div>
      </div>
  </div>

  <!-- Modal para registrarse-->
  <div class="modal fade" id="registrarse_modal" name="registrarse_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center" id="staticBackdropLabel" style="color: black;">  Registro de cuenta Clicciona</h3>
        </div>
        <div class="modal-body">
          <div class="container-fluid" style="background-color: #E2E2E2;">
            <div class="row">
              <div class="col-mb-12">
                <br>
                <div class="form-floating">
                  <select class="form-select" id="tipo_usuario_register" name="tipo_usuario_register" aria-label="Floating label select example">
                    <option value="">Opciones...</option>
                    <option value="0">Profesionista</option> 
                    <option value="1">Empresa/Contratante</option>
                  </select>
                  <label for="floatingSelect">Metodo de registro</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-mb-12">
                <div id="campos"></div>
              </div>
            </div>
                <br>
            </div>
        </div>
        <div class="modal-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <button type="button" class="btn" data-bs-dismiss="modal" style="background: #1abc9c;">Close</button>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>ADI??S AL TRABAJO DE TODA LA VIDA </h1>
          <h3>Ahora es desde cualquier lugar y hora ??t?? decides! ??cu??nto tiempo m??s crees que t?? empleo va a durar en su forma actual? reinv??ntate, ve de lo complicado y caro a lo simple y econ??mico. Toma ??l control de t?? futuro profesional. </h3>
          <div class="d-lg-flex">
            <a href="#" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Con??cenos <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/servicios.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nosotros</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <p>
              En M??xico existe una desigualdad en oportunidades de crecimiento en ??l ??mbito profesional qu?? estanca y restringe la visi??n de ??xito. Somos una empresa enfocada en la prestaci??n de servicios con la misi??n de potenciar el crecimiento de profesionistas; facilitamos ??l espacio para ser un veh??culo de transformaci??n.
            </p>
         
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Para nosotros es un placer contribuir al crecimiento de los profesionistas mexicanos. <br>GRACIAS por creer en lo hecho en M??xico. <br>GRACIAS por elegirnos y GRACIAS por darnos t?? voto de confianza.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Beneficios</h2>
          <p>Crece con tu propia marca, conserva independencia total, crea curr??culum, amplia tus canales de mercadeo, selecciona t?? radio de trabajo, posici??nate en la web y redes sociales, genera t?? propio contenido, p??blica o accede a vacantes, crea redes de contacto y mucho m??s.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">AS?? FUNCIONA : <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Los clientes utilizan Clicciona para buscar profesionales que los puedan apoyar con sus  asuntos particulares.
                </p>
                <br>
                  Los visitantes puede navegar para ir directamente a su profesional de inter??s o mandar un filtro de b??squeda de acuerdo a sus intereses.
                </br>
                  <br>
                    Podr??n conocer t?? experiencia y beneficios que coloques en t?? perfil.
                  </br>
                    <br>
                      Se contactan directamente contigo y t?? respondes de acuerdo a sus requerimientos y tus posibilidades de servicio.
                  </br>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">TODOS LOS PAQUETES INCLUYEN : <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Soporte especializado.
                </p>
                <p>
                  M??ltiples beneficios y descuentos con universidades y coworkings.
                </p>
                <p>
                  Alertas de vacantes, cursos, talleres y capacitaciones on line ?? presenciales, gratuitas y en pago, para que generes mayores ingresos, bienestar personal y profesional.
                </p>
                <p>
                  Acceso a grupos privados de networking.
                </p>
                <p>
                  Alertas relevantes de noticias relacionadas con t?? profesi??n.
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>??POR QU?? USAR <strong>CLICCIONA?</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Ahorra tiempo y dinero <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      No tienes que trasladarte para comparar y elegir al proveedor de t?? agrado, el contacto es simult??neo.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Comodidad <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Puedes buscar un servicio profesional desde cualquier lugar con Internet y de forma GRATUITA.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Seguridad, confianza y calidad<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Los profesionales deben acreditarse y comprometerse ??ticamente con la prestaci??n de sus servicios.
                    </p>
                  </div>
                </li>

                  <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>04</span> Experiencia del servicio<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Como usuario te haces acreedor a m??ltiples descuentos y promociones.
                    </p>
                  </div>
                </li>

                    <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>05</span> Comunicaci??n simple<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      El sistema intuitivo te facilita los procesos de b??squeda y selecci??n.
                    </p>
                  </div>
                </li>

                    <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>06</span> Pagos sin efectivo<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Sin riesgos por portabilidad de efectivo, los pagos se congelan hasta obtener el servicio.
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/cliopt.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>??POR QU?? USAR CLICCIONA.COM?</h2>
        </div>

        <div class="row">
          <div class="col-xl-2 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-hourglass-split"></i></div>
              <h4><a href="">Ahorra tiempo y dinero</a></h4>
              <p>No tienes que trasladarte para comparar y elegir al proveedor de t?? agrado, el contacto es simult??neo.</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-hand-thumbs-up"></i></div>
              <h4><a href="">Comodidad</a></h4>
              <p>Puedes buscar un servicio profesional desde cualquier lugar con Internet y de forma GRATUITA.</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-shield-lock"></i></div>
              <h4><a href="">Seguridad, confianza y calidad</a></h4>
              <p>Los profesionales deben acreditarse y comprometerse ??ticamente con la prestaci??n de sus servicios.</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star"></i></div>
              <h4><a href="">Experiencia del servicio</a></h4>
              <p>Como usuario te haces acreedor a m??ltiples descuentos y promociones.</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4><a href="">Comunicaci??n simple</a></h4>
              <p>El sistema intuitivo te facilita los procesos de b??squeda y selecci??n.</p>
            </div>
          </div>

          <div class="col-xl-2 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-credit-card"></i></div>
              <h4><a href="">Pagos sin efectivo</a></h4>
              <p>Sin riesgos por portabilidad de efectivo, los pagos se congelan hasta obtener el servicio.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MEMBRESIAS</h2>
        </div>

        <div class="row">

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3 style="font-weight: bold;">GRATIS</h3>
              <h4><sup>$</sup>0<span>por 30 d??as</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Logo o imagen</li>
                <li><i class="bx bx-check"></i> Servicio/Giro</li>
                <li><i class="bx bx-check"></i> Ubicaci??n geografica</li>
                <li><i class="bx bx-check"></i> Un n??mero de contacto</li>
                <li class="na"><i class="bx bx-x"></i> <span>Link de Redes</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Forma de trabajo</span></li>
              </ul>
              <a href="#" class="buy-btn">Empezar</a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3 style="font-weight: bold;">LITTE</h3>
              <h4><sup>$</sup>500<sup>.00</sup><span>por 30 d??as</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Logo o imagen</li>
                <li><i class="bx bx-check"></i> Servicio/Giro</li>
                <li><i class="bx bx-check"></i> Ubicaci??n geogr??fica</li>
                <li><i class="bx bx-check"></i> Link de Redes</li>
                <li><i class="bx bx-check"></i> Forma de Trabajo</li>
                <li><i class="bx bx-check"></i> Experiencia</li>
                <li><i class="bx bx-check"></i> Costo de Honorarios</li>
              </ul>
              <a href="#" class="buy-btn">Empezar</a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3 style="font-weight: bold;">B??SICO</h3>
              <h4><sup>$</sup>999<sup>.00</sup><span>por 30 d??as</span></h4>
              <ul>
              <li><i class="bx bx-check"></i> Logo o imagen</li>
                <li><i class="bx bx-check"></i> Servicio/Giro</li>
                <li><i class="bx bx-check"></i> Ubicaci??n geogr??fica</li>
                <li><i class="bx bx-check"></i> Link de Redes</li>
                <li><i class="bx bx-check"></i> Forma de Trabajo</li>
                <li><i class="bx bx-check"></i> Experiencia</li>
                <li><i class="bx bx-check"></i> Costo de Honorarios</li>
                <li><i class="bx bx-check"></i> Beneficios de t?? servicio</li>
                <li><i class="bx bx-check"></i> Foto de portada</li>
                <li><i class="bx bx-check"></i> (Dos)im??genes</li>
              </ul>
              <a href="#" class="buy-btn">Empezar</a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3 style="font-weight: bold;">PREMIUM</h3>
              <h4><sup>$</sup>1,999<sup>.90</sup><span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Logo o imagen</li>
                <li><i class="bx bx-check"></i> Servicio/Giro</li>
                <li><i class="bx bx-check"></i> Ubicaci??n geogr??fica</li>
                <li><i class="bx bx-check"></i> Link de Redes</li>
                <li><i class="bx bx-check"></i> Forma de Trabajo</li>
                <li><i class="bx bx-check"></i> Experiencia</li>
                <li><i class="bx bx-check"></i> Costo de Honorarios</li>
                <li><i class="bx bx-check"></i> Beneficios de t?? servicio</li>
                <li><i class="bx bx-check"></i> Foto de portada</li>
                <li><i class="bx bx-check"></i> Un video o gift</li>
                <li><i class="bx bx-check"></i> (Tres)Imagenes</li>
                <li><i class="bx bx-check"></i> Dos sucursales m??s/ubicaci??n</li>
                <li><i class="bx bx-check"></i> Tarjetas digitales</li>
                <li><i class="bx bx-check"></i> Sistema de reserva de citas</li>
                
              </ul>
              <a href="#" class="buy-btn">Empezar</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= textclicciina ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>CLICCIONA</h3>
            <p> Es la ??nica plataforma dedicada a crear ??l ecosistema que potencia t?? ??xito profesional, convirti??ndose en la herramienta que en un clic te permite comparar y elegir desde profesionales freelancer, hasta  grandes empresas de servicios, de forma SEGURA Y AMIGABLE.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <!--<a class="cta-btn align-middle" href="#">Call To Action</a>-->
          </div>
        </div>

      </div>
    </section>
    <!-- textclicciina fin -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactanos</h2>
         
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Localizaci??n:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefono:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>
          <!--
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres"/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Correo</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Por favor introduzca una direcci??n de correo electr??nico v??lida" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Por favor escribe algo para nosotros"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando..</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ??Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>
        -->
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Clicciona</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>SERVICIOS</h4>
            <ul>
            <!--ACORDEON DE PAQUETES -->
              <li data-toggle="modal" data-target=".bd-example-modal-lg-1"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Paquetes</a></li>
              <div class="modal fade bd-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                .body{
                                  background-color: #f3f5fa;
                                 
                                }
                                .accordion1 {
                                  background-color: #eee;
                                  color: #444;
                                  cursor: pointer;
                                  padding: 18px;
                                  width: 100%;
                                  border: none;
                                  text-align: left;
                                  outline: none;
                                  font-size: 15px;
                                  transition: 0.4s;
                                  border-radius: 10px;
                                  font-weight: bold;
                                }
                                
                                .active1, .accordion1:hover {
                                  transition: all .100s;
                                  border: #1abc9c solid 4px;
                                }
                                
                                .panel{
                                  
                                  padding: 0 18px;
                                  background-color: #09052b;
                                  max-height: 0;
                                  overflow: hidden;
                                  transition: max-height 0.2s ease-out;
                                }

                                .panel li{
                                  color: #fff;
                                  line-height : 10px;
                                }

                                .close{
                                  position: absolute;
                                  left: 0;
                                  font-size: 40px;
                                  padding: 1rem 2rem;
                                  margin: 0rem 0rem 0rem auto;
                                  width: 30px;

                                }
                                </style>
                                </head>
                                <body>
                                <button class="close" data-dismiss='modal' >&times;</button>
                                <button class="accordion1">GRATIS (freelancer)</button>
                                  <div class="panel">
                                    <ul>
                                    <li>Logo o imagen</li>
                                    <li>Servicio/giro</li>
                                    <li>Ubicaci??n geogr??fica</li>
                                    <li>Un n??mero de contatcto</li>
                                    </ul>
                                  </div>
                                
                                  <button class="accordion1">LITTE $500.00 x 30d??as</button>
                                  <div class="panel">
                                    <ul>
                                    <li>Logo o imagen</li>
                                    <li>Servicio/giro</li>
                                    <li>Ubicaci??n geogr??fica</li>
                                    <li>N??mero de contatcto</li>
                                    <li>Links de redes</li>
                                    <li>Forma de trabajo</li>
                                    <li>Experiencia</li>
                                    <li>Costo de honorarios</li>
                                    </ul>
                                  </div>
                                
                                
                                  <button class="accordion1">B??SICO $999.00 x 30d??as</button>
                                  <div class="panel">
                                    <ul>
                                    <li>Logo o imagen</li>
                                    <li>Servicio/giro</li>
                                    <li>Ubicaci??n geogr??fica</li>
                                    <li>N??mero de contatcto</li>
                                    <li>Links de redes</li>
                                    <li>Forma de trabajo</li>
                                    <li>Experiencia</li>
                                    <li>Costo de honorarios</li>
                                    <li>Promociones/descuentos</li>
                                    <li>Beneficios de t?? servicio</li>
                                    <li>Foto de portada</li>
                                    <li>(Dos) Imagenes</li>
                                    </ul>
                                  </div>
                                
                                  <button class="accordion1">PREMIUM $1,999.90 x 30d??as</button>
                                  <div class="panel">
                                    <ul>
                                    <li>Logo o imagen</li>
                                    <li>Servicio/giro</li>
                                    <li>Ubicaci??n geogr??fica</li>
                                    <li>N??mero de contatcto</li>
                                    <li>Links de redes</li>
                                    <li>Forma de trabajo</li>
                                    <li>Experiencia</li>
                                    <li>Costo de honorarios</li>
                                    <li>Promociones/descuentos</li>
                                    <li>Beneficios de t?? servicio</li>
                                    <li>Foto de portada</li>
                                    <li>Un video o gift</li>
                                    <li>(Tres) Im??genes</li>
                                    <li>Dos sucursal m??s/ubicaci??n</li>
                                    <li>Tarjetas Digitales</li>
                                    <li>Sistema de reserva de citas</li>
                                    </ul>
                                  </div>
                                
                                  <button class="accordion1">CORPORATIVO $?,???.? x 30d??as</button>
                                  <div class="panel">
                                    <ul>
                                    <li>Logo o imagen</li>
                                    <li>Servicio/giro</li>
                                    <li>Ubicaci??n geogr??fica</li>
                                    <li>N??mero de contatcto</li>
                                    <li>Links de redes</li>
                                    <li>Forma de trabajo</li>
                                    <li>Experiencia</li>
                                    <li>Costo de honorarios</li>
                                    <li>Promociones/descuentos</li>
                                    <li>Beneficios de t?? servicio</li>
                                    <li>Foto de portada</li>
                                    <li>Un video o gift</li>
                                    <li>(Cuatro) Im??genes</li>
                                    <li>Sucursales ilimitadas/ubicaci??n</li>
                                    <li>Informe del total de visitas mensuales a su perfil</li>
                                    <li>Tarjeta Digital</li>
                                    <li>Sistema de reserva de citas</li>
                                    <li>Publicaci??n de hasta 7 vacantes por mes</li>
                                    <li>Invitaciones para eventos de NETWORKING</li>
                                    </ul>
                                  </div>

                                  <button class="accordion1">TODOS LOS PAQUETES INCLUYEN:</button>
                                  <div class="panel">
                                    <ul>
                                    <li>SOPORTE ESPECIALIZADO</li>
                                    <li>MULTIPLES BENEFICIOS Y DESCUENTOS CON UNIVERSIDADES Y COWORKINGS</li>
                                    <li>ALERTAS DE CURSOS, TALLERES Y CAPACITACIONES ONLINE ?? PRECENCIALES, 
                                      GRATUITAS Y EN PAGO, PARA QUE GENERES MAYORES INGRESOS, BIENESTAR PERSONAL Y 
                                      PROFESIONAL
                                    </li>
                                    <li>ACCESO A GRUPOS PRIVADOS DE NETWORKING</li>
                                    <li>ALERTAS RELEVANTES DE NOTICIAS RELACIONADAS CON T?? PROFESI??N</li>
                                    </ul>
                                  </div>
                                
                                <script>
                                var acc = document.getElementsByClassName("accordion1");
                                var i;
                                
                                for (i = 0; i < acc.length; i++) {
                                  acc[i].addEventListener("click", function() {
                                    this.classList.toggle("active1");
                                    var panel = this.nextElementSibling;
                                    if (panel.style.maxHeight) {
                                      panel.style.maxHeight = null;
                                    } else {
                                      panel.style.maxHeight = panel.scrollHeight + "px";
                                    } 
                                  });
                                }
                                </script>
                                </body>
                            </div>
                          </div>
                        </div>

             <!--ACORDEON DE SERVICIOS ADICIONALES --> 
              <li data-toggle="modal" data-target=".bd-example-modal-lg-4"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Servicios Adicionales</a></li>
              <div class="modal fade bd-example-modal-lg-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                  .body{
                                    background-color: #f3f5fa;
                                  }
                                .accordion2 {
                                  background-color: #eee;
                                  color: #444;
                                  cursor: pointer;
                                  padding: 18px;
                                  width: 100%;
                                  border: none;
                                  text-align: left;
                                  outline: none;
                                  font-size: 15px;
                                  transition: 0.4s;
                                  border-radius: 10px;
                                }
                                
                                .active2, .accordion2:hover {
                                  transition: all .100s;
                                  border: #1abc9c  solid 4px;
                                }
                                
                                .panel{
                                  padding: 0 18px;
                                  background-color: #09052b;
                                  max-height: 0;
                                  overflow: hidden;
                                  transition: max-height 0.2s ease-out;
                                }
                                
                                .panel p{
                                  color: #fff;

                                }

                                
                                </style>
                                </head>
                                <body>
                                
                                <button class="close" data-dismiss='modal' >&times;</button>
                                
                                  <button class="accordion2">Servicios adicionales</button>
                                  <div class="panel">
                                    <p>Nuestros clientes encuentran un apoyo en los servicios adicionales para potenciar su
                                       ??xito. Te presentamos una forma m??s para que aumentes tus posibilidades de crecimiento a la 
                                     medida de tus preferencias.</p>
                                  </div>

                                  <button class="accordion2">1. Monitoreo de vistas de t?? perfil:</button>
                                  <div class="panel">
                                   <p style="color: #fff">Dale seguimiento a t?? perfil, as?? podr??s saber que tipo de target est??s 
                                     atrayendo y dirigir t?? imagen a aquellos de t?? inter??s.</p>
                                  </div>
                                
                                
                                  <button class="accordion2">2.	Segmentaci??n de p??blico potencial</button>
                                  <div class="panel">
                                    <p>Ve directo al blanco de t?? inter??s, te ayudaremos a ser visto por un cliente espec??fico.</p>
                                  </div>
                                
                                  <button class="accordion2">3.	Anuncios de cursos, talleres y conferencias</button>
                                  <div class="panel">
                                   <p>
                                    ??Tienes mucho que compartir o pr??ximos eventos y te gustar??a invitar a todos nuestros profesionistas?
                                     est??s en el lugar indicado.
                                   </p>
                                  </div>
                                
                                  <button class="accordion2">4.	Publicaci??n de oportunidades laborales</button>
                                  <div class="panel">
                                   <p>
                                    ??Te gustar??a tener el control de los profesionales interesados en tus vacantes laborales? Publ??calo con nosotros, ??ste es un mar de profesionales
                                     interesados en trabajar contigo.
                                   </p>
                                  </div>

                                  <button class="accordion2">5.	Publicaci??n de video-cursos o talleres en la plataforma</button>
                                  <div class="panel">
                                  <p>??Quieres compartir tus conocimientos, pero te preocupa la protecci??n de tus creaciones? 
                                    Nosotros te ofrecemos el uso de un espacio exclusivo para capacitar o educar, mejorando 
                                    t?? marca personal y lo mejor de todo es que estar?? protegido por nuestro sistema de
                                     encriptado end to end. Lo que puede evitar su descarga.</p>
                                  </div>

                                     <button class="accordion2">6.	Entrevista domiciliaria</button>
                                  <div class="panel">
                                  <p>??Quieres darle una vista distinta y seducir a t?? cliente de forma m??s cercana? Inv??talos a pasar 
                                    a tus instalaciones, diles qui??n eres, a qu?? te dedicas, de lo que eres capaz, tus logros y c??mo puedes
                                    ayudarlos. A trav??s de una entrevista puedes lograrlo.</p>
                                  </div>

                                  <button class="accordion2">7.	Cobertura de eventos talleres y presentaciones</button>
                                  <div class="panel">
                                  <p>Sabemos que est??s creciendo y no compartirlo puede hacerte perder clientes potenciales, haz qu?? te vean participar 
                                    en momentos importantes para tu servicio, reconocer??n t?? potencial y se animar??n por t?? marca.</p>
                                  </div>

                                  <button class="accordion2">8.	Tarjetas virtuales</button>
                                  <div class="panel">
                                  <p>??ste es el momento de entregarte a tus clientes con una imagen corporativa y profesional, el 80% de las ventas s?? cierran 
                                    por la imagen transmitida. No pierdas m??s clientes imp??ctalos desde ??l inicio con una tarjeta interactiva de contacto personal.</p>
                                  </div>

                                  <button class="accordion2">9.	Uso de espacios en banners</button>
                                  <div class="panel">
                                  <p>Puedes aprovechar la plataforma para darle mayor visibilidad a tus servicios dirigidos a profesionistas.</p>
                                  </div>
                                
                                <script>
                                var acc = document.getElementsByClassName("accordion2");
                                var i;
                                
                                for (i = 0; i < acc.length; i++) {
                                  acc[i].addEventListener("click", function() {
                                    this.classList.toggle("active2");
                                    var panel = this.nextElementSibling;
                                    if (panel.style.maxHeight) {
                                      panel.style.maxHeight = null;
                                    } else {
                                      panel.style.maxHeight = panel.scrollHeight + "px";
                                    } 
                                  });
                                }
                                </script>
                                
                                </body>
                            </div>
                          </div>
                        </div>
                        <!--SERVICIOS BUSINESS -->
                        <li data-toggle="modal" data-target=".bd-example-modal-lg-5"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Servicios Business</a></li>
                        <div class="modal fade bd-example-modal-lg-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                .body{
                                    background-color: #f3f5fa;
                                  }
                                .accordion3{
                                  background-color: #eee;
                                  color: #444;
                                  cursor: pointer;
                                  padding: 18px;
                                  width: 100%;
                                  border: none;
                                  text-align: left;
                                  outline: none;
                                  font-size: 15px;
                                  transition: 0.4s;
                                  border-radius: 10px; 
                                }
                                
                                .active3, .accordion3:hover {
                                  transition: all .100s;
                                  border: #1abc9c  solid 4px;
                                }
                                
                                .panel{
                                  padding: 0 18px;
                                  background-color: #09052b;
                                  max-height: 0;
                                  overflow: hidden;
                                  transition: max-height 0.2s ease-out;
                                }
                                
                                .panel p{
                                  color: #fff;

                                }

                                
                                </style>
                                </head>
                                <body>
                                <button class="close" data-dismiss='modal' >&times;</button>
                                  <button class="accordion3">Clicciona Bussines</button>
                                  <div class="panel">
                                    <p>Ponemos a t?? alcance CLICCIONA BUSINESS, con soluciones personalizadas de asesor??a, 
                                      gesti??n, capacitaci??n y talleres, que pondr??n al d??a t?? PyME ?? empresa. </p>
                                  </div>

                                  <button class="accordion3">Beneficios</button>
                                  <div class="panel">
                                   <ul>
                                     <p>Empresas de calidad: <br>
                                      Haremos el check up de t?? empresa en ??reas de t?? elecci??n y te ofreceremos opciones para su ??ptimo funcionamiento. Con la garant??a del trato y precio justo a t?? presupuesto.
                              </p>
                                     <p>Convenios de confianza:<br>
                                      Hemos convenido con empresas de trayectoria y reputaci??n que estamos seguros ser??n de t?? entera satisfacci??n.
                              </p>
                                   </ul>
                                   <ol>
                                     <li>Clicciona  seguridad e higiene
                                      </li>
                                     <li>Clicciona consultor??a especializada</li>
                                     <li>Clicciona marketing.</li>
                                  
                                   </ol>
                                  </div>
                                
                              
                                
                                <script>
                                var acc = document.getElementsByClassName("accordion3");
                                var i;
                                
                                for (i = 0; i < acc.length; i++) {
                                  acc[i].addEventListener("click", function() {
                                    this.classList.toggle("active3");
                                    var panel = this.nextElementSibling;
                                    if (panel.style.maxHeight) {
                                      panel.style.maxHeight = null;
                                    } else {
                                      panel.style.maxHeight = panel.scrollHeight + "px";
                                    } 
                                  });
                                }
                                </script>
                                
                                </body>
                            </div>
                          </div>
                        </div>
              <li><i class="bx bx-chevron-right"></i> <a href="universidades.php">Universidades</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Noticias</a></li>
             <!--Ventana CONTACTO --> 
              <li data-toggle="modal" data-target=".bd-example-modal-lg-6"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Contacto</a></li>
              <div class="modal fade bd-example-modal-lg-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="padding: 0 18px">
                              <h1 style="color:black; text-align: center;">Contacto</h1>
                              <p style="color: black;">SI NECESITAS COMUNICARTE PARA:</p>
                              <ul>
                              <li style="color: black;">Ayuda y soporte t??cnico en: <br> infooficial@clicciona.com</li>
                              <li style="color: black;">Quejas y sugerencias en: <br> dilooficial@clicciona.com</li>
                              <li style="color: black;">Relacionado con inconformidad de t??rminos y pol??ticas en: <br> privacidadoficial@clicciona.com</li>
                              <li style="color: black;">Relacionado con cobros: <br> pagosoficial@clicciona.com</li>
                            </ul>
                              <p style="color: black;">Dirige adecuadamente t?? petici??n de lo contrario no garantizamos sea contestada por el ??rea responsable.</p>
                            </div>
                          </div>
                        </div>


            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>LEGALIDAD</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aviso De Privacidad</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pol??ticas De Privacidad</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos Y Condiciones</a></li>
             <!--ACORDEON DE PREGUNTAS FRECUENTES --> 
              <li data-toggle="modal" data-target=".bd-example-modal-lg-7"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Preguntas Frecuentes</a></li>
              <div class="modal fade bd-example-modal-lg-7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .accordion6 {
          background-color: #eee;
          color: #444;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
          border-radius: 10px;
        }
        
        .active6, .accordion6:hover {
          transition: all .100s;
          border: #1abc9c  solid 4px;
        }
        
        .panel{
          padding: 0 18px;
          background-color: #09052b;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
        }

        p{
          text-align: justify;
        }
        </style>
        </head>
        <body>
        <button class="close" data-dismiss='modal' >&times;</button>
        
        <button class="accordion6">??Cu??nto me costar?? usar la plataforma?</button>
        <div class="panel">
          <p>El uso de ??sta como usuario consumidor (cliente) no tiene ning??n costo.
        El uso de la misma c??mo usuario asociado (profesionista) tendr?? el costo del
        paquete que adquieras.</p>
        </div>
        
        <button class="accordion6">??En que horarios y d??nde podr?? usar la plataforma?</button>
        <div class="panel">
          <p>El servicio est?? disponible 24 horas, 7 d??as a la semana y los 12 meses del
        a??o, siempre que cuentes con el dispositivo adecuado, conexi??n a internet y
        desde cualquier ubicaci??n en que te encuentres.</p>
        </div>
        
        
        <button class="accordion6">??Puedo hacer cambio de datos personales al haber generado m?? usuario?</button>
        <div class="panel">
          <p>Claro, puedes hacer la correcci??n de ortograf??a, cambiar un tel??fono o e-mail,
        siempre que no sean sustanciales de lo contrario el sistema detectara un
        persona distinta y no lo permitir.</p>
        </div>
        
        <button class="accordion6">??Puedo usar la cuenta de un familiar o amigo?</button>
        <div class="panel">
          <p>Es importante que el usuario sea personal ya que usa datos y contrase??as
        confidenciales, as?? que no est?? permitido.</p>
        </div>
        
        <button class="accordion6">??Cu??ntos profesionistas puedo buscar y contratar?</button>
        <div class="panel">
          <p>Cu??ntos requieras, no existe l??mite.</p>
        </div>
        
        <button class="accordion6">??Tengo que hacer alg??n pago o proceso especial para acceder a las
        oportunidades laborales o cursos de la plataforma?</button>
        <div class="panel">
          <p>No, CLICCIONA est?? COMPROMETIDA con repuntar e IMPULSAR a los
        profesionistas en todos sus ??ngulos por ello el acceso a las vacantes de
        empresas o similares; as?? como los cursos diversos publicados en la plataforma
        son completamente GRATUITOS y de libre acceso, lo ??nico que necesitas es
        ser usuario de la plataforma.</p>
        </div>
        
        <button class="accordion6">??Debo ser usuario asociado (profesionista) para adquirir alg??n servicio
        adicional de publicidad que ofrece la plataforma, con independencia de
        sus paquetes?</button>
        <div class="panel">
          <p>No es necesario, con s??lo crear t?? cuenta de usuario consumidor (cliente) es
        suficiente y puedes contratar cuantos necesites.</p>
        </div>
        
        
        <button class="accordion6">??Los descuentos y promociones de Universidades nacionales o
        extranjeras y Coworkings ofrecidos en la plataforma, son exclusivamente
        para los usuarios asociados (profesionistas)?</button>
        <div class="panel">
          <p>No, puedes acceder a dichas promociones o descuentos con el s??lo hecho de
        ser usuario de la plataforma ??NO ES GENIAL?.</p>
        </div>
        
        <button class="accordion6">??Puedo comentar en el perfil de un profesional por alg??n servicio
        insatisfecho?</button>
        <div class="panel">
          <p>Siempre que no sea agresivo, descort??s o intencionado al desprestigio. Para
        nosotros es importante que recibas un servicio de calidad y contar con
        profesionales ejemplares, por lo que podr??s darle la calificaci??n m??s baja e
        informar t?? insatisfacci??n al correo dilooficial@clicciona.com dentro de los 7 d??as
        
        siguientes a t?? compra del servicio, le daremos seguimiento para tomar
        acciones al respecto.</p>
        </div>
        
        <button class="accordion6">??Tengo garant??as de los servicios adquiridos?</button>
        <div class="panel">
          <p>CLICCIONA no otorga garant??as sobre servicios de usuarios asociados
        (profesionistas), las garant??as que pudieran existir deber??n ser solicitadas con
        su proveedor de servicios profesionales (usuario asociado profesionista),
        quienes en caso de otorgarlas deber??n d??rselas a conocer y responder por las
        mismas de forma particular.</p>
        </div>
        
        <button class="accordion6">??Puedo solicitar el reembolso de un paquete o servicio sin antes haberlo
        usado?</button>
        <div class="panel">
          <p>Antes de la compra de un paquete o servicio el sistema te pide confirmes t??
        compra, por lo que se entiende est??s seguro de la misma y no hay reembolso.</p>
        </div>
        
        <button class="accordion6">??Puedo cambiar de paquete de forma ascendente o descendente?</button>
        <div class="panel">
          <p>S?? ya hiciste la confirmaci??n de pago te pedimos env??es t?? solicitud de cambio
        de paquete al buz??n de ayuda y soporte infooficial@clicciona.com dentro de
        las 24 horas siguientes a t?? pago, para hacer el cambio de paquete; sin
        embargo no hay ajustes de devoluciones cuando es un paquete de menor
        costo, s??lo pago de diferencia por adquirir un paquete de costo mayor.</p>
        </div>
        
        <button class="accordion6">??Debo proporcionar los requisitos que s?? solicitan para generar un
        usuario asociado profesionista?</button>
        <div class="panel">
          <p>S??, para activar el servicio es fundamental cumplir con ??stos lo antes posible
        luego de haber generado t?? usuario y as?? la plataforma pueda confiar en tu
        calidad c??mo profesional; de lo contrario no podr??s publicitarte.</p>
        </div>
        
        <button class="accordion6">??Mis documentos de profesional son visibles para los clientes?</button>
        <div class="panel">
          <p>No, estos s??lo funcionan para comprobar t?? identidad ante CLICCIONA.</p>
        </div>
        
        <button class="accordion6">??Cu??l es la duraci??n de un usuario en la plataforma?</button>
        <div class="panel">
          <p>De un usuario consumidor (cliente) es indefinido, mientras la plataforma est??
        vigente o hasta que s?? compruebe un des-uso prolongado.
        De un usuario asociado (profesionista), durante todo el tiempo que est??n
        activos sus paquetes.</p>
        </div>
        <button class="accordion6">??Cu??les son los contactos para obtener, ayuda y soporte t??cnico, emitir
        una queja, felicitaci??n o tratar asuntos de pagos?</button>
        <div class="panel">
          <p>Ayuda y soporte t??cnico en infooficial@clicciona.com<p>
         Quejas y sugerencias en dilooficial@clicciona.com<p>
         Relacionado con inconformidad de t??rminos y pol??ticas en privacidadoficial@clicciona.com<p>
         Relacionado con cobros pagosoficial@clicciona.com</p>
        </div>
        
        <script>
        var acc = document.getElementsByClassName("accordion6");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active6");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
        </script>
        
        </body>
    </div>
  </div>
  </div>

  <!--Quejas y sugerencias -->
  <li data-toggle="modal" data-target=".bd-example-modal-lg-8"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Quejas y sugerencias</a></li>
  <div class="modal fade bd-example-modal-lg-8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="padding: 0 18px; border: solid 15px #1abc9c;">
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <style>
            .modal{
              border-radius: 5px;
            }
         .modal-content{
           width: 100%;
           position:relative;
           border-radius: 10px;
           text-align: center;
         }

         .modal-content form{
           background-color: #09052b;
           padding: 10px 20px 0px 20px;
           margin-top: 20px;
           border-radius: 5px;
           box-sizing: border-box;
           margin: 20px 10px 20px 10px;
         }

         .modal-content input, textarea{
           width: 70%;
           margin-bottom: 20px;
           padding: 7px;
           box-sizing: border-box;
           font-size: 17px;
           border: 3px;
           border-radius: 5px;
           line-height: 1.5;
         }
        .modal-content textarea{
          max-height: 100px;
          min-height: 130px;
        }
        .modal-content h5{
          padding-left: 50px;
          color: #fff;
        
         }

         .modal-content h2{
          padding-left: 30px;
          color: #fff;
               }

          .modal-content h6{
          color: #fff;
               }
           

          </style>
        </head>
        <body>
        <button class="close" data-dismiss='modal' >&times;</button>
        <form action="">
       <h2>Quejas y sugerencias</h2>
       <h5>Llena el siguiente formulario</h5>
       <input type="text" name="NombreCompleto" placeholder="Nombre completo">
       <input type="text" name="NombreMarca" placeholder="Nombre de marca">
       <input type="text" name="CorreoElectronico" placeholder="Correo electronico">
       <input type="text" name="NumeroContacto" placeholder="N??mero de contacto"> 
       <input type="text" name="Ubicacion" placeholder="Ubicaci??n geogr??fica"> 
       <textarea name="Mensaje" placeholder="Escriba aqui su mensaje"></textarea>
       <h6>??Puede adjuntar una captura de pantalla del error?</h6>
       <input type="file">
       <input type="button" value="ENVIAR" id="botonEnviar">
      </form>
      
      </body>

      </div>
    </div>
  </div>

  <!--Ventana NOSOTROS -->
  <li data-toggle="modal" data-target=".bd-example-modal-lg-9"><i class="bx bx-chevron-right"></i> <a class="py-1 px-0 px-lg-1" href="#footer">Nosotros</a></li>
  <div class="modal fade bd-example-modal-lg-9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content" style="padding: 0 18px; border: solid 7px #1abc9c;">
                              <button class="close" data-dismiss='modal' >&times;</button>
                                <h1 style="color:black; text-align: center;" >Nosotros</h1>
                                <p style="color: black;">En M??xico existe una desigualdad en oportunidades de crecimiento en ??l ??mbito profesional qu?? estanca y 
                                  restringe la visi??n de ??xito. Somos una empresa enfocada en la prestaci??n de servicios con la misi??n de potenciar el crecimiento
                                   de profesionistas; facilitamos ??l espacio para ser un veh??culo de transformaci??n. </p>

                                   <p style="color: black; font-weight: bold;">Para nosotros es un placer contribuir al crecimiento de los profesionistas mexicanos ????GRACIAS por creer en lo hecho en M??xico, 
                                   ????GRACIAS por elegirnos y GRACIAS por darnos t?? voto de confianza!!.</p>
                              </div>
                            </div>
                          </div>
                         </div>

            <div class="col-lg-3 col-md-6 footer-links">
              
              <p>CLICCIONA, es la ??nica plataforma dedicada a crear ??l ecosistema que potencia t?? ??xito profesional, convirti??ndose en la herramienta que en un clic te permite comparar y elegir desde profesionales freelancer, hasta grandes empresas de servicios, de forma SEGURA Y AMIGABLE.</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        
        <div class="credits">
     
        &copy; Copyright <strong><span>Clicciona</span></strong>
        </div>
      </div>
    </footer><!-- End Footer -->

    
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#barra').load('components/barra.php');
      });
      $('#acceso').click(function() {
         $('#acceso_modal').modal('show');
      });
      $('#forget_password').click(function() {
        $('#acceso_modal').modal('hide');
        $('#forget_password_modal').modal('show');
      });
      $('#registrarse1').click(function() {
        $('#acceso_modal').modal('hide');
        $('#registrarse_modal').modal('show');
      });
      $('#cancel_reset').click(function() {
        $('#forget_password_modal').modal('hide');
        $('#acceso_modal').modal('show');
      });
      $('#login').click(function() {
        if ($('#email').val()=="" || $('#password')=="") {
          Toastify({text: "Ingresa tus credenciales correctamente.", duration: 3000, gravity: "bottom", position: "right"}).showToast();
        }else{
          $.ajax({
            url: 'login/access.php',
            type: 'POST',
            data: "email="+$('#email').val()+"&password="+$('#password').val(),
          })
          .done(function(r) {
            if(r==1){
              $('#barra').load('components/barra.php');
              $('#acceso_modal').modal('hide');
              $('#email').val("");
              $('#password').val("");
              Toastify({text: "Iniciaste sesi??n.", duration: 3000, gravity: "bottom", position: "right"}).showToast();
            }else{
              Toastify({text: "Correo y/o contrase??a incorrectos.", duration: 3000, gravity: "bottom", position: "right"}).showToast();
            }
          })
          .fail(function() {
            console.log("error");
          });
          
        }
      });
      $('#reset_password').click(function(){
        $.ajax({
          url: 'login/correo_recuperacion_cuenta.php',
          type: 'POST',
          data: "correo="+$('#email_reset_password').val(),
        })
        .done(function(r) {
          if (r==1) {
            Toastify({text: "El correo se envio exitosamente.", duration: 3000, gravity: "bottom", position: "right"}).showToast();
            $('#email_reset_password').val("");
          }else if (r==5) {
            Toastify({text: "Correo no registrado.", duration: 3000}).showToast();
          }else{
            console.log("Correo no enviado");
          }
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      });
      $('#tipo_usuario_register').change(function(){
        if ($('#tipo_usuario_register').val()==""){
          $('#campos').empty();
        }else{
          $.ajax({
            url: 'php/sesiones.php',
            type: 'POST',
            data: "funcion=1&parametro="+$('#tipo_usuario_register').val(),
          })
          .done(function(r) {
            if (r==1) {
              $('#campos').load('components/elementos.php');
            }else{
              console.log("Error");
            }
          })
          .fail(function() {
            console.log("error");
          });
        }
      });
    </script>
</body>
</html>