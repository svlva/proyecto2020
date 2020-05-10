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
    <div class="row justify-content-md-center">
    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">

      <div class="modal fade" id="editar_u" tabindex="-1" role="dialog" aria-labelledby="editar_u" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar información de usuario</h5>

              <form class="" action="proceso.php" method="post" id="form-crear">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </form></div>
            <div class="modal-body">

              <div class="form-group">
                <label for="numero" class="col-form-label">Editar nombre de usuario</label>
              </div>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
              <label for="nombre_us" class="col-form-label"><i class="fas fa-user"></i> Nombre de Usuario</label>
              <input id="nombre_us" onkeypress="return validarUsuarioNombree(event)" type="text" class="form-control" onkeyup="validarUsuarios()" name="nombre_us" required="" autocomplete="off" value="cristhian">
              <script type="text/javascript">
              var input =  document.getElementById('nombre_us');
              input.addEventListener('input',function(){
              if (this.value.length > 20)
                 this.value = this.value.slice(0,20);
              })
              </script>
              </div>
              </div>
              </div>


               <script type="text/javascript">
                function validarUsuarios() {
                  if (document.getElementById("nombre_us").value.length > 5) {
                    document.getElementById("guardar-cambios-u").disabled = false;
                  } else {
                    document.getElementById("guardar-cambios-u").disabled = true;
                  }
                                if (document.getElementById("nombre_us").value === "cristhian") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "a") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "bramar") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "salvadorcaceresc") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "nuenuea") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "configu") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "nuenue") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                              if (document.getElementById("nombre_us").value === "quique") {
                      document.getElementById("guardar-cambios-u").disabled = true;
                    }
                          }
               </script>

            </div>
            <div class="modal-footer">
              <label class="float-left">Caracteres mínimos: 6</label>
              <label class="float-left">Caracteres máximos: 20</label>

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="guardar-cambios-u" name="guardar-cambios-u" value="guardar-cambios-u" disabled="">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editar_c" tabindex="-1" role="dialog" aria-labelledby="editar_c" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña de acceso</h5>

        <form class="" action="proceso.php" method="post">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </form></div>
      <div class="modal-body">

        <div class="form-group">
          <label for="numero" class="col-form-label">Introduce la contraseña dos veces en los campos de abajo</label>
        </div>

        <div class="form-group">
        <label for="password-1" class="col-form-label"><i class="fas fa-key"></i> Contraseña</label>
        <input id="password-1" type="password" class="form-control" name="password1" onkeyup="validarInput()" autocomplete="off" required="">
        </div>

        <div class="form-group">
        <label for="password-2" class="col-form-label"><i class="fas fa-key"></i> Repetir contraseña</label>
        <input id="password-2" type="password" class="form-control" name="password2" onkeyup="validarInput()" required="">
        </div>

 · La contraseña debe tener más de seis carácteres.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="guardar-cambios-c" name="guardar-cambios-c" value="guardar-cambios-c" disabled="">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

  <div class="tab-regular">
  <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
  <li class="nav-item">
  <a class="nav-link active" id="info-empleado" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Información Personal</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Información de Usuario</a>
  </li>

  </ul>
  <div class="tab-content" id="myTabContent7">
  <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="info-empleado">
    <!-- Card Información Usuario -->

        <div class="card">
          <div class="card-body">
            <div class="user-avatar text-center d-block">
              <i class="fas fa-user-circle fa-5x"></i>
            </div>
            <div class="text-center">
              <h2 class="font-24 mb-0">Nombre de usuario</h2>
              <p>Rol de Usuario</p>
            </div>
          </div>
          <div class="card-body border-top">
            <h3 class="font-16 mb-3">Información de contacto</h3>
            <div class="">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-home mr-2"></i><b>Dirección: </b>Nombre de dirección</li>
                <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><b>Correo: </b>correo@dominio.com</li>
                <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><b>Teléfono: </b>12345678</li>
              </ul>
            </div>
          </div>
          <div class="card-body border-top">
            <h3 class="font-16 mb-3">Información adicional</h3>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="mdi mdi-gender-male mr-2"></i><b>Género: </b>Género</li>
                <li class="mb-0"><i class="fas fa-address-card mr-2"></i><b>CI: </b>12345678</li>
              </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-birthday-cake mr-2"></i><b>F. de Nacimiento: </b>0000-00-00</li>
                <li class="mb-0"><i class="fas fa-clock mr-2"></i><b>Edad: </b>00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body border-top">
          <h3 class="font-16 mb-3">Operación</h3>
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar">Editar</a>
        </div>
      </div>

    <!-- FIN: Card Información Usuario -->
  </div>
  <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
    <!-- Card Información Usuario -->

        <div class="card">
          <div class="card-body">
            <div class="user-avatar text-center d-block">
              <i class="fas fa-user-circle fa-5x"></i>
            </div>
            <div class="text-center">
              <h2 class="font-24 mb-0">Nombre de usuario </h2>
              <p> Rol de Usuario</p>
            </div>
          </div>
          <div class="card-body border-top">
            <h3 class="font-16 mb-3">Información de usuario</h3>
            <div class="">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-user mr-2"></i><b>Nombre de Usuario: </b>root</li>
                <li class="mb-2"><i class="far fa-calendar mr-2"></i><b>Fecha de Registro: </b>2020-05-05</li>
                <li class="mb-0"><i class="fas fa-clock mr-2"></i><b>Total de días en el sistema: </b>1 día</li>
              </ul>
            </div>
          </div>

        <div class="card-body border-top">
          <h3 class="font-16 mb-3">Operación</h3>
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar_u">Cambiar nombre de usuario</a>
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editar_c">Cambiar contraseña</a>
        </div>
      </div>

    <!-- FIN: Card Información Usuario -->
  </div>

  </div>
  </div>

  </div>
  </div>
</div></div>

@endsection

@endsection

<script type="text/javascript">
$('#fnac').datepicker({
  minDate: '-25550d',
  changeMonth: true,
  changeYear: true,
  maxDate: '-6570d',
  onSelect: function(dateStr) {
      var min = $(this).datepicker('getDate') || new Date();
      var max = new Date(min.getTime());
  }
});
</script>
<script type="text/javascript">
function soloNumeros(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "1234567890";
  especiales = "8-37-39-46";
  //--------------------------
  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
//--------------------------
  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
</script>
<script type="text/javascript">
function validarUsuarioNombree(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "1234567890-_abcdefghijklmnopqrstuvwxyz";
  especiales = "8-37-39-46";

  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
</script>
<script type="text/javascript">
function validarInput(){
  if ((document.getElementById("password-1").value.length >= 6) && (document.getElementById("password-2").value.length >= 6)) {
    if (document.getElementById("password-1").value === document.getElementById("password-2").value) {
      document.getElementById("guardar-cambios-c").disabled = false;
    }   else  {
        document.getElementById("guardar-cambios-c").disabled = true;
      }
  }

}
</script>
