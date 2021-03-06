@extends('layouts.template')
@section('title','Consultorios')
@section('buscar','consultorios')

@section('auxiliar')
<div class="nav-item d-none d-md-flex" >
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

<script>

function cambiarEstado(id) {

  $.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: '/administrador/cambiarEstadoConsultorio', // This is the url we gave in the route
    data: {'idConsultorio' : id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        console.log(response);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
}

</script>

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
                  <div style="margin-left: 50px; margin-top: 20px;">
                    <h4>CONSULTORIO : {{$datosConsultorio->nombre}}</h4>
                    <h5>Especialidad : {{$datosConsultorio->especialidad->nombre}}</h5>
                    <h5>Medico : {{$datosConsultorio->medico->apellidos}},{{$datosConsultorio->medico->nombres}}</h5>
                  </div>
                   @if ($consultorioTurnos->isEmpty())
                    <br>
                      <center><h4>No tiene Consultorios registrados.</h4></center>
                    <br>
                  @else
                    <div class="table-responsive">
                      <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                          <tr>
                            <th class="w-1">FECHA</th>
                            <th class="w-1">INICIO</th>
                            <th class="w-1">FINAL</th>
                            <th class="w-1">RESERVADOS</th>
                            <th class="w-1">PAGADOS</th>
                            <th class="w-1">DISPONIBILIDAD</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($consultorioTurnos as $key=>$consultorio )
                            <tr>
                              @if($consultorio->agenda_id)
                                  <td>{{date("d - M - Y", strtotime($consultorio->fecha)) }}</td>
                                  <td>{{date("g:i a", strtotime($consultorio->inicio)) }}</td>
                                  <td>{{date("g:i a", strtotime($consultorio->final)) }}</td>
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
                              @else

                              <td><span class="text-muted">{{$consultorio->id}}</span></td>
                              <td>
                                <a href="{{url('administrador/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br></a>
                              </td>
                              <td>{{$consultorio->especialidad->nombre}}</td>
                              <td colspan="3"> <i>Consultorio sin medico asignado* <i></td>

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
