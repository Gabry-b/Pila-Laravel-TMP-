<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedievalWorld</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/2a4935d0f4.js" crossorigin="anonymous"></script>
    <title>Inicio de Sesión / Registrarse</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
   
</head>
<body class="prueba" style="background-image: url('img/login_bg.jpg');">
    <div class="container">
        <form class="form" id="createAccount" method="POST" action="/register">
        @csrf
            <h1 class="form__title">Registrarse</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input id="name" type="text" class="form__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de Usuario">
                <div class="form__input-error-message">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form__input-group">
                <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                <div class="form__input-error-message">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form__input-group">
                <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                <div class="form__input-error-message">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form__input-group">
                <input id="password-confirm" type="password" class="form__input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                <div class="form__input-error-message">
                    
                </div>
            </div>
            <button class="btn btn-primary" type="submit">{{ __('Registrarse') }}</button>
            <p class="form__text">
                <a class="form__link" href="login.blade.php" id="linkLogin">¿Ya estas registrado? Iniciar Sesión</a>
            </p>
        </form>
    </div>
    <script src="js\login.js"></script>
</body>

