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
    <title>Telefila V1.1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet">
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet">
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6"> <img src="/images/logo_alpha.png"

                  alt="logo" title="logo" longdesc="logo"></div>
              <form class="card" method="POST" action="{{ route('login') }}">
                  {{csrf_field() }}
                <div class="card-body p-6">
                  <div class="card-title">Bienvenido, por favor ingrese sus
                    datos:</div>
                  <div class="form-group"><input class="form-control" id="exampleInputEmail1"

                      aria-describedby="emailHelp" placeholder="Usuario" required="required"

                      type="email" name="email"> </div>
                  <label class="form-label"> </label><input class="form-control"

                    id="exampleInputPassword1" placeholder="Clave" required="required" name="password"

                    type="password">
                  <div class="form-group"> <label class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox"> <span

                        class="custom-control-label">Recordarme en este equipo</span>
                    </label> </div>
                  <div class="form-footer"> <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted" style="font-weight: normal;">
                ¿Tienes problemas? T. 925125386 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

