<?php

use App\Http\Controllers\CalendarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/search/{name}', [HomeController::class, 'search']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('dashboard', function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Rutas de Formulario
Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario.index');

Route::get('/formulario/agregar', [FormularioController::class, 'create'])->name('formulario.create');
Route::post('/Formulario/store', [FormularioController::class, 'store'])->name('formulario.store');

Route::get('/formulario/editar/{id}', [FormularioController::class, 'edit'])->name('formulario.edit');
Route::put('/formulario/Actualizar/{id}', [FormularioController::class, 'update'])->name('formulario.update');

Route::get('/formulario/show/{id}', [FormularioController::class, 'show'])->name('formulario.show');
Route::delete('/formulario/delete/{id}', [FormularioController::class, 'destroy'])->name('formulario.destroy');

//Rutas de Categorias
Route::prefix('categorias')->group(function(){
    Route::get('/', [CategoriasController::class, 'index'])->name('categorias.index');
    Route::get('/agregar', [CategoriasController::class, 'create'])->name('categorias.create');
    Route::get('/editar/{id}', [CategoriasController::class, 'edit'])->name('categorias.edit');
    Route::get('/eliminar/{id}', [CategoriasController::class, 'show'])->name('categorias.show');
    Route::post('/guardar', [CategoriasController::class, 'store'])->name('categorias.store');
    Route::put('/actualizar/{id}', [CategoriasController::class, 'update'])->name('categorias.update');
    Route::delete('/destruir/{id}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');
});

//Rutas de Contactos
Route::prefix('contactos')->group(function(){
    Route::get('/', [ContactosController::class, 'index'])->name('contactos.index');
    Route::get('/agregar', [ContactosController::class, 'create'])->name('contactos.create');
    Route::get('/editar{id}', [ContactosController::class, 'edit'])->name('contactos.edit');
    Route::get('/eliminar/{id}', [ContactosController::class, 'show'])->name('contactos.show');
    Route::post('/guardar', [ContactosController::class, 'store'])->name('contactos.store');
    Route::put('/actualizar/{id}', [ContactosController::class, 'update'])->name('contactos.update');
    Route::delete('/destruir/{id}', [ContactosController::class, 'destroy'])->name('contactos.destroy');
});

//Rutas de Calendario
//Route::group(['middleware' => ['auth']], function(){
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario.index');
Route::post('/calendario/mostrar', [CalendarioController::class, 'show'])->name('calendario.show');
Route::post('/calendario/agregar', [CalendarioController::class, 'store'])->name('calendario.store');
Route::post('/calendario/actualizar/{calendario}', [CalendarioController::class, 'update'])->name('calendario.update');
Route::post('/calendario/editar/{id}', [CalendarioController::class, 'edit'])->name('calendario.edit');
Route::post('/calendario/borrar/{id}', [CalendarioController::class, 'destroy'])->name('calendario.destroy');
//});



//Rutas de login

// Route::post('/login', function(){ return view('auth.login'); })->name('login');
// Route::post('/register', function(){ return view('auth.register'); })->name('register');
// Route::post('/verify', function(){ return view('auth.verify'); })->name('verify');

// Route::post('/confirm', function(){ return view('auth.passwords.confirm'); })->name('confirm');
// Route::post('/email', function(){ return view('auth.passwords.email'); })->name('email');
// Route::post('/reset', function(){ return view('auth.passwords.reset'); })->name('reset');
