@extends('layouts.template')

@section('title','Administrador')

@section('auxiliar')
<div class="nav-item d-none d-md-flex"> <a href="{{url('/administrador/nuevoUsuario')}}"
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
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Listado general de Usuarios</h3>
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
                          <td><a href="{!! url('/')!!}/{{$usuario->hospital_id}}/admin/editarUsuario/{{$usuario->id}}" class="text-inherit"> 
                            {{$usuario->nombres}} {{$usuario->apellidos}} <br>
                          </a></td>
                          <td>{{$usuario->username}}</td>
                          <td>{{$usuario->rol->nombre}}</td> 
                          <td> 
                      <label class="custom-switch">
                        <input name="optRol" value="5" class="custom-switch-input" @if($usuario->activo==1 ) checked @endif type="checkbox"> 
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
                data:{'search':$value,'id':{{$id}}},
                success:function(data){
                      $('tbody').html(data);
                }
            });
        })
  </script>
      @endsection
      @section('footer')
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                  </ul>
                  <a href="./faq.html">Manual de usuario</a>
                  <ul class="list-inline list-inline-dots mb-0">
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">TELEFILA
                SAC © Todos los derechos reservados</p>
              <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Av.
                Joaquín Madrid 277 piso 2, San Borja T. 014750467</p>
              <p style="margin: 0px; padding: 0px; border-width: 0px; border-style: solid; border-color: transparent; transform-origin: left top 0px; background-repeat: no-repeat; max-height: 1e+06px; color: rgb(127, 127, 127); font-family: droid-sans, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">info@avtiva.com</p>
            </div>
          </div>
        </div>
      </footer>
    @endsection

    
  
