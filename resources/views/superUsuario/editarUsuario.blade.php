@extends('layouts.template')

@section('title','Editar Usuarios')

@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item slc"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>                                     
<li class="nav-item"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>     
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>                                                                                                                         
<li class="nav-item"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>                                                                               
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
                  <div class="form-group"><input class="form-control" disabled="disabled" placeholder="Company" value="{{$usuario->nombres}} {{$usuario->apellidos}}" type="text"><br>
                  </div>
                  {!!Form::open(['url'=>'superuser/editUser','method'=>'POST'])!!}
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
                        <h4 class="modal-title">Mensaje de Confirmación </h4>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" style="text-align: center; ">
                        ¿Seguro que quiere eliminar al usuario {{$usuario->nombres}} {{$usuario->apellidos}} ?                                                        
                    </div>
                    <div  style="padding :5px 5px 5px 400px;  ">
                        {{ Form::open(array('url' => 'administrador/eliminarUsr','id'=>'eliminarUsr','method' => 'post')) }}
                            <input  name="idUser" type="hidden" value="{{$usuario->id}}">
                            <td>
                            <a class="btn btn-default" data-dismiss="modal">No</a>                
                            <a class="btn btn-default" onclick="document.getElementById('eliminarUsr').submit()">Si</a>                            
                          {{ Form::close() }}
                     
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
@endsection

