<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notificacionesController extends Controller
{
  public function listar() {
    return view('notificaciones');
  }
}
