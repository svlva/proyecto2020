<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<style media="screen">
body {
background: linear-gradient(-45deg, #6eca33, #14b291);
background-size: 400% 400%;
animation: gradient 30s ease infinite;
}

@keyframes gradient {
0% {
  background-position: 0% 50%;
}
50% {
  background-position: 100% 50%;
}
100% {
  background-position: 0% 50%;
}
}
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href=" {{asset('images/logo2.png')}}">
    <link rel="shortcut icon" href=" {{asset('images/logo2.png')}}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/conflict-detection.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/regular.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/solid.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/v4-shims.min.js" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/svg-with-js.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/v4-shims.min.css">
    <!-- Fin Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href=" {{asset('css/cs-skin-elastic.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/style.css')}} ">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<script type="text/javascript">
body {
background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
background-size: 400% 400%;
animation: gradient 15s ease infinite;
}

@keyframes gradient {
0% {
  background-position: 0% 50%;
}
50% {
  background-position: 100% 50%;
}
100% {
  background-position: 0% 50%;
}
}
</script>

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
label {
font-family: 'Roboto', sans-serif;
}
</style>

<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-form" style="background-color: #ffffff;

                box-shadow: 1px 1px 6px 1px rgba(0,0,0,0.6);">

                    <form>
                    <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src=" {{asset('images/logo.png')}} " width="60%" height="60%">
                    </a>
                </div>
                <br><br>
                        <div class="form-group">
                            <label style="color: #000000">Nombre de usuario</label>
                            <input id="username" type="text" class="form-control" placeholder="Nombre"  onkeypress="return soloLetras(event)">
                        </div>

                        <div class="form-group">
                          <label style="color: #000000">Contraseña</label>
                          <div class="input-group  mb-3">
                          <input class="form-control" id="password" type="password" placeholder="Contraseña" name="Password" onkeypress="return soloLetras(event)">
                          <div class="input-group-append">
                            <button type="button" style="background-color: #3dbea1;" class="btn-sm btn-success" onclick="mostrarContrasena()" data-toggle="tooltip" data-placement="top" title="Ver / ocultar contraseña"><i class="fas fa-eye" id="icono-ojito"></i></button>
                          </div>
                        </div>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Recordarme
                            </label>
                            <!--<label class="pull-right">
                                <a href="#">¿Olvidaste la contraseña?</a>
                            </label>-->

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="background-color: #3dbea1;">Ingresar</button>
                        <!--<div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src=" {{asset('assets/js/main.js')}} "></script>

</body>
</html>

<script>
function soloLetras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "-_12345678990abcdefghijklmnopqrstuvwxyz";
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
var input =  document.getElementById('username');
input.addEventListener('input',function(){
if (this.value.length > 20)
   this.value = this.value.slice(0,20);
})
</script>

<script type="text/javascript">
function mostrarContrasena(){
  var tipo = document.getElementById("password");
  if(tipo.type == "password"){
    tipo.type = "text";
    document.getElementById("icono-ojito").className = "fas fa-eye-slash";
  }else{
    tipo.type = "password";
    document.getElementById("icono-ojito").className = "fas fa-eye";
  }
}
</script>

<script>
function soloLetras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "-_12345678990abcdefghijklmnopqrstuvwxyz";
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
