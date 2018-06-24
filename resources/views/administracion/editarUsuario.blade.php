@extends('layouts.base')

@section('title','Editar Usuarios')


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
                  <div class="form-group"><input class="form-control" disabled="disabled" placeholder="Company" value="{{$usuario->nombres}} {{$usuario->apellidos}}" type="text"><br>
                  </div>
                  {!!Form::open(['url'=>'administrador/editUser','method'=>'POST'])!!}
                  <div class="form-group">Cambiar ROL</div>
                  <div class="form-group"> 
                    <input type="hidden" class="form-control" name="idUsuario" value="{{$usuario->id}}">
                    <input type="hidden" class="form-control" name="idCliente" value="{{$usuario->hospital_id}}">
                    
                    <label class="custom-switch">
                      <input name="optRol" value="3" class="custom-switch-input" @if($usuario->rol->id==3 ) checked @endif type="radio"> 
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Control de Caja</span>
                    </label>
                  </div>

                  <div class="form-group"> 
                    <label class="custom-switch">
                      <input name="optRol" value="4" class="custom-switch-input" @if($usuario->rol->id==4 ) checked @endif type="radio"> 
                      <span class="custom-switch-indicator"></span>&nbsp;&nbsp;&nbsp; 
                      <span class="Rolando Ancajima Calle">Admisión</span>
                    </label>
                  </div>

                  <div class="form-group"> 
                    <label class="custom-switch">
                      <input name="optRol" value="5" class="custom-switch-input" @if($usuario->rol->id==5 ) checked @endif type="radio"> 
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Recursos Humanos</span>
                    </label> 
                  </div>

                   <div class="form-group"> 
                    <label class="custom-switch">
                      <input name="optRol" value="6" class="custom-switch-input" @if($usuario->rol->id==6 ) checked @endif type="radio"> 
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Historial Medico</span>
                    </label> 
                  </div>




                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group"><br> </div>
                  <div class="form-group"><br>
                    <input class="form-control" disabled="disabled" placeholder="Company"  value="{{$usuario->username}}" type="text">
                  </div>
                  <div class="form-group">&nbsp;<br>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-group"><br></div>
                  Cambiar clave
                  <input name="password" class="form-control" placeholder="cambiar de contraseña"  type="password"> </div>
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
                      <h4 class="modal-title">Esta seguro de Eliminar al usuario {{$usuario->nombres}} {{$usuario->apellidos}} </h4>
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

