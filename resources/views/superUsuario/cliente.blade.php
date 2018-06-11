@extends('layouts.template')

@section('title','Hospital')
@section('buscar','usuarios')

@section('auxiliar')
<div class="nav-item d-none d-md-flex"> <a href="{{url('/superuser/'.$hospital_id.'/nuevoUser')}}"
                            class="btn btn-sm btn-outline-primary">Agregar
                            usuario</a> 
</div>
@endsection

    
    
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
              <div class="col-12">
              @if(session('message'))
              <div class="alert alert-success form-group text-center" role="alert">
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
                          <th class="w-1">Nro.</th>
                          <th>NOMBRE</th>
                          <th>USUARIO</th>
                          <th>ROL</th>
                          <th>ACTIVO</th>
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
                          <td> 
                      <label class="custom-switch">
                        <input name="optRol" value="5" class="custom-switch-input" @if($usuario->estado==1 ) checked @endif type="checkbox"> 
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
      </div>
      <script type="text/javascript">
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
    

    
  
