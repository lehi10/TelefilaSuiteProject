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
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="/assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet">
    <script src="/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet">
    <script src="/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/assets/plugins/input-mask/plugin.js"></script>
    @yield('scripts')

    </head>
  <body class="">
    <div class="page">
        <div class="page-main">
        <!-- CONTENIDOS -->
        <div class="page-main">
                <div class="header py-4">
                  <div class="container">
                    <div class="d-flex">
                      <a class="header-brand" href="/">
                        <img src="{{url('images/logo_alpha.png')}}" alt="logo" title="logo" style="width: 144px; height: 36px;">
                      </a>
                      <div class="d-flex order-lg-2 ml-auto">
                        @if(Auth::user()->checkRol("Super Usuario"))
                        <div class="nav-item d-none d-md-flex">
                          <a href="{{url('/superuser/nuevoCliente')}}" class="btn btn-sm btn-outline-primary">
                            Agregar Cliente
                          </a>
                        </div>
                        @elseif(Auth::user()->checkRol("Administrador"))
                        <div class="nav-item d-none d-md-flex">
                          <a href="{{url('/administrador/nuevoUsuario')}}" class="btn btn-sm btn-outline-primary">
                            Agregar Usuario
                          </a>
                        </div>
                        @endif
                        @yield('auxiliar')
                        <div class="dropdown" >
                          <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                          @if (Auth::user()->hospital && Auth::user()->hospital->logo && !Auth::user()->checkRol('Super Usuario'))
                            <span class="avatar" style="background-image:url( {{url('/storage/'.Auth::user()->hospital->codigo.'/logo.jpg')}})"></span>
                          @else
                            <span class="avatar" style="background-image:url( {{url('/demo/faces/female/25.jpg')}})"></span>
                          @endif
                          @if (Auth::user()->checkRol("Administrador"))
                              <span class="ml-2 d-none d-lg-block">
                                <span class="text-default">
                                  Hospital {{Auth::user()->hospital->nombre}}
                                </span>
                                <small class="text-muted d-block mt-1">
                                  {{Auth::user()->rol->nombre}}
                                </small>
                              </span>
                          @else
                                <span class="ml-2 d-none d-lg-block">
                                  <span class="text-default">
                                    {{Auth::user()->username}}
                                  </span>
                                  <small class="text-muted d-block mt-1">
                                     {{Auth::user()->rol->nombre}}
                                  </small>
                                </span>
                          @endif
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          @if (Auth::user()->checkRol('Administrador'))
                            <a class="dropdown-item" href="#">
                              <i class="dropdown-icon fe fe-user"></i>
                              Editar perfil
                            </a>
                          @endif
                            <a class="dropdown-item" href="{{route('logout')}}">
                              <i class="dropdown-icon fe fe-log-out"></i>
                              Salir
                            </a>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse" >
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-lg-3 ml-auto pad">
                      @yield('buscador')
                      </div>
                      <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                          @if (Auth::user()->checkRol('Super Usuario'))
                            @yield('more_options')
                          @elseif (Auth::user()->checkRol('Administrador'))
                          <li class="nav-item">
                            <a href="/historialMedico" class="nav-link" >
                              <i class="fe fe-box"></i>
                                Reportes
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/administrador/consultorios" class="nav-link">
                              <i class="fe fe-calendar"></i>
                                Consultorios
                            </a>
                          </li>
                          @elseif (Auth::user()->checkRol('Recursos Humanos'))
                          <li class="nav-item">
                            <a href="/recursosHumanos" class="nav-link">
                              <i class="fe fe-home"></i>
                                Medicos
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/recursosHumanos/consultorios" class="nav-link">
                              <i class="fe fe-calendar"></i>
                                Consultorios
                            </a>
                          </li>
                          @endif
                          <li class="nav-item dropdown">
                            <br>
                          </li>
                          <li class="nav-item">
                            <br>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            @yield('body')
            </div>
          </div>
          <footer class="footer">
              <div class="container">
                <div class="row align-items-center flex-row-reverse">
                  <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <ul class="list-inline list-inline-dots mb-0"></ul>
                        <a href="./faq.html">Manual de usuario</a>
                        <ul class="list-inline list-inline-dots mb-0"></ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
                      TELEFILA SAC © Todos los derechos reservados
                    </p>
                    <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
                      Av.Joaquín Madrid 277 piso 2, San Borja T. 014750467
                    </p>
                    <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
                      info@avtiva.com
                    </p>
                  </div>
                </div>
              </div>
            </footer>
        <!-- END CONTENIDOS -->
        </div>
    </div>
  </body>

  @yield('scriptsOnFooter')
</html>
