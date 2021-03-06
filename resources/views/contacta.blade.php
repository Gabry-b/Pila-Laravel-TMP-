<!DOCTYPE html>
<html>
<head>
	<title>Contacta</title>
	<!--meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<!--Linking CSS Files -->
	<link rel="stylesheet" type="text/css" href="css\contacta.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<title>MedievalWorld</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
		<script src="js/bootstrap.bundle.js"></script>
		<script src="https://kit.fontawesome.com/2a4935d0f4.js" crossorigin="anonymous"></script>
	<!--JS CDNs-->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
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
<!--FORMULARIO-->
	<div class="row">
		<div class="col-md-12 col-md-offset-3">
			<form id="form" action="{{ route('contacta.crear') }}" method="post" enctype="multipart/form-data">
			@csrf
					<ul id="progressbar">
						<li class="active">Datos Personales</li>
						<li>Contacto</li>
						<li>Mensaje</li>
					</ul>
					<fieldset>
						<h2 class="title">Datos Personales</h2>
						<input type="text" name="nombre" id="nombre" value="{{ isset($contacta->nombre)?$contacta->nombre:old('nombre') }}" placeholder="Nombre">
						<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
						<input type="button" name="next" class="next action-button" value="siguiente">
					</fieldset>
					<fieldset>
						<h2 class="title">Contacto</h2>
						<input type="text" name="numerodetelefono" id="numerodetelefono" placeholder="Numero de Telefono">
						<input type="text" name="emaIl" id="emaIl" placeholder="Email">
						<input type="text" name="direccion" id="direccion" placeholder="Direccion (Calle, Ciudad y Municipio)">
						<input type="button" name="previous" class="previous action-button-previous" value="anterior">
						<input type="button" name="next" class="next action-button" value="siguiente">
					</fieldset>
					<fieldset>
						<h2 class="title">??Que nos quieres comentar?</h2>
						<input type="text" name="mensaje" id="mensaje" placeholder="Mensaje">
						<input type="button" name="previous" class="previous action-button-previous" value="anterior">
						<input type="button" name="submit" class="btn submit action-button" data-bs-toggle="modal" data-bs-target="#exampleModal" value="enviar">
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <h5 class="modal-title" id="exampleModalLabel">Medieval World</h5>
								  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
								  ??Gracias por contactar! Nos pondremos en contacto contigo en cuanto podamos.
								</div>
								<div class="modal-footer">
								<p><button type="submit" class="btn btn-lg rounded-pill btn-primary w-20  p-3 shadow-sm font-weight-bold">Volver a Inicio</button></p>
								</div>
							  </div>
							</div>
						  </div>
					</fieldset>
			</form>
		</div>
	</div>
	<!-- Linking JS Files -->
	<script type="text/javascript" src="js\contacta.js"></script>
</body>
</html>
