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
                <h1 class="display-4">Las consecuencias psicológicas del Eclipse</h1></br>
                <p class="text-muted">El Eclipse fue el fatídico evento que determino la historia de Berserk. Descubre las principales consecuencias psicológicas de Guts.</p></br>
                <img src="noticias/berserk/n6.jpg" class="w-50" alt="">
                </br>
            </div>
            <div class="container py-2 text-center">
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  El Eclipse es un hecho importante en la historia de Berserk, ya que es el punto de origen que define el problema de la trama y del porque el Espadachín negro deambula por el mundo en su cruzada contra los Apóstoles y la Mano de Dios.

                  Por tanto, si no has leído el manga, te sugiero encarecidamente que te detengas en este momento, ya que la nota contiene Spoilers. 
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Señalar que Berserk es un manga crudo y violento es quedarse con poco, sin embargo, si se apreciara una jerarquización de los momentos más brutales de la entrega, el Eclipse podría fácilmente aparecer dentro de los primeros puestos. Lo que le da valor emocional y narrativo a este suceso es el hecho de que explica las razones del comportamiento desesperanzado, errático y cínico que vemos en Guts en los primeros capítulos.

                  Guts solía ser un mercenario que se inclinaba a las batallas por el mejor postor, hasta que encontró un espacio en la Banda del Halcón, que era liderada por Griffith. El desarrollo narrativo da un vuelco en la vida de Guts, comprendiendo que el compañerismo y la lealtad -valores que resaltaban en la banda- eran aspectos que daban sentido a su vida, quitándole la sensación de soledad.
                </div>
                <p class="col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead">
                  Este punto es importante, teniendo en cuenta la problemática vida que ha tenido el protagonista a lo largo de sus años, donde ha sido herido, violado y abandonado a su suerte desde su nacimiento. Es la banda del Halcón entonces su segunda oportunidad y en especial Casca, el interés amoroso de Guts.
                </p>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Tras El Eclipse, Guts podría sumarse a la larga lista de personajes ficticios victimas de Trastorno de estrés post traumático (Hola Frank Castle).

                  Primeramente, hay que entender el trauma como un acontecimiento que se origina de forma sorpresiva, inexplicable y brutal, que espontáneamente conduce a una amenaza para la integridad del sujeto. El suceso normalmente, se encuentra fuera de las experiencias cotidianas la persona y sobre el cual no se puede ejercer ningún control.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  Ahora, como afecta esto patológicamente al sujeto dependerá exclusivamente si los mecanismos de adaptación del sujeto son suficientes o insuficientes para poder conseguir una estabilización.

                  En Guts podemos ver que estos mecanismos no son suficientes, ya que se cumplen ciertos criterios del Manual diagnóstico y estadístico de los trastornos mentales. Guts tiene recuerdos recurrentes del suceso traumático, que incluso se dan de manera involuntaria.

                  Las pocas veces que vemos a Guts dormir, suele tener sueños angustiosos que recurren al suceso traumático.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                  El estado de ánimo negativo constante, también es frecuente en el personaje, presentando una incapacidad para sentir emociones positivas (tampoco es como si Berserk lo permitiera).

                  A esto se suma la hipervigilancia, ya que prácticamente no vemos a Guts dormir (Independientemente de la trama, puesto que los demonios le dan caza de noche) y el estado de hiperactivación que afecta al tipo de respuesta, que en el caso de Guts suele ser agresiva.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                Por supuesto que el área social del personaje se ve afectada, provocando un deterioro en las relaciones, lo que indicaría por qué Guts se comporta de esa manera tan errática al comienzo de la serie.

                Por su parte, Casca también calza con estos criterios, pero los más destacados, son los síntomas disociativos, como quedar paralizado por temor e incluso llegar a enmudecer, o bien puede aparecer una confusión producto del estado de shock, incluso, perdiendo la noción del tiempo y espacio.
                </div>
                <div class="text-center  col-lg-12 col-md-12 col-sm-12 p-5 display-7 lead" id="noticias">
                Sin lugar a dudas el Eclipse fue el punto culmine que logró desarrollar al personaje, dándole sentido a su personalidad y su mundo emocional. Finalizando, puedo señalar que los sentimientos catastróficos de culpa que Guts tiene, se deben en particular a este trastorno, ya que los individuos con TEPT suelen expresar una culpa no racional, al no haber impedido los acontecimientos del suceso traumático.

                Concluyendo en esta parte, Guts necesita urgente una hora de atención.(Humor.jpg).
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