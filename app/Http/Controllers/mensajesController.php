<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensajesController extends Controller
{
  public function buzon() {
    return view('mensajes.buzon');
  }
}
