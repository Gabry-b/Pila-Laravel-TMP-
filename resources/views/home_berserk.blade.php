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
    <section class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
      <header>
        <div class="banner-text">
          <div class="row justify-content-md-center text-area">
            <img src="IMAGES_GUTS/title.png" style="width: 900px;">&nbsp;
          </div>
        </div>
      </header>
    </section>
    <!--SEPARADOR-->
<div id="separator" class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
  <div class="content"></div>
</div>
    <!--NOTICIAS DESTACADAS-->
    <div class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
            <div class="container-md p-5">
              <div class="row pt-5" id="TITLES_BRSK">
                  <h1 class="text-center pb-5 pt-5">NOTICIAS</h1>
              </div>
          <div class="row">
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/berserk/n1.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Seg??n la revista Young Animal, no habr?? m??s Berserk de momento</h5>
                        <p class="card-text">La revista Young Animal ha publicado que actualmente no tienen nada que decir acerca del futuro de Berserk.</p>
                        <a href="noticiaberserk1.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                    </div>
              </div>
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/berserk/n2.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">El manga de Berserk tiene un digno final gracias a un fan</h5>
                        <p class="card-text">El mayor homenaje que se puede hacer a Kentaro Miura, el mangaka de Berserk, queda realizado por un fan.</p>
                        <a href="noticiaberserk2.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                    </div>
              </div>
              <div class="col-sm">
                  <div class="card w-100 card-border mb-5">
                      <img src="noticias/berserk/n3.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Berserk pone fecha a otro cap??tulo de su manga para este a??o</h5>
                        <p class="card-text">Pese a su inactividad respecto a la publicaci??n de Berserk, los lectores contar??n con un nuevo episodio tan solo dos meses despu??s</p>
                        <a href="noticiaberserk3.blade.php" class="btn btn-primary">Leer m??s</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n4.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Las obvias relaciones entre Berserk y Dark Souls</h5>
                      <p class="card-text">Kentaro Miura ha sido un autor influyente en todos los aspectos, pues ha trascendido e inspirado a muchas otras creaciones.</p>
                      <a href="noticiaberserk4.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n5.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Forjan la Dragonslayer de Guts, protagonista de Berserk.</h5>
                      <p class="card-text">Recientemente los chicos de Man At Arms: Reforged nos sorprend??an con la forja de un nuevo arma procedente de la obra de ficci??n.</p>
                      <a href="noticiaberserk5.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n6.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Las consecuencias psicol??gicas del Eclipse</h5>
                      <p class="card-text">El Eclipse fue el fat??dico evento que determino la historia de Berserk. Descubre las principales consecuencias psicol??gicas de Guts.</p>
                      <a href="noticiaberserk6.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n7.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">??Quienes son "La Mano de Dios" y que relevancia tienen en la historia respecto a Griffith?</h5>
                      <p class="card-text">El grupo m??s misterioso de Berserk, encargado del destino de Griffith, queda expuesto en el siguiente post, no te lo pierdas</p>
                      <a href="noticiaberserk7.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n8.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">??Por qu?? el manga Berserk no ha sido adaptado (de buena manera) al anime?</h5>
                      <p class="card-text">La obra maestra de Kentaro Miura ha tenido varias adaptaciones a las pantallas, pero ninguna de ellas a la altura del manga</p>
                      <a href="noticiaberserk8.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm">
                <div class="card w-100 card-border mb-5">
                    <img src="noticias/berserk/n9.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">??Existe alg??n videojuego puramente de Berserk?.</h5>
                      <p class="card-text">Berserk ha influido a decenas de videojuegos a lo largo de la historia (Dark Souls, Sekiro, Nioh...) pero apenas se conocen los titulos propios de la marca.</p>
                      <a href="noticiaberserk9.blade.php" class="btn btn-primary">Leer m??s</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<!--CURIOSIDADES-->
<div class="prueba" id="destacadas" style="background-image: url('IMAGES_GUTS/background.jpg')">
  <div class="container-md p-5">
    <div class="row pt-5" id="TITLES_BRSK">
        <h3 class="text-center pb-5 pt-5 h1"><b>QUIZ?? TE PUEDA INTERESAR...</b></h3>
    </div>
    <div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/berserk/c1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">????nete a nuestra comunidad Berserk!</h5>
                  <p class="card-text">??Guts y Casca te necesitan! ??nete a nuestro canal de Discord donde podr??s disfrutar de la comunidad para diversas actividades</p>
                  <a href="berserk_comunidad.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/berserk/c2.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">??No sabes donde conseguir el Manga de Kentaro Miura? Te recomendamos los mejores sitios donde adquirirlos</h5>
                  <p class="card-text">Ya sean tiendas online o tiendas f??sicas, te recomendamos los mejores sitios donde conseguir esta obra magna</p>
                  <a href="berserk_productos.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
<!--GALLERY-->
<div class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
  <div class="container-md p-5 gallery">
    <div class="row pt-5 video-gallery 2" id="TITLES_BRSK">
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
                  <img src="gallery/berserk/1.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Guts VS Lobo"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">Pelea ??pica en la loma del Monte del Demonio</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/berserk/2.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"El Descanso"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/berserk/3.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"El Eclipse"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">Griffith sostiene el Beherit por ultima vez...??o no?</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/berserk/4.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Perversi??n"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="gallery/berserk/5.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animated zoomIn" style="animation-delay: 1s">"Guts VS El Inmortal"</h3>
                    <h5 class="animated fadeInLeft" style="animation-delay: 3s">Primer combate de Guts en el que no consigue partir a su rival por la mitad</h5>
                </div>
            </div>
            <div class="carousel-item">
              <img src="gallery/berserk/6.jpg" alt="" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                  <h3 class="animated zoomIn" style="animation-delay: 1s">"Casca y Guts"</h3>
                  <h5 class="animated fadeInLeft" style="animation-delay: 3s">??Acaso no tiene hueco el amor entre tanto desastre?</h5>
              </div>
          </div>
          </div>
      </div>
        
    </div>
  </div>
</div>
<!--NEWSLETTER-->
<!--Footer-->
<section class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
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
        <section class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg')">
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