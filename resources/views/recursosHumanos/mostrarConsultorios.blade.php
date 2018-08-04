@extends('layouts.template')
@section('title','Consultorios')
@section('buscar','consultorios')



@section('body')

<script>
  $('#msg').delay(5000).hide(600);

// function cambiarEstado(id) {
  
//   $.ajax({
//     method: 'GET', // Type of response and matches what we said in the route
//     url: '/administrador/cambiarEstadoConsultorio', // This is the url we gave in the route
//     data: {'idConsultorio' : id}, // a JSON object to send back
//     success: function(response){ // What to do if we succeed
//         console.log(response); 
//     },
//     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
//         console.log(JSON.stringify(jqXHR));
//         console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
//     }
// });
// }

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
              <div class="col-12">
              @if(session('message'))
              <div id="msg" class="alert alert-success form-group text-center" role="alert">
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
                          @foreach($consultorios as $key=>$consultorio)  
                            <tr>
                              <td><span class="text-muted">{{$consultorio->id}}</span></td>
                              <td><a href="{{url('recursosHumanos/'.$consultorio->id.'/consultorio')}}" class="text-inherit">{{$consultorio->nombre}}<br>
                                </a></td>
                              <td>{{$consultorio->especialidad->nombre}}</td>
                              <td>{{$consultorio->user->username}}</td>
                              @if ($agendas[$key])
                                <td style="text-align: center;"><strong>{{$agendas[$key]}}</strong></td>
                                <td style="padding-left: 23px">    <span class="badge badge-success">100%</span> </td>
                              @else
                                <td style="text-align: center;">NM</td>
                                <td style="padding-left: 23px">   <span class="badge badge-danger">0%</span> </td>
                              @endif
                              <td> 
                              <label class="custom-switch">
                                <input   name="optRol" value="{{$consultorio->id}}" class="custom-switch-input" onchange="cambiarEstado(this.value)" {{ $consultorio->pedestal==1 ? 'checked' :''}} type="checkbox" disabled> 
                                <span class="custom-switch-indicator" ></span> 
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
  
  
