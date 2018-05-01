@extends('layouts.base')

@section('title')
<title>Editar Usuarios</title>
@endsection

@section('header')
    <div class="header py-4">
      <div class="container">
        <div class="d-flex"> 
          <a class="header-brand" href="/index.html"> <img src="images/logo_alpha.png" alt="logo" title="logo" style="width: 144px; height: 36px;"> </a>
          <div class="d-flex order-lg-2 ml-auto">
            <div class="nav-item d-none d-md-flex"> <a href="../nuevoUsuario" class="btn btn-sm btn-outline-primary" target="_top">Agregar                    usuario</a></div>
            <div class="dropdown"> <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown"> <span class="avatar" style="background-image: url(/demo/faces/female/25.jpg)"></span>
                <span class="ml-2 d-none d-lg-block"> <span class="text-default">Hospital Honorio Delgado</span> <small class="text-muted d-block mt-1">Administrator</small>
                </span> </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i>
                  Editar perfil 
                </a> <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-settings"></i> <i class="dropdown-icon fe fe-log-out"></i> Salir </a> 
              </div>
            </div>
          </div>
          <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse"> <span class="header-toggler-icon"></span></a> 
        </div>
      </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 ml-auto">
            <form class="input-icon my-3 my-lg-0"> <input class="form-control header-search" placeholder="Buscar usuario…" tabindex="1" type="search">
              <div class="input-icon-addon"> <i class="fe fe-search"></i> </div>
            </form>
          </div>
          <div class="col-lg order-lg-first">
            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
              <li class="nav-item"> <a href="inicio_cliente.html" class="nav-link"><i class="fe fe-home"></i> Incio</a> </li>
              <li class="nav-item"> <a href="#" class="nav-link" data-toggle="dropdown"><i

                    class="fe fe-box"></i> Reportes</a> </li>
              <li class="nav-item dropdown"> <br>
              </li>
              <li class="nav-item"> <br>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>  
@endsection
  
@section('body')
  <div class="my-3 my-md-5">
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
                  <div class="form-group"> <label class="form-label">Editar
                      Usuario</label></div>
                  <br>
                  <div class="form-group"><input class="form-control" disabled="disabled" placeholder="Company" value="{{$usuario->persona->nombre}} {{$usuario->persona->apellido}}" type="text"><br>
                  </div>
                  {!!Form::open(['action'=>'AdministracionController@actualizarUsuario','method'=>'POST'])!!}
                  <div class="form-group">Cambiar ROL</div>
                  <div class="form-group"> 
                    <input type="hidden" class="form-control" name="idUsuario" value="{{$usuario->id}}">
                    <input type="hidden" class="form-control" name="idCliente" value="{{$usuario->hospital_id}}">
                    
                    <label class="custom-switch">
                      <input name="optRol" value="3" class="custom-switch-input"  checked="checked" type="radio"> 
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Control de Caja</span>
                    </label>
                  </div>
                  <div class="form-group"> 
                    <label class="custom-switch">
                      <input name="optRol" value="4" class="custom-switch-input" type="radio"> 
                      <span class="custom-switch-indicator"></span>&nbsp;&nbsp;&nbsp; 
                      <span class="Rolando Ancajima Calle">Admisión</span>
                    </label>
                  </div>
                  <div class="form-group"> 
                    <label class="custom-switch">
                      <input name="optRol" value="5" class="custom-switch-input" type="radio"> 
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Recursos Humanos</span>
                    </label> 
                    <input name="option" value="6" class="custom-switch-input" type="radio">&nbsp;</div>
                  <div class="form-group"><span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description">Histórias Clínicas</span></div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group"><br> </div>
                  <div class="form-group"><br>
                    <input class="form-control" disabled="disabled" placeholder="Company" value="{{$usuario->username}}" type="text">
                  </div>
                  <div class="form-group">&nbsp;<br>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-group"><br></div>
                  Cambiar clave
                  <input name="password" class="form-control" placeholder="cambiar de contraseña"  type="text"> </div>
                <br>
                <div class="card-footer text-right">
                  <div class="d-flex" style="text-align: center;">
                    <dl>
                      <dt> 
                          <button type="submit" class="btn btn-primary ml-auto">Guardar cambios</button> 
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Eliminar Usuario</button>
                      </dt>
                    </dl>
                  </div>
                </div>
                {!!Form::close()!!}

              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Esta seguro de Eliminar al usuario {{$usuario->persona->nombre}} {{$usuario->persona->apellido}} </h4>
                      <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      
                      <button type="button" action="AdministracionController@actualizarUsuario" class="btn btn-default" >Si</button>
                      </a>
                    </div>
                  </div>

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
@endsection

@section('footer')
<footer class="footer">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-auto ml-lg-auto">
        <div class="row align-items-center">
          <div class="col-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="./faq.html">Manual de usuario</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
        <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">TELEFILA
          SAC © Todos los derechos reservados
        </p>
        <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
          Av. Joaquín Madrid 277 piso 2, San Borja T. 014750467
        </p>
        <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">info@avtiva.com</p>
      </div>
    </div>
  </div>
</footer>
@endsection    