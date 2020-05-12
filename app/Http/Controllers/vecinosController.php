<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vecinosController extends Controller
{
    public function listar() {
      return view('vecinos');
    }

    public function crear(Request $request) {
      $apellido_p = $request->input('apellido_p');
      $apellido_m = $request->input('apellido_m');
      $nombre = $request->input('nombres');
      $ci = $request->input('ci');
      $departamento = $request->input('departamento');
      $fnac = $request->input('fnac');
      $genero = $request->input('genero');
      $direccion = $request->input('direccion');
      $ntelefono = $request->input('ntelefono');
      $correo = $request->input('correo');


      return
      "Apellido paterno: " . $apellido_p .
      "Apellido materno: " . $apellido_m .
      "Nombre: " . $nombre .
      "CI: " . $ci . ' ' . $departamento .
      "Fecha nacimiento: " . $fnac .
      "Género: " . $genero .
      "Dirección: " . $direccion .
      "Número de teléfono: " . $ntelefono .
      "Correo: " . $correo;
    }
}
