<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <title>Guillermo González</title>

<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil&display=swap" rel="stylesheet">
        <script src="{{ asset('js/fontawesome.min.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">


<!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
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
          <li><a class="btn-floating waves-effect waves-light blue" href="https://www.linkedin.com/in/guillermo-gonz%C3%A1lez-cayetano-b5915b110/" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a></li>
          <li><a class="btn-floating green waves-effect waves-light" href="https://wa.me/525552885351?text=Hola¡%20Acabo%20de%20ver%20tu%20CV" target="_blank"><i class="fas fa-phone-alt"></i></a></li>
          <li><a class="btn-floating red waves-effect waves-light modal-trigger" href="#mail"><i class="far fa-envelope"></i></a></li>
        </ul>
      </div>

<!-- Navegador -->
      <div class="navegador">
          <ul id="slide-out" class="sidenav bg-dark">
            <li>
              <div class="user-view py-0 px-0">
                <div class="">
                  <img src="{{ asset('img/menu.jpg') }}" width="100%">
                </div>
                <div class="row d-flex mt-3 mb-3">
                <a href="#banner-image" class="col-12"><span class="white-text">Guillermo González</span></a>
                </div>
              </div>
            </li>
            <li><a href="#blue"><span class="text-white">Perfil</span></a></li>
            <li><a href="#red"><span class="text-white">Experiencia</span></a></li>
            <li><a href="#green"><span class="text-white">Habilidades</span></a></li>

            <li><div class="divider my-5"></div></li>

            <li><a class="text-white" href="https://www.linkedin.com/in/guillermo-gonz%C3%A1lez-cayetano-b5915b110/" target="_blank"><i style="font-size: 1.5rem;" class="fab fa-linkedin-in text-white"></i>Linkedin</a></li>
            <li><a class="text-white" href="https://wa.me/525552885351?text=Hola¡%20Acabo%20de%20ver%20tu%20CV" target="_blank"><i style="font-size: 1.5rem;"  class="fas fa-phone-alt text-white"></i>WhatsApp</a></li>
            <li><a class="text-white" href="#mail"><i style="font-size: 1.5rem;" class="far fa-envelope text-white"></i>CV por mail</a></li>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>

<!-- Banner Parallx -->
        <header>
            <div class="parallax-container parallax1">
              <div class="parallax">
                <div id="triangulo-banner"></div>
                <div id="triangulo"></div>
                <div id="triangulo-gris"></div>
                <div id="titulo"><STRONG>Guillermo González <br> Cayetano</STRONG></div>
                <img class="banner" id="banner-image"> 
              </div>
            </div>
        </header>
              
<!-- Perfil -->
        <div id="blue" class="block">
            <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 align-middle text-nav">Perfil</h5>
            </div>
          <section>
          <div class="cantainer">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-duration="3000">
              <div class="circle_p my-5 shadow"><img width="100%" src="{{ asset('img/profile.jpg')}}" alt="SelfieMemo"></div>
            </div>

<!-- Datos -->
            <div class="row mb-0 pb-5 d-flex justify-content-center">

              <div id="section_perfil" class="col-12 col-md-6 col-lg-8 col-xl-8 pb-md-5 text-white d-flex justify-content-center">

                <div class="row">
                  <div class="col-12">
                    <p class="mb-0 mb-md-3 t-grande text-center"  data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="center-bottom" style="font-size: 2rem">Guillermo González Cayetano</p><br>
                    
                    <p class="mb-0 mb-md-3 t-grande text-center"  data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">Estudios: Ing. Telecomunicaciones, sistemas y electrónica. </p> <br>
                    
                    <p class="t-grande mb-0 mb-md-3 text-center"  data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="center-bottom" >Ubicación: Azcapotzalco, CDMX.</p><br>

                    <p class="t-grande mb-0 mb-md-3 text-center"  data-aos="fade-right" data-aos-duration="2000" data-aos-anchor-placement="center-bottom" >Estado civil: Soltero.</p><br>

                    <p class="t-grande mb-0 mb-md-3 text-center" data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="center-bottom" >Edad: 25 años.</p><br>
                </div>

                </div>

              </div>
            </div>

<!-- Resumen -->
            <div class="row d-flex justify-content-center pb-5 mb-0" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="center-bottom">

              <div class="col-11 col-md-9 col-lg-7 text-white" id="resumen">
                <h4 class="text-white">Acerca de mí</h4>

                <p>Deseo expandir mis conocimientos por medio de la practica, particularmente en las áreas de desarrollo de software, desarrollo web y telecomunicaciones.</p> 
                <br>
                <p>Siempre busco la manera de superarme a mí mismo y encuentro soluciones de manera eficiente y eficaz.</p>
                <br>
                <p>Me considero una persona que aprende rápido, autónomo, dedicado, ordenado y tolerante.</p><br><br><br>
              </div>

              <div class="col-5 col-md-3 col-lg-2 escudo" data-aos="flip-left" data-aos-anchor-placement="center-bottom" data-aos-duration="3000"><img width="100%" src="{{ asset('img/UNAM.svg') }}"></div>

            </div>  

          </div>
          </section>
        </div>

<!-- Experiencia -->
        <div id="red" class="block pb-5">
            <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 text-nav">Experiencia</h5>
            </div>
          
<!-- Siegfried -->
          <section>
            <div class="row d-flex pt-5 mt-5">

              <div class="col-2 relleno"></div>
              <div class="col-2 relleno mb-5">
                <div class="circle_p shadow-lg d-flex bg-white" data-aos="flip-left" data-aos-anchor-placement="center-bottom" data-aos-duration="3000"><img width="60%" class="my-auto mx-auto" src="{{ asset('img/Siegfried.png') }}"></div>
              </div>

              <div class=" col-md-auto col-12 card-content">
                <div class="card-heading">
                  <div class="card-title">
                    <span>Siegfried Rhein</span><span class="bar">&nbsp;|&nbsp;</span>
                    <!--anchor-->
                    <small>Desarrollador Web | Front-End | Back-End | Becario</small>
                    <!--anchor-->
                  </div>
                  <div class="card-date">Febrero 2019 - Actual</div>
                </div>
                <ul class="card-badges mt-3">
                  <li>PHP</li>
                  <li>Laravel</li>
                </ul>
                <!--anchor-->
                <ul class="card-details">
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Desarrollo de aplicaciones administrativas internas.</span>
                  </li>
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Creación de plantillas HTML para notificaciones via correo electrónico.</span>
                  </li>
                  <li><a href="https://siegfried.com.mx/" class="btn teal waves-effect waves-light my-4 mx-4" target="_blank">Página del sitio</a></li>
                </ul>
              </div>

              <div class="col-4 relleno"></div>
            </div>

<!-- B2B -->
            <div class="row d-flex pt-5 mt-5">

              <div class="col-4 relleno"></div>

              <div class=" col-md-auto col-12 card-content">
                <div class="card-heading">
                  <div class="card-title">
                    <span>B2B Servicios</span><span class="bar">&nbsp;|&nbsp;</span>
                    <!--anchor-->
                    <small>Sistemas | ISO 27001 | Becario</small>
                    <!--anchor-->
                  </div>
                  <div class="card-date">Agosto 2018 - Enero 2019</div>
                </div>
                <ul class="card-badges mt-3">
                  <li >Gestion de certificación</li>
                  <li >Control de activos</li>
                </ul>
                <!--anchor-->
                <ul class="card-details">
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Implementación ISO 27001 (Certificacion exitosa).</span>
                  </li>
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Gestión de red y activos.</span>
                  </li>
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Elaboración de reportes.</span>
                  </li>
                  <li><a href="http://www.b2bservicios.com/" target="_blank" class="btn teal waves-effect waves-light my-4 mx-4">Página del sitio</a></li>
                </ul>
              </div>
              <div class="col-2 mb-5 relleno d-flex justify-content-end">
                <div class="circle_p d-flex bg-white shadow-lg" data-aos="flip-left" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
                  <img class="my-auto mx-auto" width="80%" src="{{ asset('img/b2b.png') }}">
                </div>
              </div>
              <div class="col-2 relleno"></div>
            </div>

<!-- CyMA -->
            <div class="row d-flex pt-5 mt-5">

              <div class="col-2 relleno"></div>
              <div class="col-2 relleno mb-5">
                <div class="circle_p d-flex bg-white shadow-lg" data-aos="flip-left" data-aos-anchor-placement="center-bottom" data-aos-duration="3000"><img width="80%" class="my-auto mx-auto" src="{{ asset('img/CyMA.jpg') }}"></div>
              </div>

              <div class=" col-md-auto col-12 card-content">
                <div class="card-heading">
                  <div class="card-title">
                    <span>CyMA Azcapotzalco</span><span class="bar">&nbsp;|&nbsp;</span>
                    <!--anchor-->
                    <small>Freelance | Soporte Tecnico </small>
                    <!--anchor-->
                  </div>
                  <div class="card-date">Enero 2017 - Junio 2018</div>
                </div>
                <ul class="card-badges mt-3">
                  <li>Aspel</li>
                  <li>Windows</li>
                  <li>Office</li>
                </ul>
                <!--anchor-->
                <ul class="card-details">
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Creación pagina del sitio.</span>
                  </li>
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Soporte Aspel a clientes.</span>
                  </li>
                  <li>
                    <i class="fas fa-arrow-right"></i>
                    <span class="text">Soporte técnico.</span>
                  </li>
                  <li><a href="https://cyma.mx/" target="_blank" class="btn teal waves-effect waves-light my-4 mx-4">Página del sitio</a></li>
                </ul>
              </div>

              <div class="col-4 relleno"></div>
            </div>

          </section>
        </div>

<!-- Habilidades -->
        <div id="green" class="block">
          <div class="nav-wrapper d-flex justify-content-center shadow navegador-cont">
              <h5 class="text-white my-0 text-nav">Habilidades</h5>
          </div>
          <section>
            <div class="cantainer">

<!-- Lenguajes -->
              <div><h5 class="text-white my-5 mx-5">Lenguajes</h5></div>
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="HTML-5" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/html5.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="CSS-3" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/css3.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="JavaScript" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/javascript.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="PHP" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/php.png')}}">
                  </div>
                </div>

<!-- Frameworks -->
                <div><h5 class="text-white my-5 mx-5">Frameworks</h5></div>
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="Laravel" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/laravel.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="JQuery" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/jquery.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="Bootstrap" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/bootstrap.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="AnimateJs" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/animejs.jpg')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="Materialize" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/materialize.png')}}">
                  </div>
                </div>

<!-- Herramientas -->
                <div><h5 class="text-white my-5 mx-5">Herramientas</h5></div>
                <div class="row d-flex justify-content-left">
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="Git"  data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/git.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="GitHub"  data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/github.svg')}}">
                  </div>
                </div>

<!-- Databeses -->
                <div><h5 class="text-white my-5 mx-5">DataBases</h5></div>
                <div class="row d-flex justify-content-left mb-0">
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="SQL"  data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/sql.png')}}">
                  </div>
                  <div class="white border shadow my-5 mx-5 habilidades tooltipped" data-position="top" data-tooltip="MY SQL" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="2000"><img src="{{ asset('img/mysql.png')}}">
                  </div>
                </div>

            </div>
          </section>
        </div>
      </div>

<!-- Modal Mail -->
      <div id="mail" class="modal">
        <div class="modal-content">
          <h4>Hola¡</h4>
          <p>Permiteme enviar mi CV a tu correo electrónico.</p>
          <div class="row">
            <div class="col-12">
            Regalame tu correo elctrónico:
              <div class="input-field inline">
                <input id="email_inline" type="email" class="validate">
                <label for="email_inline">Email</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="########" class="modal-close waves-effect waves-green btn-flat btn">Enviar</a>
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
