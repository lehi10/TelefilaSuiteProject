<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>Nuevo usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="/assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <script src="/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet">
    <script src="/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet">
    <script src="/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div style="text-align: center;"><img src="/images/logo_alpha1.png"

                  alt="logo" title="logo"><br>
                <br>
              </div>
              {!!Form::open(['action'=>'AdministracionController@guardarUsuario','method'=>'POST'])!!}
                <div class="card-body p-6">
                  <div class="card-title">Crear nuevo usuario</div>
                  <div class="form-group">
                    <input name="nombre" class="form-control" placeholder="Nombres completo" type="text"><br> 
                    <input name="apellidos" class="form-control" placeholder="Apellidos" type="text"><br> 
                    <input name="dni" class="form-control" placeholder="DNI" type="text"><br> 
                    <input name="email" class="form-control" placeholder="e-mail" type="text"><br> 
                    <input name="usuario"  class="form-control" name="example-disabled-input" placeholder="usuario" type="text"> 
                  </div>

                  <div class="form-group">
                    <input name="password" class="form-control" placeholder="Clave" type="password"> 
                  </div>
                  <div class="form-group"> 
                    <label class="custom-control custom-checkbox">
                      <input name="estado" class="custom-control-input" type="checkbox"> 
                        <span class="custom-control-label">Iniciar en estado ACTIVO.</span>
                    </label>
                  </div>
                  <div class="form-group"><b>¿Que ROL desempeñará?</b><br>
                    <div class="custom-switches-stacked"> 
                      <label class="custom-switch">
                        <input name="optRol" value="3" class="custom-switch-input" checked="checked" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Control de caja</span>
                      </label> 
                      <label class="custom-switch"> 
                        <input name="optRol" value="4" class="custom-switch-input" type="radio"> 
                        <span class="custom-switch-indicator"></span> 
                        <span class="custom-switch-description">Admisión</span>
                      </label> 
                      <label class="custom-switch"> 
                        <input name="optRol" value="5" class="custom-switch-input" type="radio"> 
                        <span class="custom-switch-indicator"></span> 
                        <span class="custom-switch-description">Recursos Humanos</span> </label><label class="custom-switch">
                        <input name="optRol" value="6" class="custom-switch-input" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Histórias Clínicas</span> 
                      </label> 
                    </div>
                  </div>
                  <div class="form-footer"> 
                    <button type="submit" class="btn btn-primary btn-block">
                      CREAR NUEVO&nbsp;
                    </button> 
                  </div>
                </div>
              {!!Form::close()!!}
              <div class="text-center text-muted"><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
