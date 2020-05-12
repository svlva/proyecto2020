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
//usuarios
Route::get('/', 'usuariosController@iniciarSesion');
Route::get('/login', 'usuariosController@iniciarSesion');
Route::get('/usuarios', 'usuariosController@listar');
Route::get('/cuenta', 'usuariosController@informacion');
//usuarios

//pagina principal
Route::get('/dashboard', 'usuariosController@dashboard');
//pagina principal

// actividades
Route::get('/reuniones', 'reunionesController@listar');
Route::get('/calendario', 'reunionesController@verCalendario');
Route::post('/reuniones/crear', 'reunionesController@crear');
// actividades

// noticias
Route::get('/noticias', 'noticiasController@inicio');
Route::get('/noticias/redactar', 'noticiasController@redactar');
Route::get('/noticias/cuerpo', 'noticiasController@cuerpo');
Route::post('/noticias/redactar/nuevo', 'noticiasController@nuevo');
// FIN:noticias

// vecinos
Route::get('/vecinos', 'vecinosController@listar');
Route::post('/vecinos/crear', 'vecinosController@crear');
// FIN:vecinos

// contactos
Route::get('/contactos', 'contactosController@listar');
Route::post('/contactos/crear', 'contactosController@crear');
// FIN:contactos

// mensajes
Route::get('/buzon', 'mensajesController@buzon');
// mensajes

// estadisticas
Route::get('/estadisticas', 'estadisticasController@mostrar');
// estadisticas

//notificaciones
Route::get('/notificaciones', 'notificacionesController@listar');
//notificaciones
