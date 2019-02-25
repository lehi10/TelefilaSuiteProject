@extends('layouts.base')

@section('title','Caja')

@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>
<li class="nav-item"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item slc"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>
<li class="nav-item"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>
@endsection


<script>$('#msg').delay(8000).hide(600);</script>

@section('body')
        <div class="my-3 my-md-5">
          <div class="container form-group" style="width : 50%; margin: auto; ">
          {{ Form::open(array('url' => 'caja','method' => 'get','class'=>'input-icon my-3 my-lg-0')) }}
              {!! csrf_field() !!}
              <div class="input-group">
              <input name="citaID" class="form-control" placeholder="Código de Ticket" type="text">
                  <button style="margin-left:10px;" class="btn btn-primary" type="submit"><i class="fe fe-search"></i></button>
              </div>

            {{ Form::close() }}
          </div>
        <br>
          <div class="container">
            <div class="row row-cards"><br>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Listado general de Tickets de HOY</h3>
                  </div>
                  <div class="table-responsive">
                  @if(session('message'))
                  <div id="msg" class="alert alert-{{session('kind')}} form-group text-center" role="alert">
                      {{session('message')}}
                    </div>
                  @endif
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
                      @foreach ($citas as $cita)
                      <tr>
                          <td><span class="text-muted">{{$cita->id}}</span></td>
                          <td>{{$cita->nombres}} {{$cita->apellidos}}<br></td>
                          <td>{{$cita->consultorio_nombre}}</td>
                          <td>{{$cita->fecha}}</td>
                          <td style="width: 65px;">{{  date("g:i a",strtotime($cita->horaInicio))  }}<br>
                          </td>
                          @if($cita->pagado==0)
                          <!-- Trigger the modal with a button -->
                          <td style="margin-left:-13px;"><button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary">PAGAR&nbsp;</button></td>
                          <!-- Modal -->
                          <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Realizar Pago</h4>
                                  <button type="button" class="close" data-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Aceptar el pago realizado por el Paciente <b>{{$cita->nombres}} {{$cita->apellidos}}</b> del ticket de cita <b>{{$cita->id}}</b></p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default bg-red" data-dismiss="modal">Cancelar</button>
                                {{ Form::open(array('url' => 'caja/guardarPago','method' => 'post')) }}
                                  {!! csrf_field() !!}
                                  <input id="prodId" name="citaID" type="hidden" value="{{$cita->id}}">
                                  <button type="submit" class="btn btn-default bg-green" >Aceptar el Pago</button>
                                {{ Form::close() }}
                                </div>
                              </div>
                            </div>
                          </div>
                          @else
                            <td style="margin-left: -13px;"><button type="submit" class="btn btn-primary btn-block bg-green">PAGADO&nbsp;</button></td>
                          @endif
                          {{ Form::open(array('url' => 'caja/eliminarTicket','id'=>'eliminarTicket','method' => 'post')) }}
                            <input id="prodId" name="citaID" type="hidden" value="{{$cita->id}}">
                            <td><a href="#" onclick="document.getElementById('eliminarTicket').submit()" class="icon"><i class="fe fe-trash"></i></a>
                          {{ Form::close() }}
                            <br>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
