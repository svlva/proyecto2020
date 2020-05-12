<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadisticasController extends Controller
{
  public function mostrar() {
    return view('estadistica.estadisticas');
  }
}
