@extends('layout')

@section('Header')
@parent
@section('title', 'Calendario')

@section('contenido')
<body>
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
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Lista de contactos de emergencia registrados</strong>
          </div>
          <div class="card-body">
            <div class="main-content container-fluid p-0">
              <div class="email-inbox-header">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="email-title"><h2><i class="far fa-bell"></i> Notificaciones</h2>(# Nuevas notificaciones) </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="email-search">
                      <div class="input-group input-search">
                        <input class="form-control" type="text" placeholder="Buscar mensaje"><span class="input-group-btn">
                          <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>

              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>

              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>
              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>
              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>
              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>
              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                  </div>
                </div>
              </div>
              <div class="chat-module-body">
                <div class="media chat-item">
                  <div class="media-body">
                    <div class="chat-item-title">
                      <span class="chat-item-author">William</span>
                      <span>4 days ago</span>
                    </div>
                      <p> Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
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
</body>
@endsection

@endsection
