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
                <h1 class="display-4">????nete a nuestra comunidad Berserk!</h1></br>
                <p class="text-muted">??Guts y Casca te necesitan! ??nete a nuestro canal de Discord donde podr??s disfrutar de la comunidad para diversas actividades</p></br>
                <img src="noticias/berserk/c1.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Bienvenidos a la Banda del Halc??n de la mano de Medieval World. Dentro de ??sta podr??is compartir informaci??n sobre los mangas, animes y dem??s del mundo de Kentaro Miura. Dentro de nuestro servidor encontrar??s:
                </div>
                  <ul>
                    <li><b>Secci??n de noticias:</b> Informaremos de cualquier actualizaci??n en la web (especialmente en la secci??n ce noticias), compartiendo el post en cuanto sea publicado por parte de nuestro equipo en Medieval World.</li>
                    <br/>
                    <img src="noticias/berserk/c1.1.png" class="w-5">
                    <br/><br/>
                    <li><b>Chat de texto del manga:</b> Aqu?? podr??s a??adir im??genes, comentarios y opiniones acerca de cada capitulo o tomo del manga de Berserk.</li>
                    <br/>
                    <img src="noticias/berserk/c1.2.png" class="w-5">
                    <br/><br/>
                    <li><b>Chat de texto del anime:</b> Aqu?? podr??s a??adir im??genes, comentarios y opiniones acerca de cada anime de Berserk.</li>
                    <br/>
                    <img src="noticias/berserk/c.1.5.png" class="w-5">
                    <br/><br/>
                    <li><b>Secci??n de eventos:</b> Aqu?? podr??s participar en sorteos peri??dicos que publicaremos a trav??s de su respectivo chat, as?? como quedar con m??s usuarios del servidor y asistir juntos a eventos (quien sabe, tal vez encontr??is a vuestro Guts/Casca).</li>
                    <br/>
                    <img src="noticias/berserk/c1.3.png" class="w-5">
                    <br/><br/>
                    <li><b>Club de lectura:</b> Reune a tu grupo y leed las aventuras de Miura juntos, pudiendo ir alternando al lector, quedando para llegar hasta cierto capitulo por vuestra cuenta y despu??s comentarlo, o como m??s se adapte a vosotros (recordad que esta es vuestra comunidad, ??vosotros eleg??s!).</li>
                    <br/>
                    <img src="noticias/berserk/c1.4.png" class="w-5">
                    <br/><br/>
                  </ul>
                  <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                    Si te animas a unirte, dale click al siguiente link:
                  </p>
                  <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                    <a href="https://discord.gg/wgqJqsw9Wb"  target="_blank">
                      <button class="btn btn-lg rounded-pill btn-primary w-20  p-3 shadow-sm font-weight-bold">Unirse al servidor: BERSERK by Medieval World</button>
                    </a>
                  </div>
                  <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                    Recuerda respetar las <a href="https://support.discord.com/hc/es/articles/360024871991-C%C3%B3digo-de-conducta-del-Partner-de-Discord">reglas de comunidad de Discord</a> una vez est??s dentro
                  </p>
                  </div>

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
    <a href="#" class="text-dark">Jos?? Sanch??s AKA Ren?? Sanch??s</a>
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
<section class="prueba" style="background-image: url('IMAGES_GUTS/background.jpg');">
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
              <p style="margin-top:30px;">Comenta tu opini??n al respecto</p>

              <p><input type="text" name="mensaje" id="mensaje" style="width: 30%; padding: 5px 5px" placeholder="Comenta aqu?? y dejanos tu nombre"></p>
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