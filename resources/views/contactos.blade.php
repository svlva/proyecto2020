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

            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h5 class="modal-title" id="mediumModalLabel">Registrar nuevo contacto</h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="ntelefonico" class="control-label mb-1">Número telefónico</label>
                          <input id="ntelefonico" name="ntelefonico" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloNumeros(event)">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                          <label for="rubro" class="control-label mb-1">Rubro</label>
                          <select class="form-control" name="rubro" id="rubro">
                            <option value="Salud">Salud</option>
                            <option value="Seguridad">Seguridad</option>
                            <option value="Insumos">Insumos</option>
                          </select>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="nservicio" class="control-label mb-1">Nombre del Servicio</label>
                          <input style="text-transform:capitalize" id="nservicio" name="nservicio" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="direccion" class="control-label mb-1">Dirección</label>
                          <input style="text-transform:capitalize" id="direccion" name="direccion" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="dias" class="control-label mb-1">Días de atención</label>
                          <select class="form-control" name="dias" id="dias">
                            <option value="Lunes a viernes">Lunes a viernes</option>
                            <option value="Lunes a sabado">Lunes a sabado</option>
                            <option value="Sabado y domingo">Sabado y domingo</option>
                            <option value="Toda la semana">Toda la semana</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="horario" class="control-label mb-1">Horario</label>
                          <select class="form-control" name="horario" id="horario">
                            <option value="Mañana a tarde">Mañana a tarde</option>
                            <option value="Tarde a noche">Tarde a noche</option>
                            <option value="Jornada completa">Jornada completa</option>
                            <option value="Trabajo continuo">Trabajo continuo</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="icroquis" class="control-label mb-1">Imagen de croquis</label>
                          <input type="file" id="icroquis" name="icroquis" class="form-control-file">
                        </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="foto" class="control-label mb-1">Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control-file">
                          </div>
                          </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>

            <script type="text/javascript">
            var input =  document.getElementById('ntelefonico');
            input.addEventListener('input',function(){
            if (this.value.length > 12)
               this.value = this.value.slice(0,12);
            })
            </script>
            <script type="text/javascript">
            var input =  document.getElementById('nservicio');
            input.addEventListener('input',function(){
            if (this.value.length > 60)
               this.value = this.value.slice(0,60);
            })
            </script>
            <script type="text/javascript">
            var input =  document.getElementById('direccion');
            input.addEventListener('input',function(){
            if (this.value.length > 80)
               this.value = this.value.slice(0,80);
            })
            </script>

            <button type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target="#mediumModal"><i class="fas fa-plus"></i> Agregar nuevo contacto</button>
            <br><br>
          <div class="table-stats order-table ov-h">
            <table class="table">
              <thead>
                <tr>
                  <th class="avatar">Rubro</th>
                  <th>Nombre</th>
                  <th>Número telefónico</th>
                  <th>Dirección</th>
                  <th>Imagen del croquis</th>
                  <th>Foto</th>
                  <th>Horarios de atención</th>
                  <th>Editar / Eliminar</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>

                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>

                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>

                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                  <td class="serial">Salud</td>
                  <td>Hospital 'Nombre del Hospital'</td>
                  <td>12345678</td>
                  <td> <span class="name">Zona Dirección Calle Nombre #'1234'</span> </td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td> <img src="http://lorempixel.com/output/nature-q-c-200-200-2.jpg" alt="user" class="rounded" width="45"></td>
                  <td>
                    <span>Lunes a Sábado: 07:30-22:30</span>
                  </td>
                  <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div></div>

    </div></div>
    </div>
    </div>
</body>
@endsection

@endsection
