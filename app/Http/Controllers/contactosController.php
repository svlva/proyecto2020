<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactosController extends Controller
{
    public function listar(){
      return view('contactos');
    }

    public function crear(Request $request) {
      $ntelefonico = $request->input('ntelefonico');
      $rubro = $request->input('rubro');
      $nservicio = $request->input('nservicio');
      $direccion = $request->input('direccion');
      $dias = $request->input('dias');
      $horario = $request->input('horario');

      return//
      '$ntelefonico' . ' = ' . $ntelefonico . ', $rubro' . ' = ' . $rubro . ', $nservicio' . ' = ' . $nservicio . ', $direccion' . ' = ' . $direccion . ', $dias' . ' = ' . $dias . ', $horario' . ' = ' . $horario;
    }
}
