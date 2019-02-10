@extends('layouts.template')
@section('title','Consultorios')
@section('buscar','consultorios')



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
              <div class="col-12" >
              @if(session('message'))
                <div class="alert alert-success form-group text-center" id="msg" role="alert">
                  {{session('message')}}
                </div>
              @endif
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Listado de consultorios </h3>
                  </div>

                   @if ($consultorios->isEmpty())
                    <br>
                      <center><h4>No tiene Consultorios registrados.</h4></center>
                    <br>
                  @else
                    <div class="table-responsive">
                      <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                          <tr>
                            <th class="w-1">Nro.</th>
                            <th class="w-1">CONSULTORIO</th>
                            <th class="w-1">ESPECIALIDAD</th>
                            <th class="w-1">FECHA</th>
                            <th class="w-1">INICIO</th>
                            <th class="w-1">FINAL</th>
                            <th class="w-1">USUARIO</th>
                            <th class="w-1">RESERVADOS</th>
                            <th class="w-1">PAGADOS</th>
                            <th class="w-1">DISPONIBILIDAD</th>
                            <th class="w-1">PEDESTAL</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($consultorios as $key=>$consultorio )
                            <tr>
                              @if($consultorio->agenda_id)
                                  <td><span class="text-muted">{{$consultorio->id}}</span></td>
                                  <td>
                                    <a href="{{url('administrador/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br></a>
                                  </td>
                                  <td>{{$consultorio->especialidad->nombre}}</td>
                                  <td>{{$consultorio->fecha}}</td>
                                  <td>{{date("g:i a", strtotime($consultorio->inicio)) }}</td>
                                  <td>{{date("g:i a", strtotime($consultorio->final)) }}</td>
                                  <td>{{$consultorio->user->username}}</td>

                                  <td style="text-align: center;"><strong>{{$consultorio->reservados}}/{{$consultorio->turnos}}</strong></td>
                                  <td style="text-align: center;"><strong>{{$consultorio->pagados}}</strong></td>
                                  <td style="padding-left: 23px">
                                      @if($consultorio->turnos===null)
                                        <span class="badge badge-dark">
                                      @elseif($consultorio->turnos - $consultorio->reservados < 5 )
                                        <span class="badge badge-danger">
                                      @elseif($consultorio->turnos - $consultorio->reservados <= 10 )
                                        <span class="badge badge-warning">
                                      @else
                                        <span class="badge badge-success">
                                      @endif

                                      @if($consultorio->turnos != 0)
                                        {{ 100-($consultorio->reservados*100) / $consultorio->turnos }} %
                                      @endif
                                  </span> </td>
                                  <td>
                                  <label class="custom-switch">
                                    <input   name="optRol" value="{{$consultorio->id}}" class="custom-switch-input" onchange="cambiarEstado(this.value)" {{ $consultorio->pedestal==1 ? 'checked' :''}} type="checkbox">
                                    <span class="custom-switch-indicator"></span>
                                  </label>
                                  </td>
                              @else

                              <td><span class="text-muted">{{$consultorio->id}}</span></td>
                              <td>
                                <a href="{{url('administrador/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br></a>
                              </td>
                              <td>{{$consultorio->especialidad->nombre}}</td>
                              <td colspan="3"> Consultorio sin medico asignado* </td>

                              <td>{{$consultorio->user->username}}</td>
                              <td colspan="4"></td>
                              @endif
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                  @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
    <script>
       $('#msg').delay(8000).hide(600);
       $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{URL::to("searchConsultorio")}}',
                data:{'search':$value},
                success:function(data){
                      $('tbody').html(data);
                }
            });
        })
    </script>
  @endsection
