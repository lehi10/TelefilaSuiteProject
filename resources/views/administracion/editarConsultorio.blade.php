@extends('layouts.base')

@section('title','Editar Consultorio')

@section('auxiliar')
<div class="nav-item d-none d-md-flex"> 
                  <a href="/administrador/nuevoConsultorio" class="btn btn-sm btn-outline-primary">
                    Agregar consultorio
                  </a>
                </div>
@endsection


@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item slc"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>                                     
<li class="nav-item"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>     
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>                                                                                                                         
<li class="nav-item"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>                                                                               
@endsection


@section('body')
<div class="my-3 my-md-5">
          <!--<div class="container">-->
          <!--<nav class="breadcrumb breadcrumb-content">-->
          <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
          <!--<span class="breadcrumb-item active">Cards</span>-->
          <!--</nav>-->&nbsp;
          <div class="container">
            <div class="row rUsuarioow-cards"><br>
              <div class="colUsuario-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><br>
                    </h3>
                    <p><br>
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <form action="/administrador/editarConsultorio" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$consultorio->id}}">
                            <div class="form-group" style="width: 886px;">&nbsp; <label
                                class="form-label">Editar Consultorio {{$consultorio->nombre}}</label></div>
                            <div class="form-group"><input name="nombre" class="form-control" placeholder="{{$consultorio->nombre}}"
                                type="text" ></div>
                            <div class="form-group"><label class="form-label" style="width: 886px;">
                                Médicos Asignados</label></div>
                            
                            <div class="form-group"><label class="form-label" style="width: 886px;"></label>
                              <table style="width: 884px; height: 51px;" cellspacing="20" border="0">
                                <tbody>
                                  <tr>
                                    <th class="w-1" style="width: 155px;">Asignar Médico</th>
                                    <th class="w-1" style="width: 155px;">Especialidad</th>
                                    <th class="w-1" style="width: 155px;">Turnos</th>
                                  </tr>
                                  <tr>
                                    <td  style="padding-right:10px;" >
                                      <select id="medico" name="medico_id" class="form-control custom-select">
                                        
                                        <option value=" " data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}" data-especialidad="Ninguno" {{ $consultorio->medico_id ? 'selected' : ''}} >Ninguno</option>
                                        
                                        @foreach($medicos as $medico)
                                          <option value="{{$medico->id}}" data-especialidad="{{$medico->especialidad->nombre}}" {{$consultorio->medico_id==$medico->id ? 'selected' : ''}}  >{{$medico->nombres}} {{$medico->apellidos}}</option>
                                        @endforeach
                                      </select>
                                    </td>
                                    <td  style="padding-right:10px;" >
                                        <input class="form-control" disabled="disabled" id="med_especialidad"
                                        placeholder="" value=""
                                        type="text"></td>
                                    <td  style="padding-right:10px;" >
                                        <input class="form-control" disabled="disabled"
                                        placeholder="turnos" value="0" type="text">
                                    </td>
                                    
                                  </tr>
                                </tbody>
                              </table>

                              <label class="form-label" style="width: 886px;"><br>
                              </label></div>
                          </div>
                          <br>
                          
                          <br>
                          <div class="col-sm-6 col-md-4">
                            <div class="form-group"><br>
                            </div>
                            Especialidad<br>
                            <div class="row align-items-center">
                              <div class="col"><input class="form-control" disabled="disabled"
                                  placeholder="especialidad" value="{{$consultorio->especialidad->nombre}}" type="text">&nbsp;&nbsp;
                                &nbsp; 
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-12">
                            <div class="col-sm-3 col-md-3">
                            <strong>Precio</strong>
                              <input class="form-control" name="precio" placeholder="Precio"  type="number" step="0.1"  value="{{$tarifa}}">
                            </div>
                          </div>
                          <hr>
                          <div class="card-footer text-right">
                            <div class="d-flex" style="text-align: center;">
                              <dl>
                                <dt>                                 
                                    <button type="submit" class="btn btn-primary ml-auto">Guardar cambios</button>                                
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Eliminar Consultorio</button>
                                    </dt>

                              </dl>
                            </div>
                          </div>

                          <div class="col-md-12"> 
                          
                          
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive"><br>
            </div>
          </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Mensaje de Confirmación </h4>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="text-align: center; ">
                    ¿Seguro que quiere eliminar el consultorio{{$consultorio->especialidad->nombre}} ?                                                        
                </div>
                <div  style="padding :5px 5px 5px 400px;  ">
                      {{ Form::open(array('url' => 'administrador/eliminarConsul','id'=>'eliminarConsul','method' => 'post')) }}
                        <input  name="idConsul" type="hidden" value="{{$consultorio->id}}">
                        <td>
                        <a class="btn btn-default" data-dismiss="modal">No</a>                
                        <a class="btn btn-default" onclick="document.getElementById('eliminarConsul').submit()">Si</a>                            
                      {{ Form::close() }}       
                </div>

            </div>
          </div>
            <div class="col-md-12"> </div>
          </div>
        <script>
        
          $("#medico").ready(function(){
            $("#med_especialidad").attr('value',$(this).find(":selected").data('especialidad'));
            $("#med_especialidad").text($(this).find(":selected").data('especialidad'));
          });

          $("#medico").change(function(){
            $("#med_especialidad").attr('value',$(this).find(":selected").data('especialidad'));
            $("#med_especialidad").text($(this).find(":selected").data('especialidad'));
          });
        </script>
@endsection