@extends('layout')

@section('Header')
@parent
@section('title', 'Lista de Usuarios')

@section('contenido')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Vecinos</h1>
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
<!-- FIN Breadcrumbs -->

<!-- Modal para agregar Vecino -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h5 class="modal-title" id="mediumModalLabel">Registrar nuevo vecino</h5>
      </div>
      <div class="modal-body">
        <form class="" action="{{ action('vecinosController@crear')}}" method="post">
          {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="apellido_p" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
              <input style="text-transform:capitalize" id="apellido_p" name="apellido_p" type="text" class="form-control" aria-required="true" aria-invalid="false" value=""  onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" onkeyup="validarInput()">
            </div>
          </div>
          <div class="col-lg-6">
              {{ csrf_field() }}
            <div class="form-group">
              <label for="apellido_m" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
              <input style="text-transform:capitalize" id="apellido_m" name="apellido_m" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" onkeyup="validarInput()">
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label for="nombres" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
              <input style="text-transform:capitalize" id="nombres" name="nombres" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" onkeyup="validarInput()">
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="ci" class="control-label mb-1">CI <b style="color: red;">*</b></label>
              <div class="input-group">
              <input id="ci" name="ci" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloNumeros(event)">
              <span class="input-group-btn">
                 <select class="custom-select" name="departamento" id="departamento">
                   <option value="LP">LP</option>
                   <option value="CB">CB</option>
                   <option value="SC">SC</option>
                   <option value="CH">CH</option>
                   <option value="OR">OR</option>
                   <option value="PT">PT</option>
                   <option value="TJ">TJ</option>
                   <option value="BE">BE</option>
                   <option value="PD">PD</option>
                 </select>
               </span>
               </div>
               </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="fnac" class="control-label mb-1">Fecha de Nacimiento <b style="color: red;">*</b></label>
                <input id="fnac" name="fnac" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
              </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="genero" class="control-label mb-1">Género</label> <b style="color: red;">*</b>
                  <select class="form-control" name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
                </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label for="direccion" class="control-label mb-1">Dirección</label> <b style="color: red;">*</b>
              <input id="direccion" style="text-transform:capitalize" name="direccion" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="ntelefono" class="control-label mb-1">Número telefónico</label>
              <div class="input-group">
              <div class="input-group-addon">+591</div>
              <input id="ntelefono" name="ntelefono" type="text" class="form-control" aria-required="true" aria-invalid="false" value=""  onkeypress="return soloNumeros(event)" >
            </div>
            </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="correo" class="control-label mb-1">Correo Electrónico</label>
                <input id="correo" name="correo" type="text" class="form-control" value="" placeholder="nombre@ejemplo.com" class="form-control email-inputmask" im-insert="true">
              </div>
              </div>
        </div>
      <span>(<b style="color: red;">*</b>) Datos obligatorios</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- FIN: Modal para agregar Vecino -->

<div class="content">
  <div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Lista de vecinos registrados</strong>
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#mediumModal"><i class="fas fa-plus"></i> Agregar nuevo vecino</button>
        <br>
        <br>
        <div class="table-stats order-table ov-h">
          <table class="table ">
            <thead>
              <tr>
                <th class="serial">Nombre Completo</th>
                <th>CI</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Registro</th>
                <th>Género</th>
                <th>Dirección</th>
                <th>Número telefónico</th>
                <th>Editar / Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Femenino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
              <tr>
                <td class="serial">Nombre Completo</td>
                <td> 12345678 </td>
                <td> <span class="name">01/01/1980</span> </td>
                <td> <span class="product">05/05/2020</span> </td>
                <td><span>Masculino</span></td>
                <td><span>Calle ABCDE Esquina FGHI #1234</span></td>
                <td><span>77654321</span></td>
                <td><button class="btn btn-warning" type="button" name="button"><i class="fas fa-edit"></i></button>&nbsp;<button class="btn btn-danger" type="button" name="button"><i class="fas fa-times"></i></button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div></div>
    </div>
  </div>
  </div>
  </div>



  <script type="text/javascript">
  var input =  document.getElementById('nombres');
  input.addEventListener('input',function(){
  if (this.value.length > 35)
     this.value = this.value.slice(0,35);
  })
  </script>

  <script type="text/javascript">
  var input =  document.getElementById('apellido_m');
  input.addEventListener('input',function(){
  if (this.value.length > 20)
     this.value = this.value.slice(0,20);
  })
  </script>

  <script type="text/javascript">
  var input =  document.getElementById('apellido_p');
  input.addEventListener('input',function(){
  if (this.value.length > 20)
     this.value = this.value.slice(0,20);
  })
  </script>

  <script type="text/javascript">
  var input =  document.getElementById('ci');
  input.addEventListener('input',function(){
  if (this.value.length > 10)
     this.value = this.value.slice(0,10);
  })
  </script>

  <script type="text/javascript">
  var input =  document.getElementById('direccion');
  input.addEventListener('input',function(){
  if (this.value.length > 70)
     this.value = this.value.slice(0,70);
  })
  </script>

  <script type="text/javascript">
  var input =  document.getElementById('ntelefono');
  input.addEventListener('input',function(){
  if (this.value.length > 8)
     this.value = this.value.slice(0,8);
  })
  </script>

<script type="text/javascript">
$(function(e) {
    "use strict";
    $(".date-inputmask").inputmask("dd/mm/yyyy"),
        $(".phone-inputmask").inputmask("(999) 999-9999"),
        $(".international-inputmask").inputmask("+9(999)999-9999"),
        $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
        $(".purchase-inputmask").inputmask("aaaa 9999-****"),
        $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
        $(".ssn-inputmask").inputmask("999-99-9999"),
        $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
        $(".currency-inputmask").inputmask("$9999"),
        $(".percentage-inputmask").inputmask("99%"),
        $(".decimal-inputmask").inputmask({
            alias: "decimal",
            radixPoint: "."
        }),

        $(".email-inputmask").inputmask({
            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
            greedy: !1,
            onBeforePaste: function(n, a) {
                return (e = e.toLowerCase()).replace("mailto:", "")
            },
            definitions: {
                "*": {
                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                    cardinality: 1,
                    casing: "lower"
                }
            }
        })
});
</script>

<script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
$('#fnac').datepicker({
  minDate: '-25550d',
  changeMonth: true,
  yearRange: "-100:+0",
            changeYear: true,
  maxDate: '-6574d',
  onSelect: function(dateStr) {
      var min = $(this).datepicker('getDate') || new Date();
      var max = new Date(min.getTime());
      //$('#datepicker2').datepicker('option', {minDate: new Date (min.getTime() + (1000*60*60*24))});
      fecha1 = moment(document.getElementById('fnac').value);
      var fecha2 = moment('2020-05-08');
      document.getElementById('edadactual').innerHTML = 'Edad actual: ' + fecha2.diff(fecha1, 'years') + ' años';
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

@endsection

@endsection
