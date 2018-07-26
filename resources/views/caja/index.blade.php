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
    <title>Caja</title>
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
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex"> <a class="header-brand" href="./index.html"> <img
                  src="file:///E:/clientes/2018/Telefila/Producto/Suite%20web/demo/photos/logo_alpha.png"
                  alt="logo" title="logo" style="width: 144px; height: 36px;"> </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown"> <a href="#" class="nav-link pr-0 leading-none"
                    data-toggle="dropdown"> <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block"> <span class="text-default">Maria
                        Delgado Arrascue</span> <small class="text-muted d-block mt-1">Caja</small>
                    </span> </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i>
                      <i class="dropdown-icon fe fe-log-out"></i> Salir </a> </div>
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
                <form class="input-icon my-3 my-lg-0"> <input class="form-control header-search"
                    placeholder="Buscar DNI…" tabindex="1" type="search">
                  <div class="input-icon-addon"> <i class="fe fe-search"></i> </div>
                </form>
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item"> <a href="#" class="nav-link"><i class="fe fe-home"></i>
                      Inicio</a> </li>
                  <li class="nav-item"> <br>
                  </li>
                  <li class="nav-item dropdown"> <br>
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
          <!--</nav>-->
          <!--</div>-->
          <div class="container">
            <div class="row row-cards"><br>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Listado general de Tickets de HOY</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">TICKET</th>
                          <th class="w-1">APELLIDOS Y NOMBRES</th>
                          <th class="w-1">CONSULTORIO</th>
                          <th class="w-1">FECHA DE CITA</th>
                          <th class="w-1">HORA </th>
                          <th class="w-1">PAGAR TICKET</th>
                          <th class="w-1">ELIMINAR </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="text-muted">0101</span></td>
                          <td>Juan Francisco Ordoñez Velasquez<br>
                          </td>
                          <td>Medicina General</td>
                          <td>25 abril 2018</td>
                          <td style="width: 65px;">10:30<br>
                          </td>
                          <td style="margin-left: -13px;"><button type="submit"
                              class="btn btn-primary btn-block">PAGADO&nbsp;</button></td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0103</span></td>
                          <td>Maria Villela Roo<br>
                          </td>
                          <td>Medicina General</td>
                          <td>25 abril 2018</td>
                          <td>10:45<br>
                          </td>
                          <td><button type="submit" class="btn btn-primary btn-block">PAGADO&nbsp;</button>
                          </td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a><br>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0104</span></td>
                          <td>José Velasquez Chavez<br>
                          </td>
                          <td>Oftalmología</td>
                          <td>25 abril 2018</td>
                          <td>10:45 </td>
                          <td><button type="submit" class="btn btn-primary btn-block">PAGADO
                              </button></td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0105</span></td>
                          <td>Clodomira Beltran Agapito<br>
                          </td>
                          <td>Odontología</td>
                          <td>28 abril 2018</td>
                          <td>10:45 </td>
                          <td><button type="submit" class="btn btn-primary btn-block">PAGADO
                              </button></td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0106</span></td>
                          <td>Sofia Larrain Verastegui<br>
                          </td>
                          <td>Medicina General</td>
                          <td>29 abril 2018</td>
                          <td>10:45 </td>
                          <td><button type="submit" class="btn btn-primary btn-block">PAGADO
                              </button></td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a>&nbsp;
                            </td> </tr>
                        <tr>
                          <td><span class="text-muted">0106</span></td>
                          <td>José Velasquez Chavez</td>
                          <td>Medicina General</td>
                          <td>29 abril 2018</td>
                          <td>10:45</td>
                          <td><button type="submit" class="btn btn-primary btn-block">PAGADO
                              </button></td>
                          <td><a href="#" class="icon"><i class="fe fe-trash"></i></a>&nbsp;
                            </td> </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <ul class="pagination ">
              <li class="page-item page-prev disabled"> <a class="page-link" href="#"
                  tabindex="-1"> Atras </a> </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item page-next"> <a class="page-link" href="#">
                  Siguiente </a> </li>
            </ul>
          </div>
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
                </ul>
                <a href="./faq.html">Manual de usuario</a>
                <ul class="list-inline list-inline-dots mb-0">
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
  </body>
</html>
