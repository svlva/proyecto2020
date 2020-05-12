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

      <div class="content">
          <div class="animated fadeIn">

              <div class="ui-typography">
                  <div class="row">
                      <div class="col-md-12">


                          <div class="card">
                              <div class="card-header d-flex">
                                  <strong class="card-title" v-if="headerText">Visualizar noticia</strong>
                                  <div class="toolbar ml-auto">
                                    <span class="badge badge-dark">Publicado</span>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i>&nbsp; Editar</button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-eraser"></i>&nbsp; Eliminar</button>
                                  </div>
                              </div>


                              <div class="card-body">
                                <!--http://lorempixel.com/output/city-q-c-500-500-8.jpg-->
                                <style media="screen">
                                .contenedor {
                                  width: 1000px;
                                  height: 350px;
                                  overflow: hidden;
                                  margin: 10px;
                                  position: relative;
                                }
                                .contenedor > .crop {
                                  position:absolute;
                                  left: -100%;
                                  right: -100%;
                                  top: -100%;
                                  bottom: -100%;
                                  margin: auto;
                                  min-height: 100%;
                                  min-width: 100%;
                                }
                                </style>
                                <div class="contenedor">
                                  <img src="images/admin.jpg" class="img-fluid crop" alt=""  width="500" height="500">
                                </div>

                                <div class="typo-headers">
                                  <h1 class="pb-2 display-4">Nombre de la Noticia</h1>
                                  <h4 class="pb-2 display-5">Redactado por Nombre Apellido</h4>
                                  <h5 class="pb-2 display-5">Publicado el: 05/05/2020 a las 00:00</h5>
                              </div>
                              <div class="typo-articles">
                                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
                                  <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains. </p>
                                </div>

                                <div  class="text-right">
                                <a href="#"  data-toggle="modal" data-target="#mediumModal"><i class="fas fa-flag pr-1"></i>Reportar</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                  <a class="toolbar" href="formato-noticia#comentarios" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> Compartir</a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5" x-placement="top-end">
                                    <a class="dropdown-item" href="https://api.whatsapp.com/send?text=Formato%20Noticia%20http://proyecto2020.test/formato-noticia"><i class="fa fa-whatsapp pr-1"></i>Compartir por Whatsapp</a>
                                    <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=http://proyecto2020.test/formato-noticia"><i class="fa fa-facebook pr-1"></i>Compartir por Facebook</a>
                                    <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Cuerpo%20a%20noticia&url=http://proyecto2020.test/formato-noticia" target="_blank"><i class="fa fa-twitter pr-1"></i>Compartir por Twitter</a>
                                  </div>
                                  </div>
                                  <hr>

                                <h2 class="pb-2 display-5" id="comentarios">Comentarios</h2>

                                <div class="col-md-12">
                                  <div class="jumbotron">
                                    <h4 class="mb-1"><strong>Usuario Anónimo</strong> &nbsp; &nbsp;  <i>Hace 1 hora</i></h4>
                                    Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
                                    <hr style="width:75%;">
                                    <br>

                                    <h4 class="mb-1"><strong>Usuario Anónimo</strong> &nbsp; &nbsp;  <i>Hace 1 hora</i></h4>
                                    Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
                                    <hr style="width:75%;">
                                    <br>
                                  <h4 class="mb-1">Escriba su comentario:</h4>
                                    <textarea style="height: 198px; min-height: 7em; max-height: 40vh;" name="textarea-input" id="textarea-input" rows="9" placeholder="El contenido va aquí..." class="form-control"></textarea>
                                    <!--<button type="button" class="btn btn-primary">Enviar</button>-->

                                    <div class="row pt-2 pt-sm-2 mt-1">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    <label class="be-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Publicar como an</span>
                                    </label>
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                     <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Enviar</button>
                                    </p>
                                    </div>
                                    </div>

                                  </div>
                                </div>

                              </div>
                            </div>
      </div>


      </div>
      </div>
      </div>



      </div><!-- .animated -->
      </div><!-- .content -->


</div>
</div></div>

@endsection

@endsection
