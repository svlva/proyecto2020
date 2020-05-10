@extends('layout')

@section('Header')
@parent
@section('title', 'Lista de Usuarios')

@section('contenido')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Sección de Noticias</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Table</a></li>
              <li class="active">Basic table</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-12">

      <a href="redactar" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-plus-circle"></i> Redactar nueva noticia</a>
      <br>
      <br>
      <br>
<!-- Noticia -->
<div class="card">
    <div class="row no-gutters">
        <div class="col-auto">
            <img src="http://lorempixel.com/output/city-q-c-500-500-8.jpg" class="img-fluid" alt=""  width="200" height="200">
        </div>
        <div class="col">
          <div class="card-header d-flex">
            <a href="formato-noticia" class="card-header-title"><h4>Titulo de la noticia</h4></a>
            <div class="toolbar ml-auto">
              <i style="color: gray">05/05/2020 00:00</i>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
    </div>

<!--MODAL-->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h5 class="modal-title" id="mediumModalLabel">Reportar publicación:</h5>
          </div>
          <div class="modal-body">
            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label">Razón del reporte</label></div>
              <div class="col col-md-9">
                <div class="form-check">
                  <div class="radio">
                    <label for="radio1" class="form-check-label ">
                      <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Contenido inapropiado
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radio2" class="form-check-label ">
                      <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Incitación al odio
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radio3" class="form-check-label ">
                      <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Contenido irrelevante / Desinformación
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Descripción adicional (opcional)</label>
                  <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control" style="height: 129px;"></textarea>
                </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
<!--FIN MODAL-->

    <div class="card-footer">
      <div class="card-text text-sm-left">
        <div class="dropdown ml-auto">
      <a href="formato-noticia#comentarios"><i class="fas fa-comment-alt pr-1"></i>Ver comentarios</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#"  data-toggle="modal" data-target="#mediumModal"><i class="fas fa-flag pr-1"></i>Reportar</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="toolbar" href="formato-noticia#comentarios" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Compartir</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5" x-placement="top-end">
          <a class="dropdown-item" href="https://api.whatsapp.com/send?text=Formato%20Noticia%20http://proyecto2020.test/formato-noticia"><i class="fa fa-whatsapp pr-1"></i>Compartir por Whatsapp</a>
          <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=http://proyecto2020.test/formato-noticia"><i class="fa fa-facebook pr-1"></i>Compartir por Facebook</a>
          <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Cuerpo%20a%20noticia&url=http://proyecto2020.test/formato-noticia" target="_blank"><i class="fa fa-twitter pr-1"></i>Compartir por Twitter</a>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- Fin de Noticia -->

<!-- Noticia -->
<div class="card">
    <div class="row no-gutters">
        <div class="col-auto">
            <img src="http://lorempixel.com/output/city-q-c-500-500-8.jpg" class="img-fluid" alt=""  width="200" height="200">
        </div>
        <div class="col">
          <div class="card-header d-flex">
            <a href="formato-noticia" class="card-header-title"><h4>Titulo de la noticia</h4></a>
            <div class="toolbar ml-auto">
              <i style="color: gray">05/05/2020 00:00</i>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
    </div>
    <div class="card-footer">
      <div class="card-text text-sm-left">
        <div class="dropdown ml-auto">
      <a href="formato-noticia#comentarios"><i class="fas fa-comment-alt pr-1"></i>Ver comentarios</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#"><i class="fas fa-flag pr-1"></i>Reportar</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="toolbar" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Compartir</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5" x-placement="top-end">
          <a class="dropdown-item" href="#"><i class="fa fa-facebook pr-1"></i>Compartir por Whatsapp</a>
          <a class="dropdown-item" href="#"><i class="fa fa-twitter pr-1"></i>Compartir por Facebook</a>
          <a class="dropdown-item" href="#"><i class="fa fa-whatsapp pr-1"></i>Compartir por Twitter</a>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- Fin de Noticia -->

<!-- Noticia -->
<div class="card">
    <div class="row no-gutters">
        <div class="col-auto">
            <img src="http://lorempixel.com/output/city-q-c-500-500-8.jpg" class="img-fluid" alt=""  width="200" height="200">
        </div>
        <div class="col">
          <div class="card-header d-flex">
            <a href="formato-noticia" class="card-header-title"><h4>Titulo de la noticia</h4></a>
            <div class="toolbar ml-auto">
              <i style="color: gray">05/05/2020 00:00</i>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
    </div>
    <div class="card-footer">
      <div class="card-text text-sm-left">
        <div class="dropdown ml-auto">
      <a href="formato-noticia#comentarios"><i class="fas fa-comment-alt pr-1"></i>Ver comentarios</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#"><i class="fas fa-flag pr-1"></i>Reportar</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="toolbar" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Compartir</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5" x-placement="top-end">
          <a class="dropdown-item" href="#"><i class="fa fa-facebook pr-1"></i>Compartir por Whatsapp</a>
          <a class="dropdown-item" href="#"><i class="fa fa-twitter pr-1"></i>Compartir por Facebook</a>
          <a class="dropdown-item" href="#"><i class="fa fa-whatsapp pr-1"></i>Compartir por Twitter</a>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- Fin de Noticia -->

</div>
</div></div></div>

@endsection

@endsection
