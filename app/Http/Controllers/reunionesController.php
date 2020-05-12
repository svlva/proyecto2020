<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reunionesController extends Controller
{
  public function listar() {
    return view('reuniones');
  }

  public function crear(Request $request) {
    $nombre = $request->input('nombre');
    $lugar = $request->input('lugar');
    $fecha = $request->input('fecha');
    $hora = $request->input('hora');
    $descripcion = $request->input('descripcion');
    $organizador = $request->input('organizador');
    $presentador = $request->input('presentador');

    return
    '$nombre' . ': ' . $nombre . ', ' .
'$lugar' . ': ' . $lugar . ', ' .
'$fecha' . ': ' . $fecha . ', ' .
'$hora' . ': ' . $hora . ', ' .
'$descripcion' . ': ' . $descripcion . ', ' .
'$organizador' . ': ' . $organizador . ', ' .
'$presentador' . ': ' . $presentador;
  }
}
