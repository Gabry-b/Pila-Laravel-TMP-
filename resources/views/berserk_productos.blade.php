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
                <h1 class="display-4">??No sabes donde conseguir el Manga de Kentaro Miura? Te recomendamos los mejores sitios donde adquirirlos</h1></br>
                <p class="text-muted">Ya sean tiendas online o tiendas f??sicas, te recomendamos los mejores sitios donde conseguir esta obra magna</p></br>
                <img src="noticias/berserk/c2.png" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Pocas son las personas que, gust??ndole el arte japon??s del manga y anime, desconozcan la obra m??s grandilocuente de Kentaro Miura, maestro mangaka.
                </div>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  En este post te mostramos los mejores sitios donde podr??s adquirir los Mangas, ya sea a domicilio, o pas??ndote por la tienda f??sica para adquirirlo y, ya de paso, llevarte una recomendaci??n de los expertos en el campo.</p>
                  <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                    NOTA: Leed hasta el final del post, hay una sorpresita muy "gratuita" ;)</p>
                  <!--TIENDAS ONLINE-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                <h1>TIENDAS ONLINE:</h1>
                <br/>
                </div>

                <!--PRIMER ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                <h3>BERSERK MAXIMUM</h3>
                <br/>
                <img src="noticias/berserk/c2.1.jpg" class="w-25" alt="">
                <br/><br/>
                <p><b>Nombre:</b> BERSERK MAXIMUM VOLUMEN 01</p>
                <p><b>Tienda:</b> Akira Comics</p>
                <p><b>Precio:</b> 16,10 euros</p>
                <p><b>Descripci??n:</b> Edici??n de lujo de una de las m??s aclamadas series manga de todos los tiempos. Un viaje ??pico y salvaje a un reino de fantas??a. Guts es un guerrero vestido de negro de los pies a la cabeza que porta una gigantesca espada m??s larga que su propia estatura y un robusto brazo ortop??dico de hierro...</p>
                <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.akiracomics.com/products/80894-berserk-maximum-volumen-01-rustica.html?gclid=Cj0KCQjw1ZeUBhDyARIsAOzAqQKPk2Qo5KLPoSXX7Q2pIOAEhWX3jf9Vhr15mDsA5zfZU7DCKdE-YuIaAu__EALw_wcB">justo aqu??.</a></p>
                </div>
              
                <!--SEGUNDO ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>BERSERK DELUXE EDITION</h3>
                  <br/>
                  <img src="noticias/berserk/c2.2.jpg" class="w-25" alt="">
                  <br/><br/>
                  <p><b>Nombre:</b> BERSERK DELUXE VOLUMEN 01</p>
                  <p><b>Tienda:</b> Amazon</p>
                  <p><b>Precio:</b> 41,85 euros</p>
                  <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.amazon.es/Berserk-Deluxe-1-Kentaro-Miura/dp/1506711987/ref=pd_day0fbt_img_sccl_1/261-1926062-4180647?pd_rd_w=AKJ4n&pf_rd_p=de1ecc34-c32b-492c-bce1-93e2a7c7a6ef&pf_rd_r=PAJNHWEHPFY0R3XDYBVQ&pd_rd_r=cb50aa7b-874b-4b72-b764-57eaecabe773&pd_rd_wg=6PEJ0&pd_rd_i=1506711987&psc=1">justo aqu??.</a></p>
                  </div>

                <!--TERCER ART??CULO-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>BERSERK COLLECTION: SERIE NERA</h3>
                  <br/>
                  <img src="noticias/berserk/c2.3.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Nombre:</b> Berserk collection. Serie nera (Vol 1-5) Plante Comics</p>
                  <p><b>Tienda:</b> Amazon</p>
                  <p><b>Precio:</b> 26,36 euros</p>
                  <p><b>Si te interesa:</b> puedes encontrar el link a la oferta <a href="https://www.amazon.es/Berserk-collection-Serie-Planet-manga/dp/8891296988/ref=sr_1_54?keywords=berserk&qid=1652951507&sr=8-54">justo aqu??.</a></p>
                  </div>


                  <!--TIENDAS F??SICAS EN MADRID-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h1>TIENDAS F??SICAS EN MADRID: </h1>
                  <br/>
                </div>
                <!--PRIMERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>OTAKU CENTER</h3>
                  <br/>
                  <img src="noticias/berserk/c2.4.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Luna, 24, 28004 Madrid</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 915 23 00 42</p>
                  <p><b>Sitio Web:</b> <a href="https://www.omegacenter.es/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> Muy buen sitio para encontrar todo tipo de mangas.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d194322.18286195563!2d-3.728899633027058!3d40.44684840523428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0xd42286413160bdd%3A0x35d1c767c940ea17!2sotaku%20center!3m2!1d40.4227561!2d-3.7066641999999996!5e0!3m2!1ses!2ses!4v1652952281800!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                   <!--SEGUNDA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>LIBRER??A AKIRA COMICS</h3>
                  <br/>
                  <img src="noticias/berserk/c2.5.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Av. de Betanzos, 74, 28034 Madrid</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 917 31 94 09</p>
                  <p><b>Sitio Web:</b> <a href="https://www.akiracomics.com/" >Pincha aqu??</a></p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d194276.47178359577!2d-3.7319775809400593!3d40.46265609777215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0xd422990717cfbd9%3A0xf3764679f0811951!2stiendas%20manga%20madrid!3m2!1d40.482374!2d-3.7136039999999997!5e0!3m2!1ses!2ses!4v1652952477728!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                  <!--TERCERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>GENERACI??N X MADRID</h3>
                  <br/>
                  <img src="noticias/berserk/c2.6.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  C. de la Puebla, 15, 28004 Madrid</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 915 21 99 85</p>
                  <p><b>Sitio Web:</b> <a href="https://www.generacionx.es/" >Pincha aqu??</a></p>
                  <p><b>Comentarios:</b> La tienda m??s cl??sica del campo nunca defrauda a sus clientes.</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d194331.15825305786!2d-3.7283225334368417!3d40.44374395670276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0xd42287d45b7e65f%3A0x1a9cd9c18503a187!2stiendas%20manga%20madrid!3m2!1d40.4222833!2d-3.7038827!5e0!3m2!1ses!2ses!4v1652952614500!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>



                  <!--TIENDAS F??SICAS EN BARCELONA-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h1>TIENDAS F??SICAS EN BARCELONA: </h1>
                  <br/>
                </div>
                <!--PRIMERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>ANTIFAZ</h3>
                  <br/>
                  <img src="noticias/berserk/c2.7.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b> Carrer Gran de Gr??cia, 239, 08012 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 932 37 81 19</p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d6173530.319617235!2d-5.245725437667942!3d40.92848111969832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0x12a4a2a3ef1c5655%3A0xb33af820b22d8ab9!2stiendas%20manga%20barcelona!3m2!1d41.405372899999996!2d2.1506902!5e0!3m2!1ses!2ses!4v1652952765910!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                   <!--SEGUNDA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>CHUNICHI COMICS</h3>
                  <br/>
                  <img src="noticias/berserk/c2.8.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Pg. de Sant Joan, 21, 08010 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b> 935 41 79 38</p>
                  <p><b>Sitio Web:</b> <a href="https://www.chunichicomics.com/" >Pincha aqu??</a></p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d6173530.319617235!2d-5.243474637667941!3d40.928481119698326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0x12a4a2e4f3b3bf65%3A0xf3e2ce9dc757db92!2stiendas%20manga%20barcelona!3m2!1d41.3927225!2d2.1779170999999997!5e0!3m2!1ses!2ses!4v1652952869468!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>

                  <!--TERCERA LOCALIZACION-->
                <div class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  <h3>NORMA COMICS</h3>
                  <br/>
                  <img src="noticias/berserk/c2.9.jpg" class="w-50" alt="">
                  <br/><br/>
                  <p><b>Direcci??n:</b>  Paseo Sant Joan, 9, Pg. de Sant Joan, 13, 08010 Barcelona</p>
                  <p><b>Horario:</b> 10:00-14:00, 17:00-20:00</p>
                  <p><b>Tel??fono:</b>  932 44 81 25</p>
                  <p><b>Sitio Web:</b> <a href="https://www.normacomics.com/" >Pincha aqu??</a></p>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d6173530.319617235!2d-5.243474637667941!3d40.928481119698326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.46848!2d-3.4701312!4m5!1s0x12a4a2e49a72b50b%3A0xcb097daf46b37e75!2stiendas%20manga%20barcelona!3m2!1d41.392387899999996!2d2.1784268!5e0!3m2!1ses!2ses!4v1652952970601!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                  </div>
                  <br/><br/>
                  <h1>SECCI??N EXTRA</h1>
                  <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                    Como extra marca de la casa Medieval World quer??a a??adir un link para que podais leer Berserk desde un punto gratuito, viendo en PDF el manga completo. Esta obra abarca muchos temas tan necesarios en nuestra vida como enfrentar sentimientos encontrados, superaci??n y amor, y creemos, desde el equipo, que todo el mundo deber??a de poder leerlo, con o sin dinero.
                  </div>
                  <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                    Para leerlo, <a href="https://r2.leermanga.xyz/berserk/10751">pulsa aqui mismo</a>
                  </div>
                  <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Esperamos de coraz??n que lo disfrutes :)                  </div>
                

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