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
<div id="separator" class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
    <div class="content"></div>
</div>
    <!--HEADER-->
  <section class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
    <header>
      <div class="banner-text">
        <div class="row justify-content-md-center text-area">
          <img src="IMAGES_ELDEN/title_ELDEN.png" style="width: 900px;">&nbsp;
        </div>
      </div>
    </header>
  </section>
      <!--SEPARADOR-->
<div id="separator" class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
  <div class="content"></div>
</div>
    <!--NOTICIAS DESTACADAS-->
    <div class="prueba" id="destacadas" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
      <div class="container-md p-5">
        
        <div class="row pt-5" id="TITLES_ELD">
            <h3 class="text-center pb-5 pt-5 h1">NOTICIAS</h3>
        </div>
    <div class="row">
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/elden/n1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Elden Ring ya ha vendido m??s 13 millones de unidades</h5>
                  <p class="card-text">La editora japonesa anuncia en su informe de resultados financieros que el RPG de acci??n de FromSoftware ha distribuido 13,4 millones de copias antes de abril.</p>
                  <a href="noticiaelden1.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/elden/N2.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Se convierten en Frodo y Sam en Elden Ring</h5>
                  <p class="card-text">Un v??deo de TikTok que se ha viralizado en redes sociales muestra a dos Sinluz caracterizados como Frodo y Sam recorriendo paisajes de las Tierras Intermedias.</p>
                  <a href="noticiaelden2.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/elden/n3.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Consiguen hacer funcionar el coliseo secreto y apuntan a un posible DLC</h5>
                  <p class="card-text">Un 'dataminer' ha conseguido entrar en el coliseo secreto y encontr?? un lugar de Gracia. Podr??an ser pistas de un posible DLC ambientado en el pasado.</p>
                  <a href="noticiaelden3.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="noticias/elden/n4.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Elden Ring supera a CoD Vanguard en EE.UU. como el m??s vendido del ??ltimo a??o</h5>
                <p class="card-text">El RPG de acci??n de FromSoftware es el juego m??s vendido en Estados Unidos en los ??ltimos doce meses, mientras que LEGO Star Wars: The Skywalker Saga es el quinto.</p>
                <a href="noticiaelden4.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
            </div>
      </div>
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="noticias/elden/n6.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Elden Ring tendr?? versi??n para Game Boy completamente funcional</h5>
                <p class="card-text">Hay un fan de Elden Ring que est?? desarrollando una versi??n jugable de la obra de FromSoftware para Game Boy. Pod??is verlo en acci??n en un v??deo que ??l mismo ha compartido.
                </p>
                <a href="noticiaelden6.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
            </div>
      </div>
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="noticias/elden/n7.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Elden Ring: Juega como Link Oscuro, Harry Potter, Darth Vader o Darth Maul gracias a los mods</h5>
                <p class="card-text">La comunidad de 'modders' de Elden Ring presenta una serie de nuevas apariencias para nuestros personajes, que incluyen la versi??n oscura de Link, los dos Sith y Harry Potter.</p>
                <a href="noticiaelden7.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
          </div>
      </div>
  </div>
    <div class="row">
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="noticias/elden/n8.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">As?? es Elden Ring en primera persona para realidad virtual gracias a un mod</h5>
                <p class="card-text">Un mod convierte Elden Ring en un juego de VR en primera persona. El autor ha mostrado un peque??o clip de su creaci??n, que actualmente est?? en desarrollo.</p>
                <a href="noticiaelden8.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
            </div>
      </div>
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="noticias/elden/n9.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Elden Ring: Un jugador se topa por sorpresa con Jesucristo y Satan??s y sucede esto</h5>
                <p class="card-text">Un jugador de Elden Ring invade una partida y se topa con la sorpresa de que dos usuarios caracterizados como Jes??s y Satan??s le reciben en son de paz (o eso es lo que cree).</p>
                <a href="noticiaelden9.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
            </div>
      </div>
      <div class="col-sm">
          <div class="card w-100 card-border mb-5">
              <img src="IMAGES_ELDEN/BIG_ANIMATION.gif" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Elden Ring recibe un nuevo parche que nerfea a Malenia, la Espada de Miquella</h5>
                <p class="card-text">El t??tulo de FromSoftware se actualiza a la versi??n 1.04.2 para introducir algunas correcciones menores y corregir un error por el que Malenia restauraba PS sin tocar al jugador.</p>
                <a href="noticiaelden5.blade.php" class="btn btn-primary">Leer m??s</a>
              </div>
          </div>
      </div>
  </div>
  </div>
</div>
    
    <!--CURIOSIDADES-->
    <div class="prueba" id="destacadas" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
      <div class="container-md p-5">
        
        <div class="row pt-5" id="TITLES_ELD">
            <h3 class="text-center pb-5 pt-5 h1">QUIZ?? TE PUEDA INTERESAR...</h3>
        </div>
    <div>
      <div class="col-sm">
        <div class="card w-100 card-border mb-5">
            <img src="noticias/elden/c3.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">??Juega a las obras que inspiraron a Miyazaki!</h5>
              <p class="card-text">Conoce (y juega) a los juegos retro que inspiraron a Hidetaka Miyazaki para crear sus videojuegos de la saga Souls</p>
              <a href="elden_inspiracion.blade.php" class="btn btn-primary">Leer m??s</a>
            </div>
        </div>
    </div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="noticias/elden/c1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">????nete a la comunidad Elden Ring!</h5>
                  <p class="card-text">????lzate, Sin Luz! ??nete a nuestro canal de Discord donde podr??s disfrutar de la comunidad para diversas actividades</p>
                  <a href="elden_comunidad.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
        <div class="col-sm">
            <div class="card w-100 card-border mb-5">
                <img src="IMAGES_ELDEN/BIG_ANIMATION2.GIF" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">TOP 5 tiendas donde conseguir las claves al mejor precio para jugar a Elden Ring</h5>
                  <p class="card-text">Te recomendamos el TOP 5 de las tiendas online donde conseguir Elden Ring para PC al mejor precio, ??No te lo pierdas!</p>
                  <a href="elden_productos.blade.php" class="btn btn-primary">Leer m??s</a>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
<!--GALLERY-->
<div class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
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
                  <img src="gallery/eldenring/1.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Godfrey, El Primer Se??or"</h3>
                      <h5 class="animated fadeInLeft" style="animation-delay: 3s">No provoqu??is el conocer a Hoarax Loux</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/eldenring/2.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"Malenia, La Espada de Miquella"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/eldenring/3.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"El Necrolimbo"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="gallery/eldenring/4.jpg" alt="" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                      <h3 class="animated zoomIn" style="animation-delay: 1s">"El Gr??n ??rbo ??ureo"</h3>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="gallery/eldenring/5.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animated zoomIn" style="animation-delay: 1s">"Ranni, La Princesa Lunar"</h3>
                </div>
            </div>
            <div class="carousel-item">
              <img src="gallery/eldenring/6.jpg" alt="" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                  <h3 class="animated zoomIn" style="animation-delay: 1s">"Reina M??rika"</h3>
              </div>
          </div>
          </div>
      </div>   
    </div>
  </div>
</div>
<!--NEWSLETTER-->
<!--Footer-->
<section class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
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
        <section class="prueba" style="background-image: url('IMAGES_ELDEN/Elden-Ring-Wallpaper.jpg');">
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