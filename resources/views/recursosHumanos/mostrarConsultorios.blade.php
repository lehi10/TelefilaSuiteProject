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
                            <th class="w-1">USUARIO</th>
                            <th class="w-1">TURNOS </th>
                            <th class="w-1">DISPONIBILIDAD</th>
                            <th class="w-1">PEDESTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach($consultorios as $key=>$consultorio )  
                            <tr>
                              <td><span class="text-muted">{{$consultorio->id}}</span></td>
                              <td><a href="{{url('recursosHumanos/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br>
                                </a></td>                          
                              <td>{{$consultorio->especialidad->nombre}}</td>
                              <td>{{$consultorio->user->username}}</td>
                              @if ($agendas[$key])
                                <td style="text-align: center;"><strong>{{$agendas[$key]}}</strong></td>
                                <td style="padding-left: 23px"><span class="badge badge-success">100%</span> </td>
                              @else
                                <td style="text-align: center;">
                                  @if($consultorio->turno===1)
                                      Mañana 
                                  @elseif($consultorio->turno===2)
                                      Tarde
                                  @elseif($consultorio->turno===3)
                                      Noche
                                  @else 
                                    Ninguno
                                  @endif
                                </td>
                                <td style="padding-left: 23px">
                                    @if($consultorio->turnos>10)
                                    <span class="badge badge-success">  
                                @elseif($consultorio->turnos>5 and $consultorio->turnos<11)
                                    <span class="badge badge-warning">
                                @elseif($consultorio->turnos===null)
                                        <span class="badge badge-dark">
                                @else 
                                    <span class="badge badge-danger">
                                @endif
                                {{$consultorio->turnos}} %
                                </span> </td>
                              @endif
                              <td> 
                              <label class="custom-switch">
                                <input   name="optRol" value="{{$consultorio->id}}" class="custom-switch-input" onchange="cambiarEstado(this.value)" {{ $consultorio->pedestal==1 ? 'checked' :''}} type="checkbox"> 
                                <span class="custom-switch-indicator"></span> 
                              </label>
                              </td>
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
  
  
