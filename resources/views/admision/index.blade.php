@extends('layouts.base')

@section('title','Admisión')

@section('auxiliar')
  <div class="nav-item d-none d-md-flex"> 
    <a href="{{ url('admision/agregarPaciente') }}" class="btn btn-sm btn-outline-primary">
      Agregar  Paciente
    </a>
  </div>
@endsection

@section('body')

@if(isset($message))
  <div class="alert alert-{{$kindMessage}} form-group text-center" role="alert">
      {{ $message }}
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
                        
                        <tr>
                          <td><br>
                          </td>
                          <td>Referir a
                            <select name="user" id="select-users" class="form-control custom-select">
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
                                type="button">Generar Referencia</button></span></td>
                          <td><br>
                          </td>
                        </tr>
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

    $("#mes").change(function() {
      console.log("asdssad");
      $('option',$('#semanas')).remove();
      var semanas=weeksOfMonth(new Date().getFullYear(),this.value);
      $("#semanas").append(new Option(1,1,true,true));
      for (let index = 2; index <= semanas; index++) {
        $("#semanas").append(new Option(index,index,false,false));
      }
    });
   


  </script>

@endsection


        