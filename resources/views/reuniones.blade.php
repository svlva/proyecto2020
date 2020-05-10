@extends('layout')

@section('Header')
@parent
@section('title', 'Reuniones')

@section('contenido')

<!-- pruebas -->
    <link rel="stylesheet" href="{{asset('css/wickedpicker.min.css')}}">
    <script src="{{asset('js/wickedpicker.min.js')}}"></script>

<!-- fin pruebas -->

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Reuniones</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Vecinos</a></li>
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
          <strong class="card-title">Lista de todas las reuniones</strong>
        </div>
        <div class="card-body">

        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#mediumModal"><i class="fas fa-plus"></i> Agregar nueva reunión</button>

        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="mediumModalLabel">Crear nueva reunión</h5>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="fecha" class="control-label mb-1">Fecha (Seleccionar) <b style="color: red;">*</b></label>
                      <input id="fecha" name="fecha" type="text" class="form-control" aria-required="true" aria-invalid="false"  readonly style="background-color: white;">
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                      <label for="hora" class="control-label mb-1">Hora (Seleccionar) <b style="color: red;">*</b></label>
                      <input id="hora" name="hora" type="text" class="form-control hora" aria-required="true" aria-invalid="false" onkeypress="return false;" readonly style="background-color: white;">

                      <style media="screen">
                        .wickedpicker {
                          z-index: 2020;
                        }
                      </style>

                     <script>
                     var options = {
                       now: "12:35", //hh:mm 24 hour format only, defaults to current time
                       twentyFour: false,  //Display 24 hour format, defaults to false
                       upArrow: 'wickedpicker__controls__control-up',  //The up arrow class selector to use, for custom CSS
                       downArrow: 'wickedpicker__controls__control-down', //The down arrow class selector to use, for custom CSS
                       close: 'wickedpicker__close', //The close class selector to use, for custom CSS
                       hoverState: 'hover-state', //The hover state class to use, for custom CSS
                       title: 'Timepicker', //The Wickedpicker's title,
                       showSeconds: false, //Whether or not to show seconds,
                       timeSeparator: ' : ', // The string to put in between hours and minutes (and seconds)
                       secondsInterval: 1, //Change interval for seconds, defaults to 1,
                       minutesInterval: 30, //Change interval for minutes, defaults to 1
                       beforeShow: null, //A function to be called before the Wickedpicker is shown
                       afterShow: null, //A function to be called after the Wickedpicker is closed/hidden
                       show: null, //A function to be called when the Wickedpicker is shown
                       clearable: false, //Make the picker's input clearable (has clickable "x")
                     };
                     $('.hora').wickedpicker(options);
                    </script>


                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="nombre" class="control-label mb-1">Nombre del evento <b style="color: red;">*</b></label>
                      <input style="text-transform:capitalize"  id="nombre" name="nombre" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="lugar" class="control-label mb-1">Lugar de realización del evento <b style="color: red;">*</b></label>
                      <input style="text-transform:capitalize" id="lugar" name="lugar" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="descripcion" class="control-label mb-1">Descripción del evento <b style="color: red;">*</b></label>
                      <textarea name="descripcion" id="descripcion" rows="9" placeholder="Contenido..." class="form-control" style="height: 129px;"></textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="organizador" class="control-label mb-1">Organizador del evento</label>
                      <input style="text-transform:capitalize" id="organizador" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="presentador" class="control-label mb-1">Presentador del evento <b style="color: red;">*</b></label>
                      <input style="text-transform:capitalize" id="presentador" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" onkeypress="return soloLetras(event)" >
                    </div>
                    </div>
                </div>
                <span>(<b style="color: red;">*</b>) Datos obligatorios</span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
        var input =  document.getElementById('nombre');
        input.addEventListener('input',function(){
        if (this.value.length > 40)
           this.value = this.value.slice(0,40);
        })
        </script>
        <script type="text/javascript">
        var input =  document.getElementById('lugar');
        input.addEventListener('input',function(){
        if (this.value.length > 80)
           this.value = this.value.slice(0,80);
        })
        </script>
        <script type="text/javascript">
        var input =  document.getElementById('organizador');
        input.addEventListener('input',function(){
        if (this.value.length > 60)
           this.value = this.value.slice(0,60);
        })
        </script>
        <script type="text/javascript">
        var input =  document.getElementById('presentador');
        input.addEventListener('input',function(){
        if (this.value.length > 60)
           this.value = this.value.slice(0,60);
        })
        </script>

        <br>
        <br>

        <div class="table-stats order-table ov-h">
          <table class="table ">
            <thead>
              <tr>
                <th class="serial">Fecha</th>
                <th>Hora</th>
                <th>Nombre de la Actividad</th>
                <th>Lugar de la realización de la actividad</th>
                <th>Descripción</th>
                <th>Organizador</th>
                <th>Presentador</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>
              <tr>
                <td class="serial">06/05/2020</td>
                <td>00:00 PM</td>
                <td> <span class="name">Nombre de la actividad</span> </td>
                <td> <span class="product">Plaza de nombre genérico</span> </td>
                <td><span>Esta es la descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción descripción</span></td>
                <td><span>Nombre Empresa</span></td>
                <td><span>Nombre Apellido</span></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div></div>
    </div>
  </div>
  </div>
  </div>

<!--SCRIPTS-->
  <!-- datepicker -->
  <script type="text/javascript">
    $('#fecha').datepicker({
    minDate: '0d',
    changeMonth: true,
    yearRange: "-100:+0",
    changeYear: true,
    maxDate: '30d',
    onSelect: function(dateStr) {
    var min = $(this).datepicker('getDate') || new Date();
    var max = new Date(min.getTime());
    fecha1 = moment(document.getElementById('fecha').value);
    var fecha2 = moment('2020-05-08');
  }
  });
  </script>

  <script type="text/javascript">
    $.datepicker.setDefaults({
      changeYear: false,
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
      dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
      weekHeader: 'Sm',
      dateFormat: 'yy-mm-dd'});
    </script>
    <!--FIN Datepicker-->
  <!-- FIN:datepicker -->

<!--FIN:SCRIPTS-->

@endsection

@endsection
