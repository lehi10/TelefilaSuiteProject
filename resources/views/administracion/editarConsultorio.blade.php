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
    <title>Suite Telefila V1.1</title>
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
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex"> <a class="header-brand" href="./index.html"> <img

                  src="/demo/photos/logo_alpha.png"

                  alt="logo" title="logo" style="width: 144px; height: 36px;"> </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex"> </div>
                <div class="dropdown"> <a href="#" class="nav-link pr-0 leading-none"

                    data-toggle="dropdown"> <span class="avatar" style="background-image: url(/demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block"> <span class="text-default">Hospital
                        Honorio Delgado</span> <small class="text-muted d-block mt-1">Administrator</small>
                    </span> </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i>
                      Editar perfil </a> <a class="dropdown-item" href="#"> <i

                        class="dropdown-icon fe fe-settings"></i> <i class="dropdown-icon fe fe-log-out"></i>
                      Salir </a> </div>
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
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item"> <a href="inicio_cliente.html" class="nav-link"><i

                        class="fe fe-home"></i> Inicio</a> </li>
                  <li class="nav-item"> <a href="javascript:void(0)" class="nav-link"

                      data-toggle="dropdown"><i class="fe fe-box"></i> Reportes</a>
                    <div class="dropdown-menu dropdown-menu-arrow"> <a href="./cards.html"

                        class="dropdown-item ">Cards design</a> <a href="./charts.html"

                        class="dropdown-item ">Charts</a> <a href="./pricing-cards.html"

                        class="dropdown-item ">Pricing cards</a> </div>
                  </li>
                  <li class="nav-item dropdown"> <a href="consultorios.html" class="nav-link"

                      data-toggle="dropdown"><i class="fe fe-calendar"></i>
                      Consultorios</a>
                    <div class="dropdown-menu dropdown-menu-arrow"> <a href="./maps.html"

                        class="dropdown-item ">Maps</a> <a href="./icons.html"

                        class="dropdown-item ">Icons</a> <a href="./store.html"

                        class="dropdown-item ">Store</a> <a href="./blog.html"

                        class="dropdown-item ">Blog</a> </div>
                  </li>
                  <li class="nav-item"> <br>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <!--<div class="container">-->
          <!--<nav class="breadcrumb breadcrumb-content">-->
          <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
          <!--<span class="breadcrumb-item active">Cards</span>-->
          <!--</nav>-->&nbsp;
          <div class="container">
            <div class="row row-cards"><br>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><br>
                    </h3>
                    <p><br>
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group" style="width: 886px;">&nbsp; <label

                            class="form-label">Editar Consultorio</label></div>
                        <div class="form-group"><input class="form-control" placeholder="Oftalmología 1"

                            type="text"></div>
                        <div class="form-group"><label class="form-label" style="width: 886px;">
                            Médicos Asignados</label></div>
                        <div class="form-group"><label class="form-label" style="width: 886px;"></label>
                          <table style="width: 884px; height: 51px;" cellspacing="20"

                            border="0">
                            <tbody>
                              <tr>
                                <th class="w-1" style="width: 155px;">Asignar
                                  Médico</th>
                                <th class="w-1" style="width: 155px;">Especialidad
                                  </th><th class="w-1" style="width: 155px;">Turnos</th>
                              </tr>
                              <tr>
                                <td>
                                  <select name="user" class="form-control custom-select">
                                    &nbsp;
                                    <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Ninguno</option>
                                    <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">Dra.
                                      Luciana Perez Aguirre</option>
                                    <option value="3" data-data="{&quot;image&quot;: &quot;demo/faces/female/1.jpg&quot;}">Dr.
                                      Godofredo Camacho Bite</option>
                                    <option value="4" data-data="{&quot;image&quot;: &quot;demo/faces/female/18.jpg&quot;}">Dra.
                                      Maria del Carmen Ballena</option>
                                  </select>
                                </td>
                                <td><input class="form-control" disabled="disabled"

                                    placeholder="Company" value="Oftalmologia 1"

                                    type="text"></td>
                                <td><input class="form-control" disabled="disabled"

                                    placeholder="turnos" value="0" type="text">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <label class="form-label" style="width: 886px;"><br>
                          </label></div>
                      </div>
                      <br>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group"><br>
                        </div>
                        Especialidad<br>
                        <div class="row align-items-center">
                          <div class="col"><input class="form-control" disabled="disabled"

                              placeholder="especialidad" value="Oftalmología" type="text">&nbsp;&nbsp;
                            &nbsp; </div>
                        </div>
                      </div>
                      <br>
                      <div class="card-footer text-right">
                        <div class="d-flex" style="text-align: center;">
                          <dl>
                            <dt> <a href="javascript:void(0)" class="btn btn-link">Eliminar
                                consultorio</a><button type="submit" class="btn btn-primary ml-auto">Guardar
                                cambios</button> </dt>
                          </dl>
                        </div>
                      </div>
                      <div class="col-md-12"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive"><br>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
              <div class="col-auto ml-lg-auto">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                      <li class="list-inline-item"><a href="./faq.html">Manual
                          de usuario</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">TELEFILA
                  SAC © Todos los derechos reservados</p>
                <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Av.
                  Joaquín Madrid 277 piso 2, San Borja T. 014750467</p>
                <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">info@avtiva.com</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
