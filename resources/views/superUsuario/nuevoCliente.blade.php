@extends('layouts.base')

@section('title','Nuevo Cliente')


  
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
                          <form action="/superuser/store" method="post" class="card">
                              {{csrf_field()}}
                              <div class="card-header">
                                  <h3 class="card-title">Agregar Nuevo Cliente</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-6 col-lg-4">
                                          <div class="form-group">
                                              <label class="form-label">Usuario</label>

                                              <div class="input-group"><span class="input-group-prepend" id="basic-addon1"><span class="input-group-text">@</span>
                                                  </span>
                                                  <input class="form-control" placeholder="Usuario" type="text" name="usuario"> </div>
                                              &nbsp;
                                              <input class="form-control" name="password" placeholder="Clave" type="password">
                                              <br>
                                              <b>Nombre Comercial </b>
                                              <input class="form-control" name="nombre" placeholder="Nombre del Hospital / Clinica " type="text">
                                              <br>
                                              <div class="form-group">
                                                  <input class="form-control" name="ruc" placeholder="RUC" type="text"> </div>
                                              <div class="form-group">
                                                  <input class="form-control" name="telefono" placeholder="Telefono" type="text"> </div>

                                              <div class="form-group"><b>PERSONA DE
                                                                    CONTÁCTO</b>
                                                  <br>
                                                  <input class="form-control" name="nombrePersona" placeholder="Nombres y Apellidos" type="text"><span class="col-auto align-self-center"></span>
                                                  <br>
                                                  <input class="form-control" placeholder="Correo electrónico" name="emailPersona" type="text">
                                                  <br>
                                                  <input class="form-control" placeholder="Celular" type="text" name="celularPersona">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-4">
                                          <div class="form-group"><b>UBICACIÓN
                                                                  GEOGRÁFICA</b>
                                              <br>
                                              <input class="form-control" name="direccion" placeholder="Dirección Completa" type="text"><span class="col-auto align-self-center"></span><span class="col-auto align-self-center"></span>
                                              <input class="form-control" name="ciudad" placeholder="Ciudad" type="text">
                                          </div>
                                          <input class="form-control" name="referencia" placeholder="Referencia" type="text">
                                          <div class="form-group">&nbsp;
                                              <select class="form-control custom-select" name="region">
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
                                          </div>
                                          <div class="form-group"><b>Foto / logotipo<br>
                                                                </b>
                                              <div class="form-group">
                                                  <div class="custom-file">
                                                      <input class="custom-file-input" name="logo" type="file">
                                                      <label class="custom-file-label">Cargar imagen
                                                      </label>
                                                  </div>
                                              </div>
                                              <br>
                                              <label class="selectgroup-item"></label>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-4"><b> Contratos</b>
                                          <div class="form-group">
                                              <div class="custom-file">
                                                  <input class="custom-file-input" name="contratos" type="file">
                                                  <label class="custom-file-label">Cargar archivo
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label">Fecha de inicio de operaciones</label>
                                              <div class="row gutters-xs">
                                                  <div class="col-5">
                                                      <select name="mes" class="form-control custom-select">
                                                          <option value="">Mes</option>
                                                          <option value="1">Enero</option>
                                                          <option value="2">Febrero</option>
                                                          <option value="3">Marzo</option>
                                                          <option value="4">Abril</option>
                                                          <option value="5">Mayo</option>
                                                          <option selected="selected" value="6">Junio</option>
                                                          <option value="7">Julio</option>
                                                          <option value="8">Augosto</option>
                                                          <option value="9">Setiembre</option>
                                                          <option value="10">Octubre</option>
                                                          <option value="11">Noviembre</option>
                                                          <option value="12">Diciembre</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-3">
                                                      <select name="dia" class="form-control custom-select">
                                                          <option value="">Day</option>
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
                                                          <option value="19">19</option>
                                                          <option selected="selected" value="20">20</option>
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
                                                      <select name="year" class="form-control custom-select">
                                                          <option value="">Año</option>
                                                          <option value="2019">2019</option>
                                                          <option value="2018">2018</option>
                                                          <option value="2017">2017</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label">Tarifa por operación</label>
                                              <div class="input-group"> <span class="input-group-prepend">
                                                                    <span class="input-group-text">S/.</span>
                                                  </span>
                                                  <input class="form-control text-right" aria-label="Amount (to the nearest dollar)" name="tarifa" type="text"> <span class="input-group-append">
                                                                    <span class="input-group-text">PE</span>
                                                  </span>
                                              </div>
                                          </div>
                                          <div class="form-group">Estado
                                              <div class="custom-switches-stacked">
                                                  <label class="custom-switch">
                                                      <input name="estado" value="1" class="custom-switch-input" checked="checked" type="radio" checked> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">En implementación</span>
                                                  </label>
                                                  <label class="custom-switch">
                                                      <input name="estado" value="2" class="custom-switch-input" type="radio"> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">Operando</span>
                                                  </label>
                                                  <label class="custom-switch">
                                                      <input name="estado" value="3" class="custom-switch-input" type="radio"> <span class="custom-switch-indicator"></span>
                                                      <span class="custom-switch-description">Suspención temporal</span>
                                                  </label>
                                              </div>
                                          </div>
                                          Licenciamiento
                                          <label class="custom-switch">
                                              <input name="licenciamento" class="custom-switch-input" type="checkbox"> <span class="custom-switch-indicator"></span>
                                              <span class="custom-switch-description">Ha
                                                                  adquirido una licencia anual ó similar.</span></label>
                                      </div>
                                  </div>
                              </div>
                              </div>
                              <div class="card-footer text-right">
                                  <div class="d-flex" style="text-align: center;">
                                      <dl>
                                          <dt> <a href="javascript:void(0)" class="btn btn-link">Cancelar</a><input

                                                              type="submit" class="btn btn-primary ml-auto" value="Crear Perfil"> </dt>
                                      </dl>
                                  </div>
                          </form>
                          </div>
                       
                          <script>
                require(['jquery', 'selectize'], function ($, selectize) {
                    $(document).ready(function () {
                        $('#input-tags').selectize({
                            delimiter: ',',
                            persist: false,
                            create: function (input) {
                                return {
                                    value: input,
                                    text: input
                                }
                            }
                        });
                
                        $('#select-beast').selectize({});
                
                        $('#select-users').selectize({
                            render: {
                                option: function (data, escape) {
                                    return '<div>' +
                                        '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                        '<span class="title">' + escape(data.text) + '</span>' +
                                        '</div>';
                                },
                                item: function (data, escape) {
                                    return '<div>' +
                                        '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                        escape(data.text) +
                                        '</div>';
                                }
                            }
                        });
                
                        $('#select-countries').selectize({
                            render: {
                                option: function (data, escape) {
                                    return '<div>' +
                                        '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                        '<span class="title">' + escape(data.text) + '</span>' +
                                        '</div>';
                                },
                                item: function (data, escape) {
                                    return '<div>' +
                                        '<span class="image"><img src="' + data.image + '" alt=""></span>' +
                                        escape(data.text) +
                                        '</div>';
                                }
                            }
                        });

                         $('#search').on('keyup',function(){
                              $value=$(this).val();
                              //alert($value);
                              $.ajax({
                                  type : 'get',
                                  url : '{{URL::to('search')}}',
                                  data:{'search':$value},
                                  success:function(data){
                                        $('#clientes').html(data);
                                        //alert(data);
                                  }
                              });
                          })
                    });
                });
              </script> </div>
                        <div class="col-lg-4">
                          <script>require(['input-mask'])</script></div>
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

@section('footer')

<footer class="footer">
      <div class="container">
        <div class="row align-items-center flex-row-reverse">
          <div class="col-auto ml-lg-auto">
            <div class="row align-items-center">
              <div class="col-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                  <li class="list-inline-item"><a href="./faq.html">FA</a></li>
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
   