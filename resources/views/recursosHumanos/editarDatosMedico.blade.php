@extends('layouts.baseSimple')
@section('title','Crear Médico')
@section('body')
<script src="/assets/js/scripts.js"></script>
<div class="page">
    <div class="page-single">
    <div class="container">

        <div class="row">
        <div class="col col-login mx-auto">
            <div style="text-align: center;"><img src="/demo/photos/logo_alpha.png"
                alt="logo" title="logo"><br>
            <br>
            </div>
            <form class="card" action="/recursosHumanos/grabarCambiosDatosMedico" method="post">
              {{csrf_field()}}
              <div class="card-body p-6">
                  <div class="card-title">Editar datos del Nuevo Médico</div>
                  <div class="form-group">
                    <input id="codigoMedico" class="form-control" value="{{$medico->id}}" name="idMedico" type="text" required readonly="readonly"></div>
                  <label class="form-group">Nombres:</label>
                  <div class="form-group"><input id="nombre_me" class="form-control" value="{{$medico->nombres}}" name="nombres"
                      type="text" required></div>
                  <label class="form-group">Apellidos:</label>
                  <div class="form-group"><input id="apellido_me" class="form-control" value="{{$medico->apellidos}}" name="apellidos"
                      type="text" required></div>
                  <label class="form-group">N° CMP:</label>
                  <div class="form-group"><input id="cmd" class="form-control" value="{{$medico->cmp}}" name="cmp"
                      type="text" required></div>
                  <label class="form-group">Celular:</label>
                  <div class="form-group"><input id=""class="form-control" value="{{$medico->celular}}" name="celular"
                      type="text"required  minlength="9" ></div>
                  <div class="form-group">

                    <label class="form-group">Especialidad:</label>
                    <input id="especialidad" class="form-control" value="{{$medico->especialidad->nombre}}" name="especialidad" type="text" required readonly="readonly"></div>
                    <label class="form-group">Turno:</label>
                    <div class="custom-switches-stacked">
                      <label class="custom-switch">
                          <input name="turno" value="1" class="custom-switch-input" @if($medico->turno==1) checked="checked" @endif  type="radio"> <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description">Mañana</span> </label>
                      <label class="custom-switch">
                          <input name="turno" value="2" class="custom-switch-input" @if($medico->turno==2) checked="checked" @endif type="radio"> <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description">Tarde</span> </label>
                      <label class="custom-switch">
                          <input name="turno" value="3" class="custom-switch-input" @if($medico->turno==3) checked="checked" @endif type="radio"> <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description">Noche</span>&nbsp;</label>
                        </div>
                  </div>

                  <div class="form-footer">
                  <button type="submit" class="btn btn-primary btn-block">ACEPTAR CAMBIOS&nbsp;</button>
                  </div>
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
