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
                <h1 class="display-4">Encuentra las mejores ofertas en los libros y pel??culas de J.R. Tolkien</h1></br>
                <p class="text-muted">Desde las tiendas f??sicas como las online, encontraremos las mejores ofertas para hacernos con los famosos libros de El Se??or de los Anillos, as?? como sus pel??culas en la mejor calidad</p></br>
                <img src="noticias/esdla/c3.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Parece que en los tiempos que corren la gente solo lee Twitter o Facebook, pero esto no es cierto, siempre habr?? gente que sepa disfrutar de una buena lectura en papel donde quedemos transportados a un universo completamente distinto y envolvente.
                </div>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  Aqui os dejamos un listado con las mejores ofertas en los libros y pel??culas, as?? como las mejores tiendas f??sicas donde conseguirlos (Espa??a):</p>


                
                  <!--TIENDAS ONLINE-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                <h1>TIENDAS ONLINE:</h1>
                <br/>
                </div>

                <!--PRIMER ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                <h3>ESTUCHE EXCLUSIVO TOLKIEN</h3>
                <br/>
                <img src="noticias/esdla/c3.2.jpg" class="w-50" alt="">
                <br/><br/>
                <p><b>Nombre:</b> ESTUCHE EXCLUSIVO TOLKIEN (INCLUYE: EL HOBBIT; EL SE??OR DE LOS AN ILLOS: LA COMUNIDAD DEL ANILLO; LAS DOS TORRES; EL RETORNO DEL REY)</p>
                <p><b>Tienda:</b> La Casa del Libro Online</p>
                <p><b>Precio:</b> 41,75 euros</p>
                <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.casadellibro.com/libro-estuche-exclusivo-tolkien-incluye-el-hobbit-el-senor-de-los-an-illos-la-comunidad-del-anillo-las-dos-torres-el-retorno-del-rey/9788445000861/2031600?gclid=Cj0KCQjwspKUBhCvARIsAB2IYuuFQ6xZY7U2xq14bFANZOA1S_X95yYFnovskkHbIap8NIBO3MG2-_gaApjiEALw_wcB">justo aqu??.</a></p>
                </div>
              
                <!--SEGUNDO ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                <h3>EL HOBBIT ILUSTRADO</h3>
                <br/>
                <img src="noticias/esdla/c3.3.jpg" class="w-25" alt="">
                <br/><br/>
                <p><b>Nombre:</b> El Hobbit. Ilustrado por Alan Lee (Biblioteca J. R. R. Tolkien)</p>
                <p><b>Tienda:</b> Amazon</p>
                <p><b>Precio:</b> 33,25 euros</p>
                <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.amazon.es/El-Hobbit-ilustrado-Ilustrado-Biblioteca/dp/8445005901/ref=sr_1_20?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=TWQR6FZYMTSZ&keywords=pack+hobbit&qid=1652873263&sprefix=pack+hobbit%2Caps%2C65&sr=8-20">justo aqu??.</a></p>
                </div>

                <!--TERCER ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>ESDLA. LA TRILOG??A EXTENDIDA BLU-RAY</h3>
                  <br/>
                  <img src="noticias/esdla/c3.4.jpg" class="w-25" alt="">
                  <br/><br/>
                  <p><b>Nombre:</b> Trilog??a El Se??or De Los Anillos Extendida Blu-Ray [Blu-ray]</p>
                  <p><b>Tienda:</b> Amazon</p>
                  <p><b>Precio:</b> 61,99 euros</p>
                  <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.amazon.es/Trilog%C3%ADa-Anillos-Extendida-Blu-Ray-Blu-ray/dp/B07JJPV918/ref=asc_df_B07JJPV918/?tag=googshopes-21&linkCode=df0&hvadid=300861259184&hvpos=&hvnetw=g&hvrand=12616602452595757119&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1005493&hvtargid=pla-647580247167&psc=1">justo aqu??.</a></p>
                  </div>

                  <!--CUARTO ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>PACK TIERRA MEDIA</h3>
                  <br/>
                  <img src="noticias/esdla/c3.5.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Nombre:</b> Pack Tierra Media (El Hobbit y El Se??or de los Anillos) - Edici??n Coleccionista UHD+Blu-Ray</p>
                  <p><b>Tienda:</b> Fnac</p>
                  <p><b>Precio:</b> 299,99 euros</p>
                  <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.fnac.es/a8737595/Pack-Tierra-Media-El-Hobbit-y-El-Senor-de-los-Anillos-Edicion-Coleccionista-UHD-Blu-Ray-Elijah-Wood?gclid=Cj0KCQjwspKUBhCvARIsAB2IYutgPfC7-vaqIMPA3-fi5GkELf7BFONWlqumg24ZmrqushRNoK7HN48aAnfTEALw_wcB&gclsrc=aw.ds&Origin=GOO_PLAS_D_CINE_AG">justo aqu??.</a></p>
                  </div>
                  <!--QUINTO ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>EL SILMARILLION</h3>
                  <br/>
                  <img src="noticias/esdla/c3.6.jpg" class="w-25" alt="">
                  <br/><br/>
                  <p><b>Nombre:</b> El Silmarillion (Biblioteca J.R.R. Tolkien) Libro de bolsillo</p>
                  <p><b>Tienda:</b> Amazon</p>
                  <p><b>Precio:</b> 10,40 euros</p>
                  <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.amazon.es/El-Silmarillion-Biblioteca-J-Tolkien/dp/8445077538">justo aqu??.</a></p>
                  </div>


                  <!--TIENDAS F??SICAS EN MADRID-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h1>TIENDAS F??SICAS EN MADRID: </h1>
                  <br/>
                </div>
                <!--PRIMERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A GARC??A PRIETO</h3>
                  <br/>
                  <img src="noticias/esdla/c3.7.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b> C. de Alcal??, 123, 28009 Madrid.</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 914 35 78 76</p>
                  <p><b>Comentarios:</b> A nosotros nos encant??, ??muy recomendada! Ideal para conseguir primeras ediciones.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d194331.15825305783!2d-3.7153269334368453!3d40.44374395670277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0xd4228a32635823b%3A0x42ea063d76a6684e!2sMEJORES%20LIBRERIAS%20MADRID!3m2!1d40.4230409!2d-3.6799986999999996!5e0!3m2!1ses!2ses!4v1652875036318!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                   <!--SEGUNDA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A LA CENTRAL DE CALLAO</h3>
                  <br/>
                  <img src="noticias/esdla/c3.8.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  C. del Postigo de San Mart??n, 8, 28013 Madrid.</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 917 90 99 22</p>
                  <p><b>Sitio Web:</b> <a href="https://www.lacentral.com/web/librerias/Callao/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> Muy buen sitio para encontrar todo tipo de libros, incluso de colecci??n.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d194367.35427043439!2d-3.736394385089437!3d40.43122231263596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0xd42286356fc3ebd%3A0xc0d6b83b0d4308b9!2sMEJORES%20LIBRERIAS%20MADRID!3m2!1d40.4192995!2d-3.7059705999999997!5e0!3m2!1ses!2ses!4v1652875279593!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                  <!--TERCERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A RAFAEL ALBERTI</h3>
                  <br/>
                  <img src="noticias/esdla/c3.9.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  C. del Tutor, 57, 28008 Madrid</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 915 44 33 70</p>
                  <p><b>Sitio Web:</b> <a href="https://www.libreriaalberti.com/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> M??s grande de lo que parece, recomiendo su visita a todos.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12148.705741388902!2d-3.7212100586112347!3d40.42709191982123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xd42287c516491eb%3A0xa53f91991ef7794c!2sPl.%20del%20Callao%2C%2028013%20Madrid!3m2!1d40.4199109!2d-3.7059113!4m5!1s0xd42286a1a7a65c1%3A0xbf2fc9082d42d881!2sMEJORES%20LIBRERIAS%20MADRID!3m2!1d40.4319126!2d-3.7187889!5e0!3m2!1ses!2ses!4v1652875769276!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>



                  <!--TIENDAS F??SICAS EN BARCELONA-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h1>TIENDAS F??SICAS EN BARCELONA: </h1>
                  <br/>
                </div>
                <!--PRIMERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A ALTAIR</h3>
                  <br/>
                  <img src="noticias/esdla/c3.10.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b> Gran Via de les Corts Catalanes, 616, 08007 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 933 42 71 71</p>
                  <p><b>Sitio Web:</b> <a href="https://www.altair.es/cat/" >Pincha aqu??</a></p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1541471.7706207966!2d-1.8891882225617107!3d41.010222393269544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xd42287c516491eb%3A0xa53f91991ef7794c!2sPlaza%20del%20Callao%2C%20Madrid!3m2!1d40.4199109!2d-3.7059113!4m5!1s0x12a4a2f31aa1cef9%3A0xff246a647ad5cc94!2sMEJORES%20LIBRERIAS%20BARCELONA!3m2!1d41.387641699999996!2d2.1664749999999997!5e0!3m2!1ses!2ses!4v1652876008976!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                   <!--SEGUNDA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A ON THE ROAD</h3>
                  <br/>
                  <img src="noticias/esdla/c3.11.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Carrer de Verdaguer i Call??s, 14, 08003 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 930 17 05 48</p>
                  <p><b>Sitio Web:</b> <a href="https://www.facebook.com/lalibreriaontheroad/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> Muy buen sitio para encontrar todo tipo de libros, incluso de colecci??n.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1541471.7706207966!2d-1.8771332225617026!3d41.010222393269544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xd4229eb44953281%3A0x87aad6f04b5d9a9a!2sChico%20Calla%20Madrid%2C%20C.%20de%20Lope%20de%20Rueda%2C%2041%2C%2028009%20Madrid!3m2!1d40.419817099999996!2d-3.6775776999999996!4m5!1s0x12a4a2fa41ffeac9%3A0x3a35ccec2dc46e31!2sMEJORES%20LIBRERIAS%20BARCELONA!3m2!1d41.3872813!2d2.1757841!5e0!3m2!1ses!2ses!4v1652892724823!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                  <!--TERCERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A DOCUMENTA</h3>
                  <br/>
                  <img src="noticias/esdla/c3.12.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Carrer de Pau Claris, 144, 08009 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 933 17 25 27</p>
                  <p><b>Sitio Web:</b> <a href="https://www.documenta-bcn.com/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> M??s grande de lo que parece, recomiendo su visita a todos.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d6173530.319617235!2d-5.250874437667943!3d40.92848111969832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0x12a4a2f7e9a7a87b%3A0xa25eebfbb61dc9a5!2sMEJORES%20LIBRERIAS%20BARCELONA!3m2!1d41.393997!2d2.165864!5e0!3m2!1ses!2ses!4v1652892856461!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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