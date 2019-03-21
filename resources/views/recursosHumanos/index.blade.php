@extends('layouts.template')

@section('title','Recursos Humanos')

@section('buscar','medico')

@section('auxiliar')
<script>$('#msg').delay(8000).hide(600);</script>
<div class="nav-item d-none d-md-flex"> <a href="{{url('/recursosHumanos/nuevoMedico')}}"
    class="btn btn-sm btn-outline-primary">Agregar medico</a>
</div>
@endsection


@section('more_options')
<li class="nav-item"><a href="{{url('/'.Auth::user()->rolUrl())}}" class="nav-link"><i class="fe fe-home"></i>Inicio</a></li>
<li class="nav-item"> <a href="{{url('superuser/usersClient/'.Auth::user()->hospital_id)}}"  class="nav-link"><i class="fa fa-users"></i>Usuarios</a> </li>
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i class="fa fa-stethoscope"></i> Consultorios</a></li>
<li class="nav-item slc"> <a href="/recursosHumanos" class="nav-link"><i class="fa fa-user-md"></i> Recursos Humanos</a> </li>
<li class="nav-item"> <a href="/admision" class="nav-link"><i class="fa fa-file-text"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i class="fa fa-money"></i> Caja</a> </li>
<li class="nav-item"> <a href="/historialMedico" class="nav-link" ><i class="fa fa-bar-chart"></i> Reportes</a></li>
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
            @if(session('message'))
              <div id="msg" class="alert alert-success form-group text-center" role="alert">
                  {{session('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Listado de medicos </h3>
                </div>
                @if ($medicos->isEmpty())
                    <br>
                      <center><h4>No tiene Usuarios registrados.</h4></center>
                    <br>
                @else
                <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                    <tr>
                        <th class="w-1">Nro.</th>
                        <th class="w-1">MEDICO</th>
                        <th class="w-1">CONSULTORIO</th>
                        <th class="w-1">TICKETS POR DÍA</th>
                        <th class="w-1">HABILITADO</th>
                        <th class="w-1">EDITAR</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($medicos as $medico)
                            <tr>
                                <td><span class="text-muted">{{$medico->id}}</span></td>
                                <td><a href="{{'recursosHumanos/'.$medico->id.'/editarMedico/'}}" class="text-inherit">{{$medico->nombres}} {{$medico->apellidos}}<br>
                                </a></td>

                                @if($medico->consultorio)
                                <td><a href="/recursosHumanos/{{$medico->consultorio->id}}/consultorio" class="text-inherit">{{$medico->consultorio ? $medico->consultorio->nombre:'----'}}<br>
                                </a></td>
                                @else
                                    <td>----</td>
                                @endif
                                <td>
                                <div class="col"> </div>
                                <strong >{{$medico->turnos}}</strong></td>
                                <td>
                                <label class="custom-switch">
                                    <input   name="optRol" value="{{$medico->id}}" class="custom-switch-input" {{ $medico->nombres ? 'checked' :''}} type="checkbox">
                                    <span class="custom-switch-indicator"></span>
                                </label>

                                </td>
                                <td>
                                  <a href="recursosHumanos/{{$medico->id}}/editarDatosMedico" class="text-inherit">
                                  <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                </a>
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                @endif
            </div>
            </div>
        </div>
        <ul class="pagination ">
            <li class="page-item page-prev disabled"> <a class="page-link" href="#"
                tabindex="-1"> Atras </a> </li>
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

@endsection
