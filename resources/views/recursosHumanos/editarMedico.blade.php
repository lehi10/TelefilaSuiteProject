@extends('layouts.base')

@section('title','Agenda Medica')

@section('scripts')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script>

//document.getElementById("1horaSalida").addEventListener("change", updateTurnos);


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

    if(hours<0 || ( hours==0 && mins <0 ) )
    {
        document.getElementById(iTurno+"cantTurnos").innerHTML = 0;
        $("#row"+iTurno).removeClass("va");
        return;
    }
        
    t1.setHours( hours,mins ,secs );
    var minutos=t1.getHours()*60+t1.getMinutes();
    //console.log(minutos);
    var turnosGenerados=minutos/tiempoAt;
 	// var minutos=(t1.getHours() +":"+t1.getMinutes()+":0" );
    // var timeFormat = new Date("0001-01-01T"+minutos);
    // var turnos = timeFormat.getHours() * 60 + timeFormat.getMinutes();
    document.getElementById(iTurno+"cantTurnos").innerHTML = parseInt(turnosGenerados);

    if (turnosGenerados>0){
        $("#row"+iTurno).addClass("va");
        $("#turnos"+iTurno).val(parseInt(turnosGenerados));
    }

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
                        <table style="margin: 0px auto; width: 80%; " cellspacing="100" border="0">
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
                                    <td style="padding-right:10px;" >
                                        <input class="form-control"  disabled="disabled" placeholder="Company" value="{{$medico->nombres}} {{$medico->apellidos}}" type="text">
                                    </td>
                                    <td style="padding-right:10px;" >
                                        <input class="form-control"   disabled="disabled" placeholder="Company" value="{{$medico->especialidad->nombre}}" type="text">
                                    </td>
                                    <td style="padding-right:10px;" >
                                        <input class="form-control"  disabled="disabled" placeholder="Company" value="Mañana" type="text">
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
                        <table style="margin: 0px auto; width: 80%; padding:5px;"  cellspacing="100" border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                    <td >Seleccionar mes</td>
                                    <td>Año</td>
                                    <td>Accion</td>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>                                
                                    {{ Form::open(array('action' => array('RecursosHumanosController@mostrarAgenda', $medico->id),'method'=>'get')) }}
                                        <td>                                                                            
                                            <br>
                                        </td>
                                        <td style="padding-right:10px;" >
                                            <select name="month" id="select-users" class="form-control custom-select" >
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
                                        <td style="padding-right:10px;" >
                                            <select name="year" id="select-users" class="form-control custom-select">
                                                <option value="2018" >2018</option>
                                                <option value="2019" >2019</option>
                                            </select>
                                        </td>
                                        <td style="padding-right:10px;" >
                                            <button type="submit" class="btn btn-primary btn-block">CARGAR</button>
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
                        <h3 class="card-title">Ha cargado la agenda de {{$mes}} de {{$year}}</h3>
                        <hr style="width: 80%; height: 1px; color: #999999; border-style: solid;">
                    </div>
                    <div class="table-responsive"></div>

                    {{ Form::open(array('action' => array('RecursosHumanosController@crearAgenda',$medico->id),'id'=>"agendas")) }}
                        <input type="number" name="year" value="{{$year}}" style="display:none"> 
                        <input type="number" name="mes" value="{{$month}}" style="display:none"> 

                        <table style="margin: 0px auto; width: 80%;" cellspacing="100" border="0">
                        <tbody id="ags">
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

                            @if ($agendas->has($i))
                                <tr id="row{{$i}}">
                                    <td>{{$i}}</td>
                                    <td>
                                        <input name="{{$i}}[horaInicio]" id="{{$i}}horaIngreso" type="text"  class="form-control usado"  value="{{$agendas[$i]->horaInicio}}" disabled>
                                    </td>
                                    <td>
                                        <input name="{{$i}}[horaFinal]" id="{{$i}}horaSalida" class="form-control usado" value="{{$agendas[$i]->horaFinal}}" disabled>
                                    </td>
                                    <td>
                                        <select name="{{$i}}[tiempoCita]" id="{{$i}}tiempoAtencion" class="form-control custom-select"  disabled>

                                            <option value="{{$agendas[$i]->tiempoCita}}" >{{$agendas[$i]->tiempoCita}}</option>

                                        </select>
                                    </td>
                                    <input type="hidden" name="{{$i}}[turnos]" value="0" id="turnos{{$i}}" disabled>
                                    <input type="hidden" name="fecha" value="0" id="" disabled>
                                    <td style="text-align: center;"><strong> <label id="{{$i}}cantTurnos">{{$agendas[$i]->turnos}}</label> </strong></td>
                                </tr>
                            @else

                            <tr id="row{{$i}}">
                                <td>{{$i}}</td>
                                <td>
                                    <input name="{{$i}}[horaInicio]" id="{{$i}}horaIngreso" type="text"  class="form-control timepicker " jt-timepicker="" time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown" onchange="updateTurnos({{$i}})">
                                </td>
                                <td>
                                    <input name="{{$i}}[horaFinal]" id="{{$i}}horaSalida" onchange ="updateTurnos({{$i}})" class="form-control timepicker" jt-timepicker="" time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown">
                                </td>
                                <td>
                                    <select name="{{$i}}[tiempoCita]" id="{{$i}}tiempoAtencion" class="form-control custom-select" onchange="updateTurnos({{$i}})">
                                        <option value="10" >10</option>
                                        <option value="15" >15</option>
                                        <option value="30" >30</option>
                                        <option value="45" >45</option>
                                        <option value="60" >60</option>
                                    </select>
                                </td>
                                <input type="hidden" name="{{$i}}[turnos]" value="0" id="turnos{{$i}}">
                                <input type="hidden" name="fecha" value="0" id="">
                                <td style="text-align: center;"><strong> <label id="{{$i}}cantTurnos">0</label> </strong></td>
                            </tr>
                            @endif
                        @endfor
                        </tbody>
                        </table>
                        <br>
                        <div class="table-responsive" style="text-align: center;">
                            <strong>
                                <div class="card-footer text-right"> 
                                    <button type="submit" class="btn btn-primary" id="guardar">Guardar</button> 
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

    $('.usado').each(function(){
        $(this).val($(this).val().slice(0,-3));
    });

$("#agendas").submit(function(){
    $("#ags").children("tr").slice(1).each(function(){
        if( !$(this).hasClass("va"))
        {
            $(this).find("input,select").prop('disabled',true);
            console.log("nova");
        }
    });
    return true;
});


$("#guardar1").click(function(){
    var agendas={};
    $(".va").each(function(){
        var obj={}
        var num= $($(this).children("td")[0]).html();
        //console.log(num);
        
        obj["horaInicio"]=$($(this).children("td")[1]).find("input").val();
        obj["horaFinal"]=$($(this).children("td")[2]).find("input").val();
        obj["tiempoCita"]=$($(this).children("td")[3]).find("select").val();
        obj["turnos"]=$($(this).children("td")[4]).find("label").text();
        agendas[num]=obj;
    });
    console.log(agendas);
    
    $.ajax({
        type: "POST",
        url: "",
        async:false,
        dataType: "json",
        data: {bruce:data,_token:token},
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});



$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 15,
    minTime: '7:00 AM',
    maxTime: '6:00 PM',
    startTime: '7:00 AM',
    defaultTime: '7:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true,
    change: function(time) {
            $(this).trigger("change");
        }
    
});

});
</script>


@endsection
