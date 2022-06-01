<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="css\perfil.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/2a4935d0f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

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
            <form class="nav-item navhover2" style="display: inline; margin-top: 10px;" action="/logout" method="POST">
                @csrf
                <a style="color: white; underline: no; text-decoration: none; font-size: large" href="#" onclick="this.closest('form').submit()"
                >Logout</a>
            @endauth
          </ul>
        </div>
    </div>
</nav>
  <!--SEPARADOR-->
  <section class="prueba" style="background-image: url('navimg/bg.jpg');">
  <div id="separator">
      <div class="content"></div>
  </div>
</section>
  <!--HEADER-->
  <section class="prueba" style="background-image: url('navimg/bg.jpg');">
  <header>
    <div class="banner-text">
      <div class="row justify-content-md-center text-area">
        <img src="navimg/logo3_W.svg" style="width: 900px;">&nbsp;
      </div>
    </div>
  </header>
</section>
<!--SEPARADOR-->
<section class="prueba" style="background-image: url('navimg/bg.jpg');">
  <div id="separator">
    <div class="content"></div>
  </div>
  </section>
    <!--NOTICIAS DESTACADAS-->
    <section class="prueba" style="background-image: url('navimg/bg.jpg');">
    <div id="destacadas">
      <div class="container-md p-5">
        <div class="row pt-5" id="TITLES_HOME">
            <h3 class="text-center pb-5 pt-5 h1">NUESTRAS SECCIONES</h3>
        </div>
    <div class="row">

        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="img/card_brsk.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">BERSERK</h5>
                  <p class="card-text">La obra maestra de Kentaro Miura, cuya finalización ha quedado en cuestión tras su muerte, analizada por Medieval World</p>
                  <a href="home_berserk.blade.php" class="btn btn-primary">Leer más</a>
                </div>
              </div>
        </div>
        <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="img/card_esdla.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">EL SEÑOR DE LOS ANILLOS</h5>
                <p class="card-text">J.R. Tolkien volverá con una nueva serie de Amazon a nuestras pantallas. Aquí revisaremos nuevas noticias, así como curiosidades varias</p>
                <a href="home_esdla.blade.php" class="btn btn-primary">Leer más</a>
              </div>
            </div>
      </div>
      <div class="col-sm">
        <div class="card w-100 card-border mb-5">
            <img src="img/card_eld.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ELDEN RING</h5>
              <p class="card-text">Hidetaka Miyazaki ha conseguido dar el salto al mundo abierto con su nueva obra, analizada y curioseada por nuestro equipo</p>
              <a href="home_eldenring.blade.php" class="btn btn-primary">Leer más</a>
            </div>
          </div>
    </div>
  </div>
  </div>
</div>
</section>
<!--NEWSLETTER-->
<!--Footer-->
<section class="prueba" style="background-image: url('navimg/bg.jpg');">
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
      <section class="prueba" style="background-image: url('navimg/bg.jpg');">
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