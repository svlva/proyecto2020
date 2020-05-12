<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noticiasController extends Controller
{
  public function inicio() {
    return view('news_feed');
  }

  public function redactar() {
    return view('nueva_noticia');
  }

  public function nuevo(Request $request) {
    $titulo = $request->input('titulo');
    $noticia = $request->input('contenido');

    return
    "Titulo: " . $titulo . ' ' . "contenido: " . $noticia;
  }
}
