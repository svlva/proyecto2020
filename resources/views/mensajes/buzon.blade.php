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
                    <div class="email-title"><h2><i class="fas fa-inbox"></i> Inbox</h2>(# Nuevos mensajes) </div>
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

                <div class="row">
                  <div class="col-lg-6">
                    <div class="btn-group">
                      <button class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
                        Con seleccionados<span class="caret"></span></button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Mark as rea</a><a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                          <div class="dropdown-divider">
                          </div>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>

                    <div class="btn-group">
                      <button class="btn btn-light" type="button">Archive</button>
                      <button class="btn btn-light" type="button">Span</button>
                      <button class="btn btn-light" type="button">Delete</button>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Date</a><a class="dropdown-item" href="#">From</a><a class="dropdown-item" href="#">Subject</a>
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item" href="#">Size</a>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6 text-right">
                    <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
                      <div class="btn-group email-pagination-nav">
                        <button class="btn btn-light" type="button"><i class="fas fa-angle-left"></i></button>
                        <button class="btn btn-light" type="button"><i class="fas fa-angle-right"></i></button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="email-list">
                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-1">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                      <a class="favorite active" href="#"><span><i class="fas fa-star"></i></span></a>
                    </label>
                  </div>
                  <div class="col-lg-11">
                    <div class="email-list-item email-list-item--unread">
                      <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                        <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
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
</div>
</div>
</body>
@endsection

@endsection
