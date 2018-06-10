@extends('layouts.base')

@section('title','Nuevo Usuario')

@section('auxiliar')
<div class="nav-item d-none d-md-flex"> <a href="{{url('/superuser/'.$hospital_id.'/nuevoUser')}}"
                            class="btn btn-sm btn-outline-primary">Agregar
                            usuario</a> 
</div>
@endsection

@section('body')
<div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              
              <form class="card" action="/superuser/nuevoUser" method="post">
                {{csrf_field()}}
                <div class="card-body p-6">
                  <div class="card-title">Crear nuevo usuario</div>
                  <div class="form-group"><input class="form-control" placeholder="Nombres" name="nombres"

                      type="text" onkeyup="funcion()" id="nombre"><br>
                      <input class="form-control"  id="apellido" placeholder="Apellidos" name="apellidos" onkeyup="funcion()"

                      type="text" ><br>
                    <input type="hidden" name="hospital_id" value="{{$hospital_id}}">
                    <input class="form-control" id="username" name="username" 

                      placeholder="Disabled.." value="usuario autogenerado"

                       type="text" readonly> </div>
                  <div class="form-group"><input class="form-control" name="password" placeholder="Clave"

                      type="password"> </div>
                  <div class="form-group"> <label class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="estado" type="checkbox"> <span

                        class="custom-control-label">Iniciar en estado ACTIVO.</span></label></div>
                  <div class="form-group"><b>¿Que ROL desempeñará?</b><br>
                    <div class="custom-switches-stacked"> <label class="custom-switch">
                        <input name="rol_id" value="3" class="custom-switch-input"

                          checked="checked" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Control de caja</span>
                      </label> <label class="custom-switch"> <input name="rol_id"

                          value="4" class="custom-switch-input" type="radio"> <span

                          class="custom-switch-indicator"></span> <span class="custom-switch-description">Admisión</span>
                      </label> <label class="custom-switch"> <input name="rol_id"

                          value="5" class="custom-switch-input" type="radio"> <span

                          class="custom-switch-indicator"></span> <span class="custom-switch-description">Recursos
                          Humanos</span> </label><label class="custom-switch">
                        <input name="rol_id" value="6" class="custom-switch-input"

                          type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Histórias
                          Clínicas</span> </label> </div>
                  </div>
                  <div class="form-footer"> <button type="submit" class="btn btn-primary btn-block">CREAR
                      NUEVO&nbsp;</button> </div>
                </div>
              </form>
              <div class="text-center text-muted"><br>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        function funcion()
        {
          var a=document.getElementById('nombre').value;
          var b=document.getElementById('apellido').value;
          var c=(a+" "+b).split(" ").filter(function(e){return e});
          //console.log(c);
          var nombre=''
          c.forEach(element => {
            nombre+=element.slice(0,2);
          });
          //console.log(nombre);
          document.getElementById('username').value=nombre.toLowerCase();

        }
      </script>
@endsection

