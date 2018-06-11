@extends('layouts.template')

@section('title')
Consultorios
@endsection


@section('header')
        <div class="header py-4">
          <div class="container">
            <div class="d-flex"> 
              <a class="header-brand" href="/index.html"> 
                <img src="/demo/photos/logo_alpha.png" alt="logo" title="logo" style="width: 144px; height: 36px;"> 
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown"> 
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown"> 
                    <span class="avatar" style="background-image: url(/demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block"> 
                      <span class="text-default">Hospital Honorio Delgado</span> 
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span> 
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#"> 
                      <i class="dropdown-icon fe fe-user"></i>
                      Editar perfil 
                    </a> 
                    <a class="dropdown-item" href="#"> 
                      <i class="dropdown-icon fe fe-settings"></i> 
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
@endsection

@section('body')
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
                    <h3 class="card-title">Listado de consultorios </h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">Nro.</th>
                          <th class="w-1">CONSULTORIO</th>
                          <th class="w-1">ESPECIALIDAD</th>
                          <th class="w-1">USUARIO</th>
                          <th class="w-1">TURNOS </th>
                          <th class="w-1">DISPONIBILIDAD</th>
                          <th class="w-1">PEDESTAL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="text-muted">0101</span></td>
                          <td><a href="1/consultorio" class="text-inherit">Medicina
                              General 1<br>
                            </a></td>
                          <td>Medicina general</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>8</strong></td>
                          <td><span class="badge badge-warning">50%</span> </td>
                          <td> <span class="custom-switch-indicator"></span> <span

                              class="custom-switch-description"></span> </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0102</span></td>
                          <td><a href="editar_consultorio.html" class="text-inherit">Medicina
                              General 2<br>
                            </a></td>
                          <td>Medicina general</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>10</strong></td>
                          <td><span class="badge badge-danger">10%</span> </td>
                          <td>
                            <div class="custom-switches-stacked"> <label class="custom-switch">
                                <input name="option" value="1" class="custom-switch-input"

                                  checked="checked" type="radio"> <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description"></span></label><label

                                class="custom-switch"></label></div>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0103</span></td>
                          <td><a href="editar_consultorio.html" class="text-inherit">Oftalmologia
                              1<br>
                            </a></td>
                          <td>Oftalmología</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>10</strong> </td>
                          <td><span class="badge badge-success">80%</span> </td>
                          <td> <span class="custom-switch-indicator"></span> <span

                              class="custom-switch-description"></span> </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0104</span></td>
                          <td><a href="editar_consultorio.html" class="text-inherit">Oftalmología
                              2 </a></td>
                          <td>Oftalmología</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>10</strong> </td>
                          <td><span class="badge badge-success">70%</span> </td>
                          <td> <span class="custom-switch-indicator"></span> <span

                              class="custom-switch-description"></span> </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0105</span></td>
                          <td><a href="editar_consultorio.html" class="text-inherit">Gineco
                              obstetricia<br>
                            </a></td>
                          <td>Gineco Obtetricia</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>10</strong> </td>
                          <td><span class="badge badge-success">100%</span> </td>
                          <td> <span class="custom-switch-indicator"></span> <span

                              class="custom-switch-description"></span> </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">0106</span></td>
                          <td><a href="editar_consultorio.html" class="text-inherit">Urología<br>
                            </a></td>
                          <td>Urología</td>
                          <td>personal1AC</td>
                          <td style="text-align: center;"><strong>12</strong> </td>
                          <td><span class="badge badge-warning">30%</span> </td>
                          <td> <span class="custom-switch-indicator"></span> <span

                              class="custom-switch-description"></span> </td>
                        </tr>
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
  @endsection
  
  @section('footer')
  
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
  @endsection

