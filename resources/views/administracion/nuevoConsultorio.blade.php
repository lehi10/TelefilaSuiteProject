@extends('layouts.baseSimple')


@section('body')
  <div class="page">
    <div class="page-single">
      <div class="container">
        <div class="row">
          <div class="col col-login mx-auto">
            <div style="text-align: center;"><img src="/demo/photos/logo_alpha.png" alt="logo" title="logo"><br><br>
            </div>
            <form class="card" action="" method="post">
              <div class="card-body p-6">
                <div class="card-title">Crear Nuevo Consultorio</div>
                <div class="form-group"><input class="form-control" placeholder="Nombre del consultorio" type="text"></div>
                <div class="form-group">
                  <div class="form-group"> <label class="form-label">Especialidad</label>
                    <select name="user" id="select-users" class="form-control custom-select">
                      <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Medicina
                        General</option>
                      <option value="2" data-data="{&quot;image&quot;: &quot;/demo/faces/male/41.jpg&quot;}">Pediatria</option>
                      <option value="3" data-data="{&quot;image&quot;: &quot;/demo/faces/female/1.jpg&quot;}">Cardiología</option>
                      <option value="4" data-data="{&quot;image&quot;: &quot;/demo/faces/female/18.jpg&quot;}">Cirugia</option>
                      <option value="5" data-data="{&quot;image&quot;: &quot;/demo/faces/male/16.jpg&quot;}">Dental</option>
                      <option value="6" data-data="{&quot;image&quot;: &quot;/demo/faces/male/26.jpg&quot;}">Ginecología</option>
                      <option value="7" data-data="{&quot;image&quot;: &quot;/demo/faces/female/7.jpg&quot;}">Medicina
                        Interna</option>
                      <option value="8" data-data="{&quot;image&quot;: &quot;demo/faces/female/17.jpg&quot;}">Nutrición</option>
                      <option value="9" data-data="{&quot;image&quot;: &quot;demo/faces/male/30.jpg&quot;}">Obstetricia</option>
                      <option value="10" data-data="{&quot;image&quot;: &quot;demo/faces/male/32.jpg&quot;}">Oftalmología</option>
                      <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Pediatria</option>
                    </select>
                  </div>
                  <label class="form-label">Usuario Administrador</label>
                  <select name="country" id="select-countries" class="form-control custom-select">
                    <option value="br" data-data="{&quot;image&quot;: &quot;./assets/images/flags/br.svg&quot;}">usuario
                      1</option>
                    <option value="cz" data-data="{&quot;image&quot;: &quot;./assets/images/flags/cz.svg&quot;}">usuario
                      2</option>
                    <option value="de" data-data="{&quot;image&quot;: &quot;./assets/images/flags/de.svg&quot;}">usuario
                      3</option>
                    <option value="pl" data-data="{&quot;image&quot;: &quot;./assets/images/flags/pl.svg&quot;}"

                      selected="selected">usuario 4</option>
                  </select>
                </div>
                <div class="form-group"><label class="custom-control custom-checkbox"><input

                      class="custom-control-input" type="checkbox"> <span class="custom-control-label">Activar
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