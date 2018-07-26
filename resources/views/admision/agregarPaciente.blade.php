@extends('layouts.base')

@section('title','Admisión')


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
    <title>Agregar Paciente</title>
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
              <div style="text-align: center;"><img src="/demo/photos/logo_alpha.png"

                  alt="logo" title="logo"><br>
                <br>
              </div>
              {{ Form::open(array('url' => 'admision/agregarPaciente/crearRegistro', 'method' => 'post', 'class' =>'card')) }}
              {!! csrf_field() !!}
              
                <div class="card-body p-6">
                  <div class="card-title">Agregar Paciente</div>
                  <div class="form-group">
                    <input name="nombres" class="form-control" placeholder="Nombres" type="text" required>
                  </div>
                  <div class="form-group">
                    <input name="apellidos" class="form-control" placeholder="Apellidos" type="text" required>
                  </div>
                  <div class="form-group">
                    <input name="dni"  maxlength="8" class="form-control" placeholder="N° DNI" type="text" required>
                  </div>
                  <div class="form-group">Departamento </div>
                  <div class="form-group">
                    <select name="departamento" class="form-control custom-select" required>
                      &nbsp;
                      <option value="" selected disabled hidden>Selecciona</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Ancash">Áncash</option>
                      <option value="apurimac">Apurímac</option>
                      <option value="arequipa">Arequipa</option>
                      <option value="ayacucho">Ayacucho</option>
                      <option value="cajamarca">Cajamarca</option>
                      <option value="callao">Callao</option>
                      <option value="cuzco">Cuzco</option>
                      <option value="huancavelica">Huancavelica</option>
                      <option value="huanuco">Huánuco</option>
                      <option value="ica">Ica</option>
                      <option value="junin">Junín</option>
                      <option value="lalibertad">La Libertad</option>
                      <option value="loreto">Loreto</option>
                      <option value="lambayeque">Lambayeque</option>
                      <option value="limametropolitana">Lima metropolitana</option>
                      <option value="limaregion">Lima Región</option>
                      <option value="loreto">Loreto</option>
                      <option value="madrededios">Madre de Dios</option>
                      <option value="moquegua">Moquegua</option>
                      <option value="pasco">Pasco</option>
                      <option value="piura">Piura</option>
                      <option value="puno">Puno</option>
                      <option value="sanmartin">San Martín</option>
                      <option value="tacna">Tacna</option>
                      <option value="tumbes">Tumbes</option>
                      <option value="ucayali">Ucayali</option>
                      &nbsp;
                    </select>
                  </div>
                  <div class="form-group">
                    <input name="ciudad" class="form-control" placeholder="Ciudad" type="text" required>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input name="sis" type="checkbox"  class="custom-control-input" > 
                      <span class="custom-control-label">Paciente SIS<br></span>
                    </label>
                  </div>
                  
                  <div class="form-group"><b>Sexo</b><br>
                    <div class="custom-switches-stacked"> 
                      <label class="custom-switch">
                        <input name="sexo" value="0"  class="custom-switch-input"  type="radio" required> 
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Femenino</span>
                      </label> <label class="custom-switch"> 
                        <input name="sexo" value="1" class="custom-switch-input" type="radio" required> 
                        <span class="custom-switch-indicator"></span> 
                        <span class="custom-switch-description">Masculino</span></label></div>
                  </div>
                  <div class="form-footer"><button type="submit" class="btn btn-primary btn-block">AGREGAR
                      PACIENTE&nbsp;</button> </div>
                </div>
              
              
              {{ Form::close() }}

              
              <div class="text-center text-muted"><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
