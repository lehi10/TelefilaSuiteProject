@extends('layouts.base')

@section('title')
<title>Nuevo usuario</title>
@endsection

@section('body')
<div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div style="text-align: center;"><img src="/demo/photos/logo_alpha.png"

                  alt="logo" title="logo"><br>
                <br>
              </div>
              <form class="card" action="" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Crear nuevo usuario</div>
                  <div class="form-group"><input class="form-control" placeholder="Nombre completo"

                      type="text"><br>
                    <input class="form-control" name="example-disabled-input"

                      placeholder="Disabled.." value="usuario autogenerado"

                      disabled="disabled" type="text"> </div>
                  <div class="form-group"><input class="form-control" placeholder="Clave"

                      type="password"> </div>
                  <div class="form-group"> <label class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox"> <span

                        class="custom-control-label">Iniciar en estado ACTIVO.</span></label></div>
                  <div class="form-group"><b>¿Que ROL desempeñará?</b><br>
                    <div class="custom-switches-stacked"> <label class="custom-switch">
                        <input name="option" value="1" class="custom-switch-input"

                          checked="checked" type="radio"> <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Control de caja</span>
                      </label> <label class="custom-switch"> <input name="option"

                          value="2" class="custom-switch-input" type="radio"> <span

                          class="custom-switch-indicator"></span> <span class="custom-switch-description">Admisión</span>
                      </label> <label class="custom-switch"> <input name="option"

                          value="3" class="custom-switch-input" type="radio"> <span

                          class="custom-switch-indicator"></span> <span class="custom-switch-description">Recursos
                          Humanos</span> </label><label class="custom-switch">
                        <input name="option" value="3" class="custom-switch-input"

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
@endsection

