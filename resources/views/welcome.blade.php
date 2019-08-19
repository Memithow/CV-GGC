<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guillermo González</title>

<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil&display=swap" rel="stylesheet">
        <script src="{{ asset('js/fontawesome.min.js') }}"></script>


<!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    </head>

    <body>

<!-- Flotante Social -->
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
          <i class="fas fa-user"></i>
        </a>
        <ul>
          <li><a class="btn-floating blue"><i class='fab fa-facebook-f text-white'></i></a></li>
          <li><a class="btn-floating green"><i class="fas fa-phone-alt"></i></a></li>
          <li><a class="btn-floating red"><i class="far fa-envelope"></i></a></li>
          <li><a class="btn-floating orange"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>

<!-- Navegador -->
      <div class="navegador">
          <ul id="slide-out" class="sidenav">
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="images/office.jpg">
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
              </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>

<!-- Banner -->
        <header>
            <div class="parallax-container parallax1">
              <div class="parallax">
                <div id="triangulo-banner"></div>
                <div id="triangulo"></div>
                <div id="triangulo-gris"></div>
                <div id="titulo"><STRONG>Guillermo González <br> Cayetano</STRONG></div>
                <img class="banner" id="banner-1300" src="{{ asset('img/banner-1300.JPG') }}">     
              </div>
            </div>
        </header>
              
<!-- Perfil -->
        <div id="blue" class="block blue">
            <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 align-middle text-nav">Perfil</h5>
            </div>
          <section>
          <div class="cantainer">

            <div class="circle_p c-uno shadow-lg" data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000"><img width="110%" style="margin-top: -5%; margin-left: -5%" src="{{ asset('img/25años.png')}}" id="25a"></div>
            <div class="circle_p c-dos shadow-lg" data-aos="flip-right" data-aos-anchor-placement="top-center" data-aos-duration="2000"><img width="100%" src="{{ asset('img/azcapotzalco.png') }}"></div>
            <div class="circle_p c-tres shadow-lg" data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="3000"><img width="100%" src="{{ asset('img/UNAM.svg') }}"></div>

            <div class="row justify-content-center" data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-duration="3000">
              <div class="circle_p my-5 shadow"><img width="100%" src="{{ asset('img/profile.jpg')}}" alt="SelfieMemo"></div>
            </div>
              
            <div class="row mb-0 pb-5 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="top-center">
              <div id="section_perfil" class="col-12 col-md-6 col-lg-5 col-xl-4 pb-md-5 text-white">
                <div class="p-relative">
                <p class="mb-0 mb-md-3">Nombre</p>
                <p class="t-grande"><strong>Guillermo González Cayetano</strong></p><br>
                </div>
                <div class="p-relative">
                <p class="mb-0 mb-md-3">Edad</p>
                <p class="t-grande"><strong>25 Años</strong></p><br>
                </div>
                <div class="p-relative">
                <p class="mb-0 mb-md-3">Estado civil</p>
                <p class="t-grande"><strong>Soltero</strong></p><br>
                </div>
                <div class="p-relative">
                <p class="mb-0 mb-md-3">Ubicación</p>
                <p class="t-grande"><strong>Azcapotzalco, CDMX</strong></p><br>
                </div>
                <div class="p-relative">
                <p class="mb-0 mb-md-3">Formación</p>
                <p class="t-grande formacion"><strong>Ing. Telecomunicaciones,<br> sistemas y electrónica <br></strong>
                </p></div>
              </div>
            </div>

            <div class="row d-flex justify-content-center pb-5 mb-0" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="top-center">
              <div class="col-11 col-md-9 col-lg-7 text-white" id="resumen">
                <h4 class="text-white">Resumen</h4>
                <p>Soy estudiante en proceso de ser pasante. Tengo interés sobre las áreas de desarrollo de software y desarrollo web.</p><br>

                <p>Mi intención actualmente es aprender y adquirir experiencia sobre mis objetivos; tener un panorama más amplio de lo que puedo dar y a donde puedo llegar. A cambio me comprometo a ser totalmente servicial y ofrecer mis habilidades para todo proceso que me ayude a alcanzar a mis metas.</p><br>

                <p>Me considero una persona que aprende rápido, autónomo, entregado, ordenado y servicial.</p><br><br><br>
              </div>
            </div>  

          </div>
          </section>
        </div>

<!-- Experiencia -->
        <div id="red" class="block red lighten-1 pb-5">
            <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 text-nav">Experiencia</h5>
            </div>
          <section>
            <div class="cantainer mt-5 justify-content-around mb-0" id="alineacion-media">
              <div class="row d-flex justify-content-center mt-5 mb-0">
                
                <div class="card col-10 col-md-5 col-lg-3 col-xl-2 mx-5" data-aos="flip-up" data-aos-duration="3000" data-aos-anchor-placement="top-center">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('img/Siegfried.png') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Siegfried Rhein <br>Febrero 2019 - Actual<i class="material-icons right">more_vert</i></span>
                    <p><a href="https://siegfried.com.mx/" target="_blank">Enlace Pagina Web</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Siegfried Rhein<i class="material-icons right">close</i></span>
                    <p>Empresa farmacéutica dedicada al desarrollo, producción, comercialización de productos farmacéuticos y distribución de productos.</p>
                    <p>Becario de desarollo web.</p>
                    <p>Desarrollo de aplicaciones internas para procesos administrativos internos.</p>
                    <p>Creación de dos aplicaciones web para formularios de administracion, plantilla para uso de OrbixPharma e implementacion de plantillas de notificacion por correo electrónico con HTML para mejorar vista.</p>
                    <p>Desarrollo de herramientas con framework como Laravel, Bootstrap, JQuery, JavaScript, AnimateCSS.</p>
                    <br><br><br>
                    <p><address>Coprorativo Santa Fe, Antonio Dovalí Jaime #70, Torre D, Piso12, Santa Fe Del. Álvaro Obregón C.P. 01210 México, Ciudad de México.</address></p>
                    <div class="d-flex justify-content-center">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.040531436313!2d-99.25973139999999!3d19.3673976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1d726dd88fd9%3A0x3f477e11a4931309!2sSiegfried+Rhein%2C+S.A.+de+C.V.!5e0!3m2!1ses!2smx!4v1566088981215!5m2!1ses!2smx" width="90%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <div class="card col-10 col-lg-3 col-md-5 col-xl-2 mx-5" data-aos="flip-down" data-aos-duration="3000" data-aos-anchor-placement="top-center">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('img/b2b.png') }}">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">B2B Servicios <br>Agosto 2018 – Enero 2019<i class="material-icons right">more_vert</i></span>
                    <p><a href="http://www.b2bservicios.com/" target="_blank">Enlace Pagina Web</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">B2B Servicios<i class="material-icons right">close</i></span>
                    <p>Empresa dedicada a proporcionar Cconsultoría en tecnología e implementación procesos de negocio relacionados a la cadena de suministro, a través de un portal basado en plataforma web, modular y escalable a mediana o gran empresa.</p>
                    <p>Desempeño de inventario de equipos, soporte técnico, administración de red inalámbrica, restauración de PST, confidencialidad de información financiera, elaboración de reportes, auditoria en gestión de activos.</p>
                    <p>Implementación de ISO 27001 (Seguridad de Información) con certificación exitosa.</p>
                    <br><br><br>
                    <p><address>Prado Sur No. 245, Col. Lomas de Chapultepec, Deleg. Miguel Hidalgo, C.P. 11000, México D.F.</address></p>
                    <div class="d-flex justify-content-center">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4473387712756!2d-99.18389538473423!3d19.436270686882246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f6b1bfcc91%3A0x4d46ef720c84ea86!2sDigital+B2B!5e0!3m2!1ses!2smx!4v1566089148418!5m2!1ses!2smx" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                  </div>
                </div>

                <div class="card col-10 col-lg-3 col-md-5 col-xl-2 mx-5" data-aos="flip-up" data-aos-duration="3000" data-aos-anchor-placement="top-center">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('img/CyMA.jpg') }}" alt="CYMA Azcapotzalco">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">CyMA Azcapotzalco <br>Enero 2017 – Junio 2018<i class="material-icons right">more_vert</i></span>
                    <p><a href="http://www.cyma.mx/" target="_blank">Enlace Pagina Web</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">CyMA Azcapotzalco<i class="material-icons right">close</i></span>
                    <p>Distribuidora de accesorios, equipos de cómputo, servicios de soporte técnico y consultoria de servicios para facturacion plataforma Aspel.</p>
                    <p>Soporte técnico a medianas y pequeñas empresas, implementación de sistemas Aspel SAE, manejo de bases de datos, creación de página web.</p>
                    <br><br><br>
                    <p>Tierra Fria No. 107, Col. Tierra Nueva, Del. Azcapotzalco, C.P. 02130, Mexico CDMX.</p>
                    <div class="d-flex justify-content-center">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.969168314742!2d-99.20435868468292!3d19.499962243575233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20297e7d5d80d%3A0x2519c8bb42db9ad!2sCalle+Tierra+Fr%C3%ADa+107%2C+Tierra+Nueva%2C+02130+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1552349459164" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

<!-- Habilidades -->
        <div id="green" class="block pink lighten-1">
          <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 text-nav">Habilidades</h5>
          </div>
          <section>
            <div class="cantainer">
              <div><h5 class="text-white my-5 mx-5">Lenguajes</h5></div>
              <div data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-duration="2000">
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/html5.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/css3.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/javascript.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/php.png')}}">
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-duration="2000">
                <div><h5 class="text-white my-5 mx-5">Frameworks</h5></div>
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/laravel.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/jquery.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/bootstrap.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/animejs.jpg')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/materialize.png')}}">
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-duration="2000">
                <div><h5 class="text-white my-5 mx-5">Herramientas</h5></div>
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/git.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/github.svg')}}">
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-duration="2000">
                <div><h5 class="text-white my-5 mx-5">DataBase</h5></div>
                <div class="row d-flex justify-content-left mb-0">
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/sql.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades"><img src="{{ asset('img/mysql.png')}}">
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>


<!-- scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/visible.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="{{ asset('js/anime.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript">AOS.init();</script>
    </body>
</html>
