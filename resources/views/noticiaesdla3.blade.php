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
      <!--SEPARADOR-->
<div id="separator">
  <div class="content"></div>
</div>
    <!--NOTICIA-->
    <article>
        <section>
            <div class="container-fluid py-2 text-center">
                <h1 class="display-4">El estudio responsable de los efectos de El Señor de Los Anillos trabaja en un videojuego</h1></br>
                <p class="text-muted">Una oferta de trabajo de Weta Workshop asegura que están buscando un productor para un juego basado en 'una gran licencia'.</p></br>
                <img src="noticias/esdla/n3.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Weta Workshop, el estudio responsable de los efectos especiales de películas como la trilogía de El Señor de los Anillos, Avatar o Shang-Chi acaba de anunciado que su división de juegos está trabajando actualmente en un nuevo proyecto relacionado con "una gran licencia de fama internacional".


                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  De hecho, el estudio está buscando un productor y en la oferta de trabajo puede leerse lo siguiente: "Estamos buscando un productor que nos ayude a desarrollar los juegos más punteros. Nuestro próximo lanzamiento para PC estará basado en una increíblemente rica e inspiradora licencia que encantará a los fans y a los jugadores de todo el mundo. ¿Suena interesante?".

                </div>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  El estudio está afincado en Wellington, Nueva Zelanda, y aunque en la oferta parece que solo se refieren a un lanzamiento en PC, lo cierto es que también mencionan que el candidato a productor "ayudará a Weta a lanzar su próximo juego en PC y consolas", por lo que es de esperar que acabe llegando a múltiples plataformas.
                </p>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  Aquí conviene destacar que Weta no ha anunciado el proyecto de manera oficial y que toda la información relacionada con él proviene de esta oferta de trabajo.
                </p>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  Considerando que ya han trabajado en El Señor de los Anillos y que Amazon está trabajando duro para estrenar una nueva serie de esta licencia el año que viene en Amazon Prime, no sería de extrañar que se tratarse de algún producto relacionado con el que potenciar la marca aprovechando su previsible y renovado interés por parte del público.
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
@auth
<section class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png');">
  <div id="footer" class="p-5">
      <div class="container card card-border2 w-100 pt-5">
        <div class="row row-cols-md-2 justify-content-md-center">
          <div class="col text-center">
            <h2>DEJANOS TU COMENTARIO</h2>
          </div>
        </div>
        <div class="row justify-content-md-center py-5">
          <div class="col text-center font-weight-light">
            <form id="form" action="{{ route('comentario.crear') }}"  method="post" enctype="multipart/form-data">
              @csrf
              <h3 class="titulo">{{auth()->user()->name ?? auth()->user()->name}}</h3>
              <p style="margin-top:30px;">Comenta tu opinión al respecto</p>

              <p><input type="text" name="mensaje" id="mensaje" style="width: 30%; padding: 5px 5px" placeholder="Comenta aquí y dejanos tu nombre"></p>
            <p><button class="btn btn-lg rounded-pill btn-primary w-20  p-3 shadow-sm font-weight-bold">Comentar</button></p>
            </form>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </section>
        <!--SEPARADOR-->
        <section class="prueba" style="background-image: url('IMAGES_LOTR/background_lotr.png')">
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