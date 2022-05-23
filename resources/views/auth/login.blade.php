<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Inicio de Sesión / Registrarse</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css\login.css">
</head>
<body class="prueba" style="background-image: url('img/login_bg.jpg');">
    <div class="container">
        <form class="form" id="login" method="POST" action="/login">
        @csrf
            <h1 class="form__title">Iniciar Sesión</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <div class="form__input-error-message">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form__input-group">
                <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                <div class="form__input-error-message">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                @if (Route::has('login'))
                    <button class="form__button" type="submit">{{ __('Continuar') }}</button>
                @endif
            <p class="form__text">
            @if (Route::has('password.request'))
                <a class="form__link" href="{{ route('password.request') }}">
                    {{ ('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
            </p>
            <p class="form__text">
                
                    <a class="form__link" href="register.blade.php">{{ ('¿Aun no estas registrado? Registrate aquí') }}</a>
                
            </p>
            <p class="form__text">
                <a class="form__link" href="home.blade.php" id="linkCreateAccount">Volver al inicio</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Registrarse</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Nombre de Usuario">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Contraseña">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirmar Contraseña">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continuar</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">¿Ya estas registrado? Iniciar Sesión</a>
            </p>
        </form>
    </div>

   
</body>