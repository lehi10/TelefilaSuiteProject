@extends('layouts.baseSimple')

@section('title','Nuevo Consultorio')

@section('body')
  <div class="page">
    <div class="page-single">
      <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <u1>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </u1>
            </div>
        @endif
        <div class="row">
          <div class="col col-login mx-auto">
            <div style="text-align: center;"><img src="/demo/photos/logo_alpha.png" alt="logo" title="logo"><br><br>
            </div>
            <form class="card" action="/administrador/crearConsultorio" method="post">

              {{csrf_field()}}
              <div class="card-body p-6">
                <div class="card-title">Crear Nuevo Consultorio</div>
                <div class="form-group"><input name="nombre" class="form-control" placeholder="Nombre del consultorio" type="text"></div>
                <div class="form-group">
                  <div class="form-group"> <label class="form-label">Especialidad</label>
                    <select name="especialidad_id" id="select-users" class="form-control custom-select">
                      @foreach($especialidades as $especialidad)
                      <option value="{{$especialidad->id}}" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">{{$especialidad->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <label class="form-label">Usuario Administrador</label>
                  <select name="user_id" id="select-countries" class="form-control custom-select">
                    @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}" data-data="{&quot;image&quot;: &quot;./assets/images/flags/br.svg&quot;}">{{$usuario->nombres}} {{$usuario->apellidos}}</option>
                    @endforeach
                    
                  </select>
                </div>
                <div class="form-group"><label class="custom-control custom-checkbox"><input

                      class="custom-control-input" type="checkbox" name="pedestal"> <span class="custom-control-label">Activar
                      Pedestal<br>
                    </span></label></div>
                <div class="form-footer"> <button type="submit" class="btn btn-primary btn-block">CREAR
                    CONSULTORIO&nbsp;</button> </div>
              </div>
            </form>
            <div class="text-center text-muted"><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection