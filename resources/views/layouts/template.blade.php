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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
        <div class="page-main">  

        <!-- CONTEasdsadNIDOS -->
        <div class="page-main">
                <div class="header py-4">
                  <div class="container">
                    <div class="d-flex"> <a class="header-brand" href="./index.html"> <img
                          src="{{url('images/logo_alpha.png')}}"
                          alt="logo" title="logo" style="width: 144px; height: 36px;"> </a>
                      <div class="d-flex order-lg-2 ml-auto">
                        @if(Auth::user()->tieneRol("superUser"))
                        <div class="nav-item d-none d-md-flex"> <a href="{{url('/superuser/nuevoCliente')}}"
                            class="btn btn-sm btn-outline-primary">Agregar
                            cliente</a> 
                        </div>
                        @yield('auxiliar')
                        
                        @elseif(Auth::user()->tieneRol("Administrator"))
                        <div class="nav-item d-none d-md-flex"> <a href="{{url('/administrador/nuevoCliente')}}"
                            class="btn btn-sm btn-outline-primary">Agregar
                            usuario</a> 
                        </div>
                        @endif

                        
                        <div class="dropdown"> <a href="#" class="nav-link pr-0 leading-none"
                            data-toggle="dropdown"> <span class="avatar" style="background-image:url( {{url('/demo/faces/female/25.jpg')}})"></span>
                            <span class="ml-2 d-none d-lg-block"> <span class="text-default">{{Auth::user()->username}}</span> <small class="text-muted d-block mt-1">{{Auth::user()->rol->nombre}}</small>
                            </span> </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i>
                              Editar perfil </a> <a class="dropdown-item" href="{{route('logout')}}">  <i class="dropdown-icon fe fe-log-out"></i>
                              Salir </a> 
                          </div>
                        </div>
                      </div>
                      <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                        data-target="#headerMenuCollapse"> <span class="header-toggler-icon"></span>
                      </a> </div>
                  </div>
                </div>
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-lg-3 ml-auto">
                        <form class="input-icon my-3 my-lg-0"> <input id="search" class="form-control header-search"
                            placeholder="Buscar cliente…" tabindex="1" type="search">
                          <div class="input-icon-addon"> <i class="fe fe-search"></i> </div>
                        </form>
                      </div>
                      <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        
                          <li class="nav-item"> <a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>
                              Inicio</a> </li>
                          
                          @if (Auth::user()->tieneRol('superUser'))
                          <li class="nav-item"> <a href="#" class="nav-link" data-toggle="dropdown"><i
                                class="fe fe-box"></i> Reportes</a> </li>
                          @endif
                          <li class="nav-item dropdown"> <br>
                          </li>
                          <li class="nav-item"> <br>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

            @yield('body')

            @yield('footer')

        <!-- END CONTENIDOS -->
        
        </div>
    </div>
  </body>
</html>
