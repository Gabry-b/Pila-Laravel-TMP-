<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/login.blade.php', function () {
    return view('auth.login');
});

Route::get('/home.blade.php', function () {
    return view('home');
});

Route::get('/berserk_comunidad.blade.php', function () {
    return view('berserk_comunidad');
});

Route::get('/berserk_productos.blade.php', function () {
    return view('berserk_productos');
});

Route::get('/contacta.blade.php', function () {
    return view('contacta');
});

Route::get('/confirm.blade.php', function () {
    return view('confirm');
});

Route::get('/elden_comunidad.blade.php', function () {
    return view('elden_comunidad');
});

Route::get('/elden_inspiracion.blade.php', function () {
    return view('elden_inspiracion');
});

Route::get('/elden_productos.blade.php', function () {
    return view('elden_productos');
});

Route::get('/esdla_comunidad.blade.php', function () {
    return view('esdla_comunidad');
});

Route::get('/esdla_localizaciones.blade.php', function () {
    return view('esdla_localizaciones');
});

Route::get('/esdla_productos.blade.php', function () {
    return view('esdla_productos');
});

Route::get('/home_berserk.blade.php', function () {
    return view('home_berserk');
});

Route::get('/home_eldenring.blade.php', function () {
    return view('home_eldenring');
});

Route::get('/home_esdla.blade.php', function () {
    return view('home_esdla');
});

Route::get('/noticiaberserk1.blade.php', function () {
    return view('noticiaberserk1');
});

Route::get('/noticiaberserk2.blade.php', function () {
    return view('noticiaberserk2');
});

Route::get('/noticiaberserk3.blade.php', function () {
    return view('noticiaberserk3');
});

Route::get('/noticiaberserk4.blade.php', function () {
    return view('noticiaberserk4');
});

Route::get('/noticiaberserk5.blade.php', function () {
    return view('noticiaberserk5');
});

Route::get('/noticiaberserk6.blade.php', function () {
    return view('noticiaberserk6');
});

Route::get('/noticiaberserk7.blade.php', function () {
    return view('noticiaberserk7');
});

Route::get('/noticiaberserk8.blade.php', function () {
    return view('noticiaberserk8');
});

Route::get('/noticiaberserk9.blade.php', function () {
    return view('noticiaberserk9');
});

Route::get('/noticiaelden1.blade.php', function () {
    return view('noticiaelden1');
});

Route::get('/noticiaelden2.blade.php', function () {
    return view('noticiaelden2');
});

Route::get('/noticiaelden3.blade.php', function () {
    return view('noticiaelden3');
});

Route::get('/noticiaelden4.blade.php', function () {
    return view('noticiaelden4');
});

Route::get('/noticiaelden5.blade.php', function () {
    return view('noticiaelden5');
});

Route::get('/noticiaelden6.blade.php', function () {
    return view('noticiaelden6');
});

Route::get('/noticiaelden7.blade.php', function () {
    return view('noticiaelden7');
});

Route::get('/noticiaelden8.blade.php', function () {
    return view('noticiaelden8');
});

Route::get('/noticiaelden9.blade.php', function () {
    return view('noticiaelden9');
});

Route::get('/noticiaesdla1.blade.php', function () {
    return view('noticiaesdla1');
});

Route::get('/noticiaesdla2.blade.php', function () {
    return view('noticiaesdla2');
});

Route::get('/noticiaesdla3.blade.php', function () {
    return view('noticiaesdla3');
});

Route::get('/noticiaesdla4.blade.php', function () {
    return view('noticiaesdla4');
});

Route::get('/noticiaesdla5.blade.php', function () {
    return view('noticiaesdla5');
});

Route::get('/noticiaesdla6.blade.php', function () {
    return view('noticiaesdla6');
});

Route::get('/noticiaesdla7.blade.php', function () {
    return view('noticiaesdla7');
});

Route::get('/noticiaesdla8.blade.php', function () {
    return view('noticiaesdla8');
});

Route::get('/noticiaesdla9.blade.php', function () {
    return view('noticiaesdla9');
});


Route::get('/register.blade.php', function () {
    return view('register');
});

Route::post('/register.blade.php', [RegisterController::class, 'register']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/login.blade.php', [LoginController::class, 'login']);

Route::post('login', function() {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('home');
    }
    return redirect('login');
});

Route::post('/login.blade.php', [LoginController::class, 'logout']);



Route::post('/newsletter', [NewsletterController::class, 'crear'])->name('newsletter.crear');


Route::post('/contacta', [ContactaController::class, 'crear'])->name('contacta.crear');

Route::get('/perfil.blade.php', function () {
    return view('perfil');
});

Route::get('/index', function () {
    return view ('perfil.index');
});

Route::get('/perfil', function () {
    return view ('perfil.index');
});


Route::resource('perfil', PerfilController::class);

Route::get('/index', [PerfilController::class, 'index']);

Route::post('/perfil', [PerfilController::class, 'crear'])->name('perfil.crear');

Route::get('/send-email', [MailController::class, 'sendEmail'])->name('send-email');

Route::post('/comentario', [ComentarioController::class, 'crear'])->name('comentario.crear');