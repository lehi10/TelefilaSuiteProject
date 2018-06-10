@extends('layouts.template')

@section('title','Super Usuario')


@section('body')      
  <div class="my-3 my-md-5">
      <!--<div class="container">-->
      <!--<nav class="breadcrumb breadcrumb-content">-->
      <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
      <!--<span class="breadcrumb-item active">Cards</span>-->
      <!--</nav>-->
      <!--</div>-->
      <div class="container">
          <div class="row row-cards">
              <br>
              <div class="col-12">
              @if(session('message'))
              <div class="alert alert-success form-group text-center" role="alert">
                  {{session('message')}}
                </div>
              @endif
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">Listado general de Clientes</h3>
                      </div>
                      <div class="table-responsive">
                          @if ($hospitales->isEmpty())
                          <br>
                          <center>
                              <h4>No tiene clientes registrados.</h4>
                          </center>
                          <br>
                          @else
                          <table class="table card-table table-vcenter text-nowrap">
                              <thead>
                                  <tr>
                                      <th class="w-1">Nro.</th>
                                      <th>NOMBRE</th>
                                      <th>CIUDAD</th>
                                      <th>TICKETS</th>
                                      <th>ESTADO</th>
                                      <th style="text-align: center;">ACCCIONES</th>
                                      <th><br>
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($hospitales as $hos)
                                  <tr>
                                      <td><span class="text-muted">{{sprintf("%04d",$hos->id)}}</span></td>
                                      <td><a href="{{url('superuser/cliente/'.$hos->id)}}" class="text-inherit">{{$hos->nombre}}<br>
                                          </a>
                                      </td>
                                      <td>{{$hos->ciudad}}</td>
                                      <td>0</td>
                                      <td> <span class="status-icon bg-success"></span>
                                          Operando 
                                      </td>
                                      <td class="text-right">
                                          <select class="custom-select">
                                              <option value="STATUS_CODE" selected="selected">Cambiar
                                                  estado
                                              </option>
                                              <option value="JSON_BODY">En implementación</option>
                                              <option value="HEADERS">Operando</option>
                                              <option value="TEXT_BODY">Suspensión temporal</option>
                                              <option value="RESPONSE_TIME">Cancelado</option>
                                          </select>
                                      </td>
                                      <td> <a class="icon" href="javascript:void(0)"> </a>
                                          <br>
                                      </td>
                                  </tr>
                                  @endforeach
                                  </php>
                                  </script>
                              </tbody>
                          </table>
                          @endif
                      </div>
                  </div>
              </div>
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
              url : '{{URL::to('search')}}',
              data:{'search':$value},
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

