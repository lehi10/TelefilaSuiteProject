@extends('layouts.base')

@section('title','Admisión')

@section('auxiliar')
  <div class="nav-item d-none d-md-flex"> 
    <a href="{{ url('admision/agregarPaciente') }}" class="btn btn-sm btn-outline-primary">
      Agregar  Paciente
    </a>
  </div>
@endsection

@section('mas_opciones')
<li class="nav-item"> <a href="/administrador/consultorios" class="nav-link"><i
                                class="fe fe-calendar"></i> Consultorios</a> </li>
<li class="nav-item"> <a href="/recursosHumanos" class="nav-link"><i
                                class="fa fa-address-book"></i> Recursos Humanos</a> </li>     
<li class="nav-item"> <a href="/admision" class="nav-link"><i
                              class="fa fa-users"></i> Admisión</a> </li>
<li class="nav-item"> <a href="/caja" class="nav-link"><i
                              class="fa fa-money"></i> Caja</a> </li>                                                                                                                         
@endsection

@section('body')

@if(isset($message))
  <div class="alert alert-{{$kindMessage}} form-group text-center" role="alert">
      {{ $message }}
    </div>
  @endif

  @if(session('message'))
              <div class="alert alert-success form-group text-center" role="alert">
                  {{session('message')}}
                </div>
  @endif
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
                    <h3 class="card-title"><br>
                    </h3>
                    <h3 class="card-title"><br>
                    </h3>
                    <h3 class="card-title">Admisión</h3>
                    <p><br>
                    </p>
                  </div>
                  <br>
                  <div class="table-responsive">
                    <table style="margin: 0px auto; width: 434px; height: 241px;"
                      border="0">
                      <tbody>
                        <tr>
                          <td style="margin-left: 96px;"><br>
                          </td>
                          <form action="/admision/buscarPaciente" method="post">
                            {{csrf_field()}}
                            <td style="background-color: white;" id="table"><input
                                class="form-control" placeholder="Ingrese DNI" type="text" name="pacienteDNI" @isset($dni) value="{{$dni}}" @endisset >
                                </td>
                                <td>
                              <span class="input-group-append"> <button class="btn btn-primary"
                                  type="submit">Buscar</button></span> </td>
                          </form>
                          <td><br> <br>
                          </td>
                        </tr>


                        @isset($paciente)

                        <tr>
                          <td><br>
                          <br>
                          </td>
                          <td>
                          <br>
                          <h4>Resultados:</h4>
                            <div class="form-label">Paciente: <b>{{$paciente->nombres}} {{$paciente->apellidos}}</b><br>
                              <div class="form-label"> DNI: <b> {{$paciente->dni}}</b>
                                <hr style="width: 100%; height: 1px; color: #999999; border-style: solid;"></div>
                            </div>
                          </td>
                          <td><br>
                          </td>
                        </tr>
                        
                        
                        <form action="/admision/referir" method="post" id="referir">
                          <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
                        {{csrf_field()}}

                        <tr>
                          <td><br>
                          </td>
                          <td>Referir a
                            <select name="especialidad" id="especialidad" class="form-control custom-select">
                              @foreach ($especialidades as $especialidad)
                                <option value="{{$especialidad->id}}" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">{{$especialidad->nombre}}</option>
                              @endforeach
                            </select>
                          </td>
                          <td><br>
                          </td>
                        </tr>
                        <tr>
                          <td><br>
                          </td>
                          <td>Mes
                            <select class="form-control custom-select" id="mes">
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
                              <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Noviembre</option>
                              <option value="12" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Diciembre</option>
                            </select>
                          </td>
                          <td><br>
                          </td>
                        </tr>
                        <tr>
                          <td><br>
                          </td>
                          <td>Semana
                            <select class="form-control custom-select" id="semanas">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </td>
                          <td><br>
                          </td>
                        </tr>
                        <tr>
                          <td><br>
                          </td>
                          <td> <br><span class="input-group-append"> <button class="btn btn-primary"
                                type="submit">Generar Referencia</button></span></td>
                          <td><br>
                          </td>
                        </tr>

                        </form>

                        <tr>
                          <td><br>
                          </td>
                          <td><br>
                          </td>
                          <td><br>
                          </td>
                        </tr>

                        @endisset
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>

  <script>
    function weeksOfMonth( y, m ) {
        var first = new Date(y, m,1).getDay();      
        var last = 32 - new Date(y, m, 32).getDate(); 
        return Math.ceil( (first + last)/7 );   
    }

    function getWeeksInMonth(month, year){
      var weeks=[],
          firstDate=new Date(year, month, 1),
          lastDate=new Date(year, month+1, 0), 
          numDays= lastDate.getDate();
      
      var start=1;
      var end=7-firstDate.getDay();
      while(start<=numDays){
          weeks.push({start:start,end:end});
          start = end + 1;
          end = end + 7;
          if(end>numDays)
              end=numDays;    
      }        
        return weeks;
    }






    $("#mes").change(function() {
      //console.log("asdssad");
      $('option',$('#semanas')).remove();
      var semanas=weeksOfMonth(new Date().getFullYear()-1,this.value-1);
      console.log("cambio a",semanas);
      $("#semanas").append(new Option(1,1,true,true));
      for (let index = 2; index <= semanas; index++) {
        $("#semanas").append(new Option(index,index,false,false));
      }
    });

    $("#referir").submit(function(){
      let semana=$("#semanas").val();
      let mes=$("#mes").val();
      let year=new Date().getFullYear();
      let semanas=getWeeksInMonth(mes-1,year-1);

      //console.log("asdasd");
      try {
        let intervalo=semanas[semana-1];
        console.log(intervalo);
        let inicio=new Date(year,mes-1,intervalo["start"]);
        let final=new Date(year,mes-1,intervalo["end"]);
        console.log(inicio);
        console.log(final);
        $('<input />').attr('type', 'hidden')
          .attr('name', "especialidad")
          .attr('value', $("#especialidad").val()).appendTo(this);
        $('<input />').attr('type', 'hidden')
          .attr('name', "inicio")
          .attr('value', inicio.toJSON().slice(0, 10)).appendTo(this);
        $('<input />').attr('type', 'hidden')
          .attr('name', "final")
          .attr('value', final.toJSON().slice(0, 10)).appendTo(this);
        return true;
        //$("#referir").append()



      }
      catch(err) {
        alert("Algo salió mal");
        console.log(err);
        return false;
      }
    });


   


  </script>

@endsection


        