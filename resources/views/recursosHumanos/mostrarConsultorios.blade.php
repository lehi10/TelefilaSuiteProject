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
                            <th class="w-1">Cod</th>
                            <th class="w-1">CONSULTORIO</th>
                            <th class="w-1">ESPECIALIDAD</th>
                            <th class="w-1">MEDICO</th>
                            <th class="w-1">PEDESTAL</th>
                            <th class="w-1">VER</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($consultorios as $key=>$consultorio )
                            <tr>

                                  <td><span class="text-muted">{{$consultorio->id}}</span></td>
                                  <td>
                                    <a href="{{url('recursosHumanos/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br></a>
                                  </td>
                                  <td>{{$consultorio->especialidad->nombre}} </td>
                                  @if(isset($consultorio->medico))
                                    <td>{{$consultorio->medico->apellidos}} ,{{$consultorio->medico->nombres}}</td>
                                  @else
                                    <td><i>No se asignó a un medico</i></td>
                                  @endif


                                  <td>
                                  <label class="custom-switch">
                                    <input   name="optRol" value="{{$consultorio->id}}" class="custom-switch-input" onchange="cambiarEstado(this.value)" {{ $consultorio->pedestal==1 ? 'checked' :''}} type="checkbox">
                                    <span class="custom-switch-indicator"></span>
                                  </label>
                                  </td>
                                  <td>
                                    @if(isset($consultorio->medico))
                                    <a href="{{url('recursosHumanos/'.$consultorio->id.'/consultorio/turnos')}}" class="text-inherit">
                                      <button type="button" class="btn btn-primary btn-sm">Ver</button>
                                    </a>
                                    @else
                                      No se puede ver
                                    @endif

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
