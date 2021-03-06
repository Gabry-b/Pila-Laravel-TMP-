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
                <h1 class="display-4">??Quienes son "La Mano de Dios"?</h1></br>
                <p class="text-muted">El grupo m??s misterioso de Berserk queda expuesto en el siguiente post, no te lo pierdas</p></br>
                <img src="noticias/berserk/n7.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Hablar de la mano de dios es complicado porque pese a que la historia en la que se desarrollan los sucesos tiene m??s o menos unos 30 a??os de haber comenzado muy poco se ha dicho de estos personajes al punto de que a la fecha no se sabe a ciencia cierta cu??les son sus intenciones, lo m??s cercano que existe a un origen lo encontramos en el episodio 53 del manga titulado Thousand-Year Fiefdom donde la princesa Charlotte cuenta la historia del Emperador Gaiseric quien fue el ??nico l??der capaz de conquistar y unificar el continente entero provocando que el hambre, la muerte y las enfermedades que la guerra entre pa??ses vecinos ocasionaba en dicho continente cesaran por completo, todo eso en una sola generaci??n, de su origen y el c??mo se cre?? su ej??rcito no existen registros ya que los ??nicos documentos que hablan de ??l son posteriores a la ??poca en que apareci?? en el campo de batalla, en dichos escritos se cuenta sobre c??mo ??l nunca mostraba piedad por sus enemigos llegando a recibir el nombre de ???El rey demonio??? o ???Soberano de la muerte??? pero no era solo por ser un sanguinario que recibi?? ese apodo sino tambi??n por la costumbre que ten??a de salir a pelear usando un casco con forma de calavera y boom! ah?? es cuando nos damos cuenta que muy probablemente estamos hablando de Skull Knight ya que hasta sus espadas son similares sin mencionar que la reacci??n de Guts al escuchar esto es de ???haa no mams son el mismo???. 
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Pero la historia sigue, porque resulta que Gaiseric luego de unificar el continente decide reclutar hombres de diferentes naciones para construir la capital de su nuevo imperio justo en medio del continente, a esta tierra la nombr?? ??Midland??, pero su proyecto era demasiado costoso as?? que pronto se qued?? sin fondos por lo que hizo lo que cualquier gobernante latinoamericano har??a???

                  Cobrar impuestos por cualquier estupidez, el emperador literalmente comenz?? a exprimir al pueblo con la firme intenci??n de financiar su pendejada, cualquiera que sepa de econom??a b??sica entender?? que esto es muy grave ya que al no poder cubrir sus necesidades m??nimas, la plebe comenzaba a recurrir a actos deleznables para poder sobrevivir o simplemente a buscar refugio en los vicios con el fin de evadir su realidad, Dios no vio con buenos ojos lo que el rey calavera hab??a ocasionado as?? que envi?? a 4 o 5 de sus ??ngeles (realmente no se especifica la cantidad) para borrar esa ciudad en una sola noche, Charlotte termina el relato diciendo que hay quien dice que los vestigios de esa ciudad siguen reposando en el fondo de la brecha debajo de la Torre del Renacimiento, un lugar donde no llegan los rayos del sol ni sopla el viento.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Como bien podr??n intuir esos ??ngeles que se mencionan no pueden ser otros que la mano de dios, esto recuerda mucho a los personajes de la pel??cula Hellraizer los Cenobitas, un grupo de seres que al presentarse mencionan que a lo largo del tiempo la humanidad les ha llamado ??ngeles o demonios, ellos existen con el fin llevar a los l??mites del placer y el dolor a quien logre abrir La Caja de Lemarchand, ya que este artefacto abre una brecha en el espacio por el que estos seres pueden pasar.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Os dejamos con un video explicativo que desentra??a la antigua mano de dios:
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  <video class="col-12" controls>
                    <source  type="video/mp4" src="noticias/videos/BERSERK 362_ LA ANTERIOR MANO DE DIOS _ AN??LISIS Y TEOR??AS.mp4">
                  </video>
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