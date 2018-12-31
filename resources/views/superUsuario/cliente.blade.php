
@extends('layouts.template')

@section('title','Hospital')

@section('scripts')
<script>
$('#msg').delay(8000).hide(600);
function cambiarEstado(id) {
  
  $.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: '/administrador/cambiarEstadoUsuario', // This is the url we gave in the route
    data: {'idUsuario' : id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        console.log(response); 
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
  });
}

$('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{URL::to('cliente/search')}}',
                data:{'search':$value,'id':{{$hospital_id}}},
                success:function(data){
                      $('tbody').html(data);
                }
            });
        })
</script>

@endsection

@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item slc"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>                                     
<li class="nav-item"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>     
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>                                                                                                                         
<li class="nav-item"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>                                                                               
@endsection


@section('buscar','usuarios')

@section('auxiliar')
<div class="nav-item d-none d-md-flex"> 
  <a href="{{url('/superuser/'.$hospital_id.'/nuevoUser')}}"class="btn btn-sm btn-outline-primary">
      Agregar  Usuario
  </a> 
</div>
@endsection

    
        @section('body')
        <div class="my-3 my-md-5">    
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
                    <h3 class="card-title">Listado general de Usuarios del hospital: {{$nombre}}</h3>
                  </div>              
              @if ($usuarios->isEmpty())
                    <br>
                      <center><h4>No tiene Usuarios registrados.</h4></center>
                    <br>
              @else
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">Nro.</th><th>NOMBRE</th><th>USUARIO</th><th>ROL</th><th>ACTIVO</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($usuarios as $usuario)
                        <tr>
                          <td><span class="text-muted">{{$usuario->id}}</span></td>
                          <td><a href="{{url('superuser/'.$usuario->id.'/user')}}" class="text-inherit"> 
                            {{$usuario->nombres}} {{$usuario->apellidos}} <br>
                          </a></td>
                          <td>{{$usuario->username}}</td>
                          <td>{{$usuario->rol->nombre}}</td> 
                          <td><label class="custom-switch">
                              <input name="optRol" value="{{$usuario->id}}" class="custom-switch-input" onchange="cambiarEstado(this.value)" @if($usuario->estado==1 ) checked @endif type="checkbox"> 
                              <span class="custom-switch-indicator"></span> 
                              </label>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>                        
                  @endif
                  {{-- $usuarios->links() --}}
               
                </div>
              </div>
            </div>
          </div>
        </div>
     
      @endsection
    

    
  
