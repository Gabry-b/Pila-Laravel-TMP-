<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                  <li class="nav-item navhover2"><a class="nav-link" href="perfil.blade.php"><img src="navimg/perfil_logo.svg" width="50px"></a></li>
                </ul>
              </div>
          </div>
      </nav>
      <!--SEPARADOR-->
<div id="separator">
  <div class="content"></div>
</div>
    <!--NOTICIA-->
    <article>
        <section>
            <div class="container-fluid py-2 text-center">
                <h1 class="display-4">Consiguen hacer funcionar el coliseo secreto y apuntan a un posible DLC</h1></br>
                <p class="text-muted">Un 'dataminer' ha conseguido entrar en el coliseo secreto y encontró un lugar de Gracia. Podrían ser pistas de un posible DLC ambientado en el pasado.</p></br>
                <img src="noticias/elden/n3.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  A principios del mes pasado la comunidad de Elden Ring descubrió que en algunos rincones de las Tierras Intermedias hay unos edificios que recuerdan a los anfiteatros romanos, más conocidos popularmente como coliseos. 

                  Estas arenas están cerradas a cal y canto en la versión comercial del juego, aunque utilizando herramientas externas los dataminers han conseguido acceder a ellas en la versión de PC. Eso sí, hasta ahora nadie había conseguido activar el edificio, por lo que sólo se habían publicado vídeos de la estructura del coliseo completamente vacía. 
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Sin embargo, el usuario Sekiro Dubi ha publicado un nuevo vídeo en el que arroja algo más de luz a este misterioso coliseo de Elden Ring.
                </div>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  Según explica, ha utilizado el software DS Map Studio para acceder al anfiteatro que hay en la zona de Leyndell y lo que ha encontrado dentro es verdaderamente sorprendente: no sólo ha hallado un Lugar de Gracia en el que es posible descansar y subir de nivel, como en cualquier otro, sino que además en el centro de la arena hay un enfrentamiento entre dos enemigos, un gladiador y un león gigante.
                </p>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <video class="col-12" controls>
                    <source  type="video/mp4" src="noticias/videos/Elden Ring - Colosseum mystery explained - DLC of Futures Past.mp4">
                  </video>
                </p>
            </div>
        </section>
    </article>
<!--PUBLICADO POR-->
<div class="row align-items-center mb-4">
  <div class="col-lg-3"></div>
  <div class="col-md-6 col-lg-3 col-sm-6 text-center text-lg-left mb-3 m-lg-0">
    <img
      src="img/micareto.png"
      alt="Avatar"
      class="rounded shadow-1-strong mr-2"
      height="35"/>
    <span>Publicado <u>15.05.2022</u> por</span>
    <a href="#" class="text-dark">José Sanchís AKA René Sanchís</a>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 text-center text-lg-center">
    <!-- Twitter -->
    <a
      class="btn btn-primary px-3 mr-1"
      style="background-color: #55acee;"
      href="https://twitter.com/bloodyReneTV"
      role="button"
      ><i class="fab fa-twitter"></i></a>
  </div>
</div>
<!--SEPARADOR-->
<div id="separator">
  <div class="content"></div>
</div>
<!--NEWSLETTER-->
<!--Footer-->
<section class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
  <div id="footer" class="p-5">
      <div class="container card card-border2 w-100 pt-5">
        <div class="row row-cols-md-2 justify-content-md-center">
          <div class="col text-center">
            <h2>SUSCRÍBETE A NUESTRA NEWSLETTER</h2>
          </div>
        </div>
        <div class="row justify-content-md-center py-5">
          <div class="col text-center font-weight-light">
            <p>¿Aún no te hemos BOMBARDEADO con información? Suscribete a nuestra newsletter y recibe todas las noticias antes que nadie sobre el mundo medieval</p>
            <p><input type="text" name="email" style="width: 30%; padding: 5px 5px" placeholder="introduce tu correo. Ejemplo: jacinto@gmail.com"></p>
            <p><button class="btn btn-lg rounded-pill btn-primary w-20  p-3 shadow-sm font-weight-bold">Let's go!</button></p>
          </div>
        </div>
      </div>
    </div>
  </section>
        <!--SEPARADOR-->
        <section class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg')">
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
            <p>Es necesario disponer de conexión a internet para contactar con nuestro equipo. Para más información, escíbenos a <a href="mailto:info@medievalworld.es" class="mailto"><b>info@medievalworld.es</b></a></p>
            <p>Todos los productos se venden por separado. Para más información contacta con el vendedor. Visita pccomponentes.es para detalles específicos del producto.</p>
            <p>© 1997 - 2022 Medieval World. Medieval World properties are trademarks of Medieval World.</p>
          </div>
          
        </div>
        <div class="row"></div>
        <a href="contacta.blade.php">
          <button class="btn btn-lg rounded-pill btn-primary w-100  p-3 shadow-sm font-weight-bold">¡Contáctanos!</button>
        </a>
      </div>
    </div>
  
  

</body>

</html>