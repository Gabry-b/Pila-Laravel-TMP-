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
            <li class="nav-item navhover2"><a class="nav-link" href="/index"><img src="navimg/perfil_logo.svg" width="50px"></a></li>
            @endauth
          </ul>
        </div>
    </div>
</nav>
<body>
    @auth
    @foreach($perfils as $perfil)
        <section class="seccion-perfil-usuario">
            <div class="perfil-usuario-header">
                <div class="perfil-usuario-portada">
                    <div class="perfil-usuario-avatar">
                        <button type="button" class="boton-avatar">
                            <img src="{{ asset('storage').'/'.$perfil->imagen_perfil }}" alt="">
                        </button>
                    </div>
                    <button type="button" class="boton-portada">
                        <img src="{{ asset('storage').'/'.$perfil->imagen_fondo }}" alt="">
                    </button>
                </div>
            </div>
            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                        <h3 class="titulo">{{auth()->user()->name ?? auth()->user()->name}}</h3>
                    <p>{!! $perfil->biografia !!}</p>
                    </div>
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-signs"></i><p>{!! $perfil->direccioN !!}</p></li>
                                <li><i class="icono fas fa-phone-alt"></i><p>{!! $perfil->telefono !!}</p></li>
                            </ul>
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-marker-alt"></i><p>{!! $perfil->interesadoen !!}</p></li>
                                <li><i class="icono fas fa-calendar-alt"></i><p>{!! $perfil->fecha_nacimiento !!}</p></li>
                            </ul>  
                        </div>
                    <div class="redes-sociales">
                        <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                        <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
                    </div>
                @endforeach
                @endauth
            </div>
        </section>


        <!--====  End of tarjeta  ====-->
        <!--SEPARADOR-->
        <section>
            <div id="separator">
              <div class="content"></div>
            </div>
            </section>
            <!--SEPARADOR-->
        <section>
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
    </form>
</body>
    
</html>