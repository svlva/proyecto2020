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
                                  <strong class="card-title" v-if="headerText">Redactar noticia</strong>
                                  <!--<div class="toolbar ml-auto">
                                    <span class="badge badge-dark">Publicado</span>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i>&nbsp; Editar</button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-eraser"></i>&nbsp; Eliminar</button>
                                  </div>-->
                              </div>

                              <div class="card-body">
                                <div class="form-group">
                                  <form class="" action="{{ action('noticiasController@nuevo')}}" method="post">
                                  {{ csrf_field() }}
                                  <label for="titulo" class="col-form-label">Título de la noticia</label>
                                  <input id="titulo" name="titulo" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Seleccionar imagen</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>

                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="textarea">Cuerpo de la noticia</label>
                                        <link href="{{asset('css/quill.snow.css')}}" rel="stylesheet">

                                        <!-- Create the editor container -->
                                        <div id="editor">
                                        </div>

                                        <textarea id='text1' name="contenido" rows="8" cols="80" style="display:none;"></textarea>

                                        <!-- Include the Quill library -->
                                        <script src=" {{asset('js/quill.js')}}"></script>

                                        <!-- Initialize Quill editor -->
                                        <script>
                                        var toolbarOptions = [
                                          ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                          ['blockquote', 'code-block'],

                                          [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                          [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                          [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                                          [{ 'direction': 'rtl' }],                         // text direction

                                          [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                          [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                                          [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                                          [{ 'font': [] }],
                                          [{ 'align': [] }],

                                          ['clean']                                         // remove formatting button
                                        ];

                                        var quill = new Quill('#editor', {
                                          modules: {
                                            toolbar: toolbarOptions
                                          },
                                          theme: 'snow'
                                        });

                                        $(document).on('click', function() {
                                          $('#text1').val($('.ql-editor').html());
                                        });
                                        $('.ql-toolbar').on('click', function() {
                                          $('#text1').val($('.ql-editor').html());
                                        });
                                        $('.ql-editor').on('click', function() {
                                          $('#text1').val($(this).html());
                                        });
                                        $(document).on('ready', function() {
                                          $('#text1').val($('.ql-editor').html());
                                        });
                                        $('.ql-editor').on('keyup', function() {
                                          $('#text1').val($(this).html());
                                        });
                                        $('.ql-editor').on('keypress', function() {
                                          $('#text1').val($(this).html());
                                        });
                                        $('.ql-editor').on('keydown', function() {
                                          $('#text1').val($(this).html());
                                        });
                                      </script>
                                    </div>
                                  </div>
                                </div>

                                <style media="screen">
                                .ql-editor {
                                  white-space: pre-wrap;
                                  word-wrap: anywhere;
                                }
                                </style>



                                    <div class="row pt-2 pt-sm-2 mt-1">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    <label class="be-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Publicar como anónimo</span>
                                    </label>
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                     <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Enviar</button>
                                    </p>
                                    </div>
                                    </div>
                                    </form>
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

<!-- Establecemos el atributo ID al cuerpo de la noticia-->
  <!--<script>
    document.getElementsByTagName("p")[9].setAttribute("id", "contenido");
</script>-->
<!-- FIN:::::::::::: Establecemos el atributo ID al cuerpo de la noticia-->

@endsection

@endsection
