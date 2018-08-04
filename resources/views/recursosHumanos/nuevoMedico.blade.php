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
            <form class="card" action="/recursosHumanos/crearMedico" method="post">

            {{csrf_field()}}
            <div class="card-body p-6">
                <div class="card-title">Crear Nuevo Médico</div>
                <div class="form-group"><input id="nombre_me" class="form-control" placeholder="Nombres completos" name="nombres"
                    type="text" required></div>
                <div class="form-group"><input id="apellido_me" class="form-control" placeholder="Apellidos completos" name="apellidos"
                    type="text" required></div>
                <div class="form-group"><input id="cmd" class="form-control" placeholder="N° CMP" name="cmp"
                    type="text" required></div>
                <div class="form-group"><input id=""class="form-control" placeholder="Celular" name="celular"
                    type="text"required  minlength="9" ></div>
                <div class="form-group">
                <select name="especialidad_id" class="form-control custom-select">
                    &nbsp;
                    @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">{{$especialidad->nombre}}</option>
                    @endforeach
                    
                </select>
                <br>
                @if($errors->any())
                <br>
                <div class="alert alert-danger">
                    <u1>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </u1>
                </div>
            @endif
                <b><br>
                    Tuno</b><br>
                <div class="custom-switches-stacked"> 

                    <label class="custom-switch">
                        <input name="turno" value="1" class="custom-switch-input" checked="checked" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Mañana</span> </label>
                    <label class="custom-switch">
                        <input name="turno" value="2" class="custom-switch-input" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Tarde</span> </label>
                    <label class="custom-switch">
                        <input name="turno" value="3" class="custom-switch-input" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Noche</span>&nbsp;</label>

                </div>
                </div>

                <div class="form-footer"> 
                <button type="submit" class="btn btn-primary btn-block">CREAR MEDICO&nbsp;</button>
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