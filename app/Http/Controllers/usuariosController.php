<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
  public function iniciarSesion(){
    return view('usuarios.page-login');
  }

  public function dashboard(){
    return view('index');
  }

  public function listar() {
    return view('usuarios.tabla_usuarios');
 }

  public function informacion() {
     return view('usuarios.user_info');
 }
}
