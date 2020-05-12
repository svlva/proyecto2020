<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('page-login');
})->name('login');

Route::get('/', function () {
    return view('page-login');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/calendario', function () {
    return view('calendar');
});

// reuniones
Route::get('/reuniones', 'reunionesController@listar');
Route::post('/reuniones/crear', 'reunionesController@crear');
// reuniones

// noticias
Route::get('/noticias', 'noticiasController@inicio');
Route::get('/noticias/redactar', 'noticiasController@redactar');
Route::post('/noticias/redactar/nuevo', 'noticiasController@nuevo');
// FIN:noticias

// vecinos
Route::get('/vecinos', 'vecinosController@listar');
Route::post('/vecinos/crear', 'vecinosController@crear');
// FIN:vecinos

// reuniones
Route::get('/contactos', 'contactosController@listar');
Route::post('/contactos/crear', 'contactosController@crear');
// FIN:reuniones


Route::get('/usuarios', function () {
    return view('tabla_usuarios');
});

Route::get('/formato-noticia', function () {
    return view('cuerpo_noticia');
});

Route::get('/cuenta', function () {
    return view('user_info');
});

Route::get('/estadisticas', function () {
    return view('estadisticas');
});





Route::get('/buzon', function () {
    return view('buzon');
});

Route::get('/notificaciones', function () {
    return view('notificaciones');
});
