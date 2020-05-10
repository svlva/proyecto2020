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

Route::get('/noticias', function () {
    return view('news_feed');
});

Route::get('/usuarios', function () {
    return view('tabla_usuarios');
});

Route::get('/redactar', function () {
    return view('nueva_noticia');
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

Route::get('/vecinos', function () {
    return view('vecinos');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/reuniones', function () {
    return view('reuniones');
});

Route::get('/buzon', function () {
    return view('buzon');
});

Route::get('/notificaciones', function () {
    return view('notificaciones');
});
