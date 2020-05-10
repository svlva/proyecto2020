@extends('layout')

@section('Header')
@parent
@section('title', 'Calendario')

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

                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div >
                                <div id="calendar"></div>
                            </div>

                </div>
              </div>

          </div>
       </div>
     </div>
   </div>
  </div>
</div>



@endsection

@endsection
