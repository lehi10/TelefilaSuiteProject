
@extends('layouts.base')

@section('title','historial')

@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>
<li class="nav-itemlc"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>
<li class="nav-item slc"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>
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
                    <h3 class="card-title">Listado general de Tickets</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                        {{ Form::open(array('url' =>'historialMedico/' , 'method'=>'GET')) }}
                          <th>
                            <select  name="dia" id="select-users" class="form-control custom-select">
                              <option value="1" >01</option>
                              <option value="2" >02</option>
                              <option value="3" >03</option>
                              <option value="4" >04</option>
                              <option value="5" >05</option>
                              <option value="6" >06</option>
                              <option value="7"  >07</option>
                              <option value="8"  >08</option>
                              <option value="9" >09</option>
                              <option value="10" >10</option>
                              <option value="11" >11</option>
                              <option value="12" >12</option>
                              <option value="13" >13</option>
                              <option value="14" >14</option>
                              <option value="15" >15</option>
                              <option value="16" >16</option>
                              <option value="17" >17</option>
                              <option value="18" >18</option>
                              <option value="19" >19</option>
                              <option value="20" >20</option>
                              <option value="21" >21</option>
                              <option value="22" >22</option>
                              <option value="23" >23</option>
                              <option value="24" >24</option>
                              <option value="25" >25</option>
                              <option value="26" >26</option>
                              <option value="27" >27</option>
                              <option value="28" >28</option>
                              <option value="29" >29</option>
                              <option value="30" >30</option>
                              <option value="31" >31</option>
                            </select>
                          </th>
                          <th>
                            <select name="mes" id="select-users" class="form-control custom-select">
                              <option value="1"  >Enero</option>
                              <option value="2"  >Febrero</option>
                              <option value="3"  >Marzo</option>
                              <option value="4"  >Abril</option>
                              <option value="5"  >Mayo</option>
                              <option value="6"  >Junio</option>
                              <option value="7"  >Julio</option>
                              <option value="8"  >Agosto</option>
                              <option value="9"  >Setiembre</option>
                              <option value="10" >Octubre</option>
                              <option value="11" >Noviembre</option>
                              <option value="12" >Diciembre</option>
                            </select>
                          </th>
                          <th>
                            <select name="anio" id="select-users" class="form-control custom-select">
                              <option value="2019"  >2019</option>
                              <option value="2020"  >2020</option>
                              <option value="2021"  >2021</option>
                            </select>
                          </th>

                          <th>

                            <select name="especialidad" id="select-users" class="form-control custom-select">

                              <option value="" >Buscar en todas las Especialidades</option>
                              <option value="1" >Medicina General</option>
                              <option value="2" >Oftalmología</option>
                              <option value="3" >Cirugia</option>
                              <option value="4" >Pediatria</option>
                              <option value="5" >Obstetricia</option>

                            </select>

                          </th>
                          <th>
                            <span class="col-auto">
                              <button class="btn btn-secondary"  type="submit">
                                <i class="fe fe-search"></i>
                              </button>
                            </span>
                          </th>

                        {{ Form::close() }}
                        </tr>


                      </thead>

                      @if(isset($registros))
                      <tbody>
                        @foreach ($registros as $registro)
                          <tr>
                            <td style="width: 111px;">{{ date('d', strtotime( $registro->fecha ))  }}</td>
                            <td style="margin-left: 15px;">{{ date('M', strtotime( $registro->fecha ))  }}<br>
                            </td>
                            <td>{{ date('Y', strtotime( $registro->fecha ))  }}</td>
                            <td>{{ $registro->nombre}}</td>
                            <td>
                            <a href="pdf?fecha={{$registro->fecha}}&especialidad={{ $registro->espID}}" target="_bank">
                              <button class="btn btn-primary btn-block">VER  &nbsp;</button>
                            </a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      @endif
                    </table>
                  </div>
                </div>
              </div>
              <ul class="pagination ">
                <li class="page-item page-prev disabled"> <a class="page-link"

                    href="#" tabindex="-1"> Atras </a> </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item page-next"> <a class="page-link" href="#">
                    Siguiente </a> </li>
              </ul>
            </div>
          </div>
        </div>

@endsection
