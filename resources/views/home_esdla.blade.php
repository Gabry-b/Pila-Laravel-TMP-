<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedievalWorld</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/2a4935d0f4.js" crossorigin="anonymous"></script>
  </head>

<body>
    <!--NAV-->
    <nav class="navbar navbar-expand-lg navbar-light" aria-label="Eleventh navbar example">
    <div class="container-fluid">
        <a class="navbar-brand mr-auto navhover2" href="home.blade.php"><img src="img/logoMW.svg"></a>
        <button class="navbar-toggler bg-light" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toogle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item navhover"><a class="nav-link" href="home_berserk.blade.php"><img style="margin:15px" src="navimg/berserklogo.png" width="50px"></a></li>
                <li class="nav-item navhover"><a class="nav-link" href="home_esdla.blade.php"><img style="margin:15px" src="navimg/esdlalogo.png" width="50px"></a></li>
                <li class="nav-item navhover"><a class="nav-link" href="home_eldenring.blade.php"><img style="margin:15px" src="navimg/eldenringlogo.png" width="50px"></a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item navhover2"><a class="nav-link" href="contacta.blade.php"><img src="navimg/contactlogo.svg" width="80px"></a></li>
            <li class="nav-item navhover2"><a class="nav-link" href="login.blade.php"><img src="navimg/loginsignin_logo.svg" width="110px"></a></li>
            @auth
            <li class="nav-item navhover2"><a class="nav-link" href="perfil.blade.php"><img src="navimg/perfil_logo.svg" width="50px"></a></li>
            @endauth
          </ul>
        </div>
    </div>
</nav>
<!--HEADER-->
  <section class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
    <header>
      <div class="banner-text">
        <div class="row justify-content-md-center text-area">
          <img src="IMAGES_LOTR/LOTR_titile.png" style="width: 900px;">&nbsp;
        </div>
      </div>
    </header>
  </section>
  <!--SEPARADOR-->
  <div id="separator" class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
    <div class="content"></div>
</div>
    <!--NOTICIAS DESTACADAS-->
    <div class="prueba" id="destacadas" style="background-image: url('IMAGES_LOTR/background_lotr.png')">
        <div class="container-md p-5">
          <div class="row pt-5" id="TITLES_ESDLA">
              <h3 class="text-center pb-5 pt-5 h1"><b>NOTICIAS</b></h3>
          </div>
  
          <div class="row">
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/esdla/n1.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Motivo por el que la serie de El Se??or de los Anillos no se parece a las pel??culas</h5>
                        <p class="card-text">Todos queremos que la serie de El Se??or de los Anillos sea lo m??s fiel posible a las historias de Tolkien, pero hay problemas legales.</p>
                        <a href="noticiaesdla1.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                    </div>
              </div>
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/esdla/n2.png" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">The Lord of the Rings: Gollum se muestra en un peque??o tr??iler... mi tesoro</h5>
                        <p class="card-text">Nacon y Daedalic Entertainment han publicado un peque??o tr??iler de su juego de The Lord of the Rings: Gollum que llegar?? a Espa??a en 2022.</p>
                        <a href="noticiaesdla2.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                    </div>
              </div>
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/esdla/n3.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">El estudio responsable de los efectos de El Se??or de Los Anillos trabaja en un videojuego</h5>
                        <p class="card-text">Una oferta de trabajo de Weta Workshop asegura que est??n buscando un productor para un juego basado en 'una gran licencia'.</p>
                        <a href="noticiaesdla3.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n4.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">El ??pico presupuesto que 'El se??or de los anillos' tiene para producir la primera temporada</h5>
                      <p class="card-text">El ministro de Desarrollo Econ??mico y Turismo de Nueva Zelanda ha destapado que Amazon Prime Video se piensa gastarse una barbaridad.</p>
                      <a href="noticiaesdla4.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n5.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">El MMO gratuito de El Se??or de los Anillos experimenta un repunte de jugadores en Steam</h5>
                      <p class="card-text">El multijugador masivo en l??nea cumpli?? 15 a??os el pasado 24 de abril y sus responsables est??n recompensando a los jugadores.</p>
                      <a href="noticiaesdla5.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n6.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Electronic Arts trabaja en un free-to-play de El Se??or de los Anillos para m??viles</h5>
                      <p class="card-text">The Lord of the Rings: Heroes of Middle-earth es un nuevo 'RPG de coleccionismo' desarrollado por EA Capital Games. </p>
                      <a href="noticiaesdla6.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n7.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">House of the dragon: HBO no teme competir contra serie de Lord of the rings</h5>
                      <p class="card-text">El spin-off de Game of thrones se acerca, pero las comparaciones con la serie LOTR: The Rings of Power no se hicieron esperar.</p>
                      <a href="noticiaesdla7.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n8.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">HBO Max lanzar?? las versiones extendidas de la trilog??a de ???El se??or de los anillos???</h5>
                      <p class="card-text">La plataforma HBO Max ser?? el primer servicio de streaming con la versi??n extendida (definitiva) de la trilog??a de Lord Of The Rings.</p>
                      <a href="noticiaesdla8.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/n9.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Los 'tesoros' de El se??or de los anillos salen a subasta.</h5>
                      <p class="card-text">Un coleccionista privado sacar?? a subasta a Dardo ???la espada de Frodo???, art??culos de magia de Gandalf y pies hobbits, entre otros objetos de la saga.</p>
                      <a href="noticiaesdla9.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </div>
    <!--CURIOSIDADES-->
    <div class="prueba" id="destacadas" style="background-image: url('IMAGES_LOTR/background_lotr.png')">
      <div class="container-md p-5">
        <div class="row pt-5" id="TITLES_ESDLA">
            <h3 class="text-center pb-5 pt-5 h1"><b>QUIZ?? TE PUEDA INTERESAR...</b></h3>
        </div>
        <div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/c1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Guia completa 10 localizaciones de El Se??or de Los Anillos</h5>
                      <a href="esdla_localizaciones.blade.php" class="btn btn-primary">??Vamos all??!</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/c2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">????nete a nuestra comunidad de El Se??or de los Anillos!</h5>
                      <p class="card-text">??La Tierra Media te necesita! ??nete a nuestro canal de Discord donde podr??s disfrutar de la comunidad para diversas actividades</p>
                      <a href="esdla_comunidad.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/esdla/c3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">??No sabes donde conseguir los libros de Tolkien? Te recomendamos los mejores sitios</h5>
                      <p class="card-text">No te pierdas las mejores ofertas para las colecciones de El Se??or de los Anillos de la mano de J.R. Tolkien en las mejores tiendas f??sicas y online.</p>
                      <a href="esdla_productos.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <!--GALLERY-->
<div class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
  <div class="container-md p-5 gallery">
    <div class="row pt-5 video-gallery 2" id="TITLES_ESDLA">
        <h1 class="text-center pb-5 pt-5 boxed">GALER??A</h1>
        <div class="carousel slide" id="mainSlider" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="5" aria-label="Slide 6"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="gallery/esdla/1.png" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"La comunidad del anillo"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">Un duro camino nos espera</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/esdla/2.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Las puertas de Gondor Argonath"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/esdla/3.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Rivendel"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">Ciudad de los Elfos del Bosque, expertos en curaci??n</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/esdla/4.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Casa de Hobitton, La Comarca"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">Salvaje por fuera, pero limpia y acogedora por dentro</h5>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="gallery/esdla/5.png" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animated zoomIn" style="animation-delay: 1s">"La Torre de Sauron"</h3>
                    <h5 class="animated fadeInLeft" style="animation-delay: 3s">El ojo que todo lo ve</h5>
                </div>
            </div>
            <div class="carousel-item">
              <img src="gallery/esdla/6.png" alt="" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                  <h3 class="animated zoomIn" style="animation-delay: 1s">"El Balrog frente a Gandalf el Gris"</h3>
                  <h5 class="animated fadeInLeft" style="animation-delay: 3s">Combate a muerte entre el ??ltimo de los Balrog y el mago gris</h5>
              </div>
          </div>
          </div>
      </div>
        
    </div>
  </div>
</div>
<!--NEWSLETTER-->
<!--Footer-->
<section class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
<div id="footer" class="p-5">
    <div class="container card card-border2 w-100 pt-5">
      <div class="row row-cols-md-2 justify-content-md-center">
        <div class="col text-center">
          <h2>SUSCR??BETE A NUESTRA NEWSLETTER</h2>
        </div>
      </div>
      <div class="row justify-content-md-center py-5">
        <div class="col text-center font-weight-light">
          <p>??A??n no te hemos BOMBARDEADO con informaci??n? Suscribete a nuestra newsletter y recibe todas las noticias antes que nadie sobre el mundo medieval</p>
          <form id="form" action="{{ route('newsletter.crear') }}" method="post" enctype="multipart/form-data">
          @csrf
            <p><input type="text" name="emaiL" id="emaiL" style="width: 30%; padding: 5px 5px" placeholder="Introduce tu correo. Ejemplo: jacinto@gmail.com"></p>
            <p><button type="submit" class="btn btn-lg rounded-pill btn-primary w-20  p-3 shadow-sm font-weight-bold" action="{{ route('send-email') }}">Let's go!</button></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
        <!--SEPARADOR-->
        <section class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
        <div id="separator">
          <div class="content"></div>
        </div>
        </section>
    <!--Footer-->
  <div id="footer" class="p-5">
    <div class="container w-50 pt-5">
      <div class="row row-cols-md-2 justify-content-md-center">
        <div class="col text-center">
        </div>
      </div>
      <div class="row justify-content-md-center py-5">
        <div class="col text-center font-weight-light">
          <p>Es necesario disponer de conexi??n a internet para contactar con nuestro equipo. Para m??s informaci??n, esc??benos a <a href="mailto:info@medievalworld.es" class="mailto"><b>info@medievalworld.es</b></a></p>
          <p>Todos los productos se venden por separado. Para m??s informaci??n contacta con el vendedor. Visita pccomponentes.es para detalles espec??ficos del producto.</p>
          <p>?? 1997 - 2022 Medieval World. Medieval World properties are trademarks of Medieval World.</p>
        </div>
        
      </div>
      <div class="row"></div>
      <a href="contacta.blade.php">
        <button class="btn btn-lg rounded-pill btn-primary w-100  p-3 shadow-sm font-weight-bold">??Cont??ctanos!</button>
      </a>
    </div>
  </div>
  
  

</body>

</html>