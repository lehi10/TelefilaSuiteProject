@extends('layouts.base')

@section('title','Agenda Medica')

@section('scripts')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script>

document.getElementById("1horaSalida").addEventListener("change", updateTurnos);


function updateTurnos(iTurno) {    
    
    var hora1 = document.getElementById(iTurno+"horaSalida").value.split(":"),
        hora2 = document.getElementById(iTurno+"horaIngreso").value.split(":"),
        tiempoAt = document.getElementById(iTurno+"tiempoAtencion").value,
        t1 = new Date(),
        t2 = new Date();
    
    
    t1.setHours(hora1[0], hora1[1],"00");
    t2.setHours(hora2[0], hora2[1],"00");

    var hours=t1.getHours() - t2.getHours();
    var mins=t1.getMinutes() - t2.getMinutes();
    var secs=t1.getSeconds() - t2.getSeconds();

    if(hours<0 || mins <0 || secs <0)
    {
        document.getElementById(iTurno+"cantTurnos").innerHTML = 0;
        return;
    }
        
    t1.setHours( hours,mins ,secs );

 	var minutos=(t1.getHours() +":"+t1.getMinutes()+":0" );
    var timeFormat = new Date("0001-01-01T"+minutos);
    var turnos = timeFormat.getHours() * 60 + timeFormat.getMinutes();
    document.getElementById(iTurno+"cantTurnos").innerHTML = parseInt(turnos/tiempoAt);

    } 
</script>
@endsection

@section('body')

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

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
                                
                                    {{ Form::open(array('action' => array('RecursosHumanosController@mostrarAgenda', $medico->id))) }}
                                        <td>
                                            <br>
                                        </td>
                                        <td>
                                            <select name="month" id="select-users" class="form-control custom-select">
                                                <option value="1" >Enero</option>
                                                <option value="2" >Febrero</option>
                                                <option value="3" >Marzo</option>
                                                <option value="4" >Abril</option>
                                                <option value="5" >Mayo</option>
                                                <option value="6" >Junio</option>
                                                <option value="7" >Julio</option>
                                                <option value="8" >Agosto</option>
                                                <option value="9" >Setiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Novimbre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="year" id="select-users" class="form-control custom-select">
                                                <option value="2018" >2018</option>
                                                <option value="2019" >2019</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-block">CARGAR&nbsp;</button>
                                        </td>
                                        <td>
                                            <br>
                                        </td>
                                    {{ Form::close() }}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>

                    @isset($crearFlag)
                    <div class="table-responsive"><br></div>
                        <div class="table-responsive" style="text-align: center;">
                        <h3 class="card-title">Ha cargado la agenda de {{$month}} de {{$year}}</h3>
                        <hr style="width: 80%; height: 1px; color: #999999; border-style: solid;">
                    </div>
                    <div class="table-responsive"></div>

                    {{ Form::open(array('action' => array('RecursosHumanosController@crearAgenda',$medico->id))) }}
                        <input type="number" name="diasMes" value="{{$diasMes}}" style="display:none"> 

                        <table style="margin: 0px auto; width: 80%;" cellspacing="100" border="0">
                        <tbody>
                        <tr>
                            <td>Día<br>
                            </td>
                            <td style="margin-left: -131px;">Hora de ingreso</td>
                            <td>Hora de salida</td>
                            <td>Tiempo de atención</td>
                            <td style="text-align: center;">Turnos generados<br>
                            </td>
                        </tr>
                        
                        @for ($i = 1; $i <= $diasMes ; $i++)
                            <tr>
                                <td>{{$i}}<br>
                                </td>
                                <td>
                                    <input name="{{$i}}horaIngreso" id="{{$i}}horaIngreso" type="text"  class="form-control timepicker" jt-timepicker="" time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown" onchange="updateTurnos({{$i}})">
                                </td>
                                <td>
                                    <input name="{{$i}}horaSalida" id="{{$i}}horaSalida" onchange ="updateTurnos({{$i}})" class="form-control timepicker" jt-timepicker="" time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown">
                                </td>
                                <td>
                                    <select name="{{$i}}tiempoAtencion" id="{{$i}}tiempoAtencion" class="form-control custom-select" onchange="updateTurnos({{$i}})">
                                        <option value="10" >10</option>
                                        <option value="15" >15</option>
                                        <option value="30" >30</option>
                                        <option value="45" >45</option>
                                        <option value="60" >60</option>
                                    </select>
                                </td>
                                
                                <td style="text-align: center;"><strong> <label id="{{$i}}cantTurnos">42</label> </strong></td>
                            </tr>
                        @endfor
                        </tbody>
                        </table>

                        <div class="table-responsive" style="text-align: center;">
                            <strong>
                                <div class="card-footer text-right"> 
                                    <button type="submit" class="btn btn-primary">Guardar</button> 
                                </div>
                                <br>
                            </strong>
                        </div>
                    {{ Form::close() }}


                    <div class="table-responsive"><br></div>
                    @endisset                    
                    <div class="table-responsive"><br>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 15,
    minTime: '10',
    maxTime: '6:00 PM',
    defaultTime: '11',
    startTime: '10:00 AM',
    dynamic: true,
    dropdown: true,
    scrollbar: true,
    change: function(time) {
            $(this).trigger("change");
        }
    
});
});
</script>


@endsection
