@extends('layouts.base')

@section('title','Editar Cliente')

  @section('body')
<div class="my-3 my-md-5">
          <div class="container" >
            <div class="row row-cards"><br>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">&nbsp;&nbsp;&nbsp; <br>
                    <div class="my-3 my-md-5">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                          <form action="/superuser/updateClient/{{$hospital->id}}" method="post" class="card" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="card-header">
                                  <h3 class="card-title">Editando Datos</h3>
                              </div>
                              <div class="card-body" >
                                  <div class="row" >
                                      <div class="col-md-6 col-lg-4" >
                                          <div class="form-group" >
                                              <label class="form-label">USUARIO</label>
                                              <div class="input-group" >
                                                  <span class="input-group-prepend" id="basic-addon1">
                                                      <span class="input-group-text">@</span>
                                                  </span>
                                                  <input id="user" class="form-control" required="" placeholder="Usuario" type="text" name="usuario" value = "{{$usuario->username}}" readonly>
                                              </div>
                                              <div id="v_user" style="color:red;" ></div>
                                              <br>
                                              <input id="psw" class="form-control" name="password" placeholder="Clave" type="password" >
                                              <div id="v_psw" style="color:red;" ></div><br>
                                              <b>INFORMACIÓN DEL CLIENTE </b>
                                              <input  id="name_hosp" class="form-control" required="" name="nombre" placeholder="Nombre del Hospital / Clinica " type="text" value = "{{$hospital->nombre}}">
                                              <div id="v_name_hosp" style="color:red;" ></div>
                                              <br>
                                              <input id="ruc" class="form-control " required="" name="ruc" placeholder="RUC" type="text" value = "{{$hospital->ruc}}">
                                              <div id="v_ruc" style="color:red;" ></div>
                                              <br>
                                              <input id="telf_hosp" class="form-control" required="" name="telefono" placeholder="Telefono" type="text" value = "{{$hospital->telefono}}">
                                              <div id="v_telf_hosp" style="color:red;" ></div>
                                              <div class="form-group" >
                                              <b>PERSONA DE CONTÁCTO</b>
                                                  <br>
                                                  <input  id="name_per" class="form-control" required="" name="nombrePersona" placeholder="Nombres y Apellidos" type="text" value = "{{$hospital->nombrePersona}}">
                                                  <div id="v_name_per" style="color:red;" ></div>
                                                  <br>
                                                  <input id="email_per" class="form-control" required="" placeholder="Correo electrónico" name="emailPersona" type="text" value = "{{$hospital->emailPersona}}">
                                                  <div id="v_email_per" style="color:red;" ></div>
                                                  <br>
                                                  <input id="telf_per" class="form-control" required="" placeholder="Celular" type="text" name="celularPersona" value = "{{$hospital->celularPersona}}">

                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-4" >
                                          <div class="form-group" >
                                            <b>UBICACIÓN GEOGRÁFICA</b>
                                              <br>
                                              <input id="direc_hosp" class="form-control" required=""  name="direccion" placeholder="Dirección Completa" type="text" value = "{{$hospital->direccion}}">
                                              <div id="v_direc" style="color:red;" ></div><br>
                                              <input id="ciudad" class="form-control" required="" name="ciudad" placeholder="Ciudad" type="text" value = "{{$hospital->ciudad}}">
                                              <div id="v_ciudad" style="color:red;" ></div><br>
                                              <input id="refer" class="form-control" name="referencia" placeholder="Referencia" type="text" value = "{{$hospital->referencia}}">
                                              <br>
                                              <select class="form-control custom-select" required="" name="region" value = "{{$hospital->region}}">
                                                  <option value="Amazonas">Amazonas</option>
                                                  <option value="Anacash">Áncash</option>
                                                  <option value="Apurimac">Apurímac</option>
                                                  <option value="Arequipa">Arequipa</option>
                                                  <option value="Ayacucho">Ayacucho</option>
                                                  <option value="Cajamarca">Cajamarca</option>
                                                  <option value="Callao">Callao</option>
                                                  <option value="Cuzco">Cuzco</option>
                                                  <option value="Huancavelica">Huancavelica</option>
                                                  <option value="Huanuco">Huánuco</option>
                                                  <option value="Ica">Ica</option>
                                                  <option value="Junin">Junín</option>
                                                  <option value="La Libertad">La Libertad</option>
                                                  <option value="Loreto">Loreto</option>
                                                  <option value="Lambayeque">Lambayeque</option>
                                                  <option value="Lima Metropolitana">Lima metropolitana</option>
                                                  <option value="Lima Region">Lima Región</option>
                                                  <option value="Madre de Dios">Madre de Dios</option>
                                                  <option value="Moquegua">Moquegua</option>
                                                  <option value="Pasco">Pasco</option>
                                                  <option value="Piura">Piura</option>
                                                  <option value="Puno">Puno</option>
                                                  <option value="San Martín">San Martín</option>
                                                  <option value="Tacna">Tacna</option>
                                                  <option value="Tumbes">Tumbes</option>
                                                  <option value="Ucayali">Ucayali</option>
                                              </select>
                                              <label class="selectgroup-item">
                                                  <br>
                                              </label>
                                            <br>
                                            <b>FOTO / LOGOTIPO<br></b>
                                              <div class="form-group">
                                                  <div class="custom-file">
                                                      <input class="custom-file-input" name="logo" type="file" accept = ".jpg,.jpeg,.png" id="logo-upload">
                                                      <label class="custom-file-label" for="logo-upload" id="logo-upload">{{$hospital->logo}}</label>
                                                  </div>
                                                  @if(isset($hospital->logo))
                                                  <div style="padding-top:10px">
                                                    <input type="button" class="btn btn-primary btn-sm" value="Ver" onclick="window.open('/archivos/{{$hospital->codigo}}/{{$hospital->logo}}')" >
                                                    <input type="button" class="btn btn-danger btn-sm" value="Eliminar" id="btnEliminarLogo" >
                                                  </div>

                                                  @endif


                                              </div>
                                              <b> CONTRATOS</b>
                                              <div class="custom-file">
                                                  <input class="custom-file-input" name="contratos" type="file" value = "" accept=".pdf ,.docx, .odt" id="contratos-upload">
                                                  <label class="custom-file-label" for="contros-upload" id="contratos-label">{{$hospital->contratos}} </label>
                                              </div>

                                              @if(isset($hospital->contratos))
                                              <div style="padding-top:10px">
                                                <input type="button" class="btn btn-primary btn-sm" value="Ver" onclick="window.open('/archivos/{{$hospital->codigo}}/{{$hospital->contratos}}')" >
                                                <input type="button" class="btn btn-danger btn-sm" value="Eliminar" id="btnEliminarContratos" >
                                              </div>

                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-4" >

                                          <div class="form-group" >
                                              <b>FECHA DE INICIO DE OPERACIÓN</b>

                                              <div class="row gutters-xs">
                                                  <div class="col-5">
                                                  <select name="mes" class="form-control custom-select" disabled="disabled" value = "{{$hospital->mes}}">
                                                          <option value="1">Enero</option>
                                                          <option value="2">Febrero</option>
                                                          <option value="3">Marzo</option>
                                                          <option value="4">Abril</option>
                                                          <option value="5">Mayo</option>
                                                          <option value="6">Junio</option>
                                                          <option value="7">Julio</option>
                                                          <option value="8">Augosto</option>
                                                          <option value="9">Setiembre</option>
                                                          <option value="10">Octubre</option>
                                                          <option value="11">Noviembre</option>
                                                          <option value="12">Diciembre</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-3">
                                                  <select name="dia" class="form-control custom-select" disabled="disabled" value = "{{$hospital->dia}}">

                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          <option value="6">6</option>
                                                          <option value="7">7</option>
                                                          <option value="8">8</option>
                                                          <option value="9">9</option>
                                                          <option value="10">10</option>
                                                          <option value="11">11</option>
                                                          <option value="12">12</option>
                                                          <option value="13">13</option>
                                                          <option value="14">14</option>
                                                          <option value="15">15</option>
                                                          <option value="16">16</option>
                                                          <option value="17">17</option>
                                                          <option value="18">18</option>
                                                        Function  <option value="19">19</option>
                                                          <option  value="20">20</option>
                                                          <option value="21">21</option>
                                                          <option value="22">22</option>
                                                          <option value="23">23</option>
                                                          <option value="24">24</option>
                                                          <option value="25">25</option>
                                                          <option value="26">26</option>
                                                          <option value="27">27</option>
                                                          <option value="28">28</option>
                                                          <option value="29">29</option>
                                                          <option value="30">30</option>
                                                          <option value="31">31</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-4">

                                                  <select name="year" class="form-control custom-select" disabled="disabled" value = "{{$hospital->year}}">

                                                          <option value="2019">2019</option>
                                                          <option value="2018">2018</option>
                                                          <option value="2017">2017</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          <br>
                                              <b>TARIFA POR OPERACIÓN</b>
                                              <div class="input-group">
                                                  <span class="input-group-prepend">
                                                        <span class="input-group-text">S/.</span>
                                                  </span>
                                                  <input id="tari" class="form-control text-right" type="number" step="0.01" aria-label="" name="tarifa" value = "{{$hospital->tarifa-0}}" type="text">
                                                  <span class="input-group-append">
                                                        <span class="input-group-text">PE</span>
                                                  </span>
                                              </div>
                                          <div id="v_tari" style="color:red;" ></div><br>
                                          <b>ESTADO</b>
                                              <div class="custom-switches-stacked">
                                                  <label class="custom-switch">
                                                      <input name="estado" value="1" class="custom-switch-input" @if($hospital->estado==1 ) checked @endif type="radio" checked> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">En implementación</span>
                                                  </label>
                                                  <label class="custom-switch">
                                                      <input name="estado" value="2" class="custom-switch-input" @if($hospital->estado==2 ) checked @endif type="radio"> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">Operando</span>
                                                  </label>
                                                  <label class="custom-switch">
                                                      <input name="estado" value="3" class="custom-switch-input" @if($hospital->estado==3 ) checked @endif type="radio"> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">Suspención temporal</span>
                                                  </label>
                                              </div>
                                          <br>
                                          <b>LICENSAMIENTO</b>
                                          <label class="custom-switch">
                                              <input name="licenciamento" class="custom-switch-input" type="checkbox">
                                              <span class="custom-switch-indicator"></span>
                                              <span class="custom-switch-description">Ha adquirido una licencia anual ó similar.</span>
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                              <div class="card-footer text-right">
                                  <div class="d-flex" style="text-align: center;">
                                      <dl>
                                          <dt> <a href="{{url('superuser/')}}" class="btn btn-primary">Cancelar</a>
                                              <button id="guardar" type="submit" class="btn btn-primary ml-auto">Guardar cambios</button>
                                          </dt>
                                      </dl>
                                  </div>
                              </div>
                          </form>
                          </div>
                        <div class="col-lg-4">
                          <script>require(['input-mask'])</script>
                          <script src="/assets/js/scripts.js"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('scriptsOnFooter')
<script type="application/javascript">
$('#logo-upload').change(function(event){
    var fileName = event.target.files[0].name;
    if (event.target.nextElementSibling!=null){
        event.target.nextElementSibling.innerText=fileName;
    }
});
$('#contratos-upload').change(function(event){
    var fileName = event.target.files[0].name;
    if (event.target.nextElementSibling!=null){
        event.target.nextElementSibling.innerText=fileName;
    }
});
</script>

<script>



  document.getElementById("btnEliminarLogo").addEventListener("click", deleteLogo);

   function deleteLogo () {
    $.ajax({
               type:'GET',
               url:'/superuser/archivos/eliminar',
               data: {
                  "_token": "{{ csrf_token() }}",
                  'clientCode': '{{$hospital->codigo}}',
                  'fileName': '{{$hospital->logo}}' ,
                  'clientId': '{{$hospital->id}}',
                  'typeDoc': 'logo'
                },
                dataType: 'json',
               success: function(d){
                  alert(d.status); //will alert ok
                }
            });
  }

</script>

<script>
document.getElementById("btnEliminarContratos").addEventListener("click", deleteContrat);


   function deleteContrat () {
    $.ajax({
              type:'GET',
              url:'/superuser/archivos/eliminar',
              data: {
                  "_token": "{{ csrf_token() }}",
                  'clientCode': '{{$hospital->codigo}}',
                  'fileName': '{{$hospital->contratos}}' ,
                  'clientId': '{{$hospital->id}}',
                  'typeDoc': 'contrato'
               },
               dataType: 'json',
              success: function(d){
                 alert(d.status); //will alert ok
               }
            });
  }
</script>



@endsection
