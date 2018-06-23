@extends('layouts.base')

@section('title','Agenda Medica')

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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Agenda Médica</h3>
                        <p>
                            <br>
                        </p>
                    </div>
                    <div class="table-responsive">
                        <br>
                        <table style="margin: 0px auto; width: 80%;" cellspacing="100" border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                    <td style="margin-left: -131px;">Datos Generales</td>
                                    <td>Especialidad</td>
                                    <td>Turno</td>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                    <td>
                                        <input class="form-control" disabled="disabled" placeholder="Company" value="{{$medico->nombres}} {{$medico->apellidos}}" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" disabled="disabled" placeholder="Company" value="{{$medico->especialidad->nombre}}" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" disabled="disabled" placeholder="Company" value="Mañana" type="text">
                                    </td>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <br>
                    </div>
                    <div class="table-responsive">
                        <table style="margin: 0px auto; width: 80%;" cellspacing="100" border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                    <td style="margin-left: -131px;">Seleccionar mes</td>
                                    <td>Año</td>
                                    <td>Accion</td>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                    <td>
                                        <select name="user" id="select-users" class="form-control custom-select">
                                            <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Enero</option>
                                            <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">Febrero</option>
                                            <option value="3" data-data="{&quot;image&quot;: &quot;demo/faces/female/1.jpg&quot;}">Marzo</option>
                                            <option value="4" data-data="{&quot;image&quot;: &quot;demo/faces/female/18.jpg&quot;}">Abril</option>
                                            <option value="5" data-data="{&quot;image&quot;: &quot;demo/faces/male/16.jpg&quot;}">Mayo</option>
                                            <option value="6" data-data="{&quot;image&quot;: &quot;demo/faces/male/26.jpg&quot;}">Junio</option>
                                            <option value="7" data-data="{&quot;image&quot;: &quot;demo/faces/female/7.jpg&quot;}">Julio</option>
                                            <option value="8" data-data="{&quot;image&quot;: &quot;demo/faces/female/17.jpg&quot;}">Agosto</option>
                                            <option value="9" data-data="{&quot;image&quot;: &quot;demo/faces/male/30.jpg&quot;}">Setiembre</option>
                                            <option value="10" data-data="{&quot;image&quot;: &quot;demo/faces/male/32.jpg&quot;}">Octubre</option>
                                            <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Novimbre</option>
                                            <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Novimbre</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="user" id="select-users" class="form-control custom-select">
                                            <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">2019</option>
                                            <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">2018</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-block">CARGAR&nbsp;</button>
                                    </td>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection
