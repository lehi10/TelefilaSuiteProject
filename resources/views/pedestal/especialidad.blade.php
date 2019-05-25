<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>pedestal</title>
    <style type="text/css">
#fondo {
  background-color: black;
  font-size: 26px;
  font-family: "Arial";
  font-weight: bold;
  color: #ffcc00;
  text-align: center;
}

#boton2 {
  font-size: 40px;
  text-align: center;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  transform-style: preserve-3d;
  perspective: 10px;
  width: 220px;
  height: 140px;
  background-color: #009900;
  font-family: "Calibri";
  font-weight: bold;
  color: white;
}

#backgound {
  font-family: "Calibri";
  font-size: 18px;
  text-align: center;
  color: white;
  background-color: #424242;
}

#especialidad {
  text-align: center;
  font-family: "Calibri";
  font-weight: bold;
  font-size: 25px;
  color: white;
}

#cliente {
  font-family: "Arial";
  font-size: 15px;
  text-align: center;
  background-color: #303030;
  color: #999999;
  font-weight: bold;
}

</style></head>
  <body id="cliente">
    <table style="width: 100%;" border="0">
      <tbody>
        <tr>
        @if($tipo="otro")
          <td id="fondo">Cliente con DNI, {{$dni}} ¿Que servicio necesitas?</td>
        @else
          <td id="fondo">Hola, {{$paciente->nombres}} {{$paciente->apellidos}} ¿En que deseas atenderte?</td>
        @endif
          
        </tr>
      </tbody>
    </table>
    <br>

    @if($tipo="otro")
      <form action="/pedestal/{{$codigo}}/imprimeOtroServicio" method="get" id="form">
        <input type="hidden" name="especialidad_id" value="" id="especialidad">
        <input type="hidden" name="paciente_id" value="{{$dni}}">
        <input type="hidden" name="codigo" value="{{$codigo}}">
        <input type="hidden" name="hospital_id" value="{{$hospital_id}}">
        <input type="hidden" name="tipo" value="{{$tipo}}" id="idConsultorio">
      </form>
    @else
      <form action="/pedestal/{{$codigo}}/fecha" method="post" id="form">
        {{csrf_field()}}
        <input type="hidden" name="especialidad_id" value="" id="especialidad">
        <input type="hidden" name="apellidos" value="{{$paciente->apellidos}}">
        <input type="hidden" name="nombres" value="{{$paciente->nombres}}">
        <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
        <input type="hidden" name="codigo" value="{{$codigo}}">
        <input type="hidden" name="hospital_id" value="{{$paciente->hospital_id}}">
        <input type="hidden" name="idConsultorio" value="" id="idConsultorio">
        <input type="hidden" name="tipo" value="{{$tipo}}" id="idConsultorio">
      </form>
    @endif
    
    @if($tipo ="otro")
      
        <div width="40%" align="center">
          <table div="" style="width: 40%;" ;="" cellspacing="5" border="0">
            <tbody>
              @if(isset($especialidades)) 
                @for ($i = 0; $i <= floor(count($especialidades)/5) ; $i++)
                  <tr>
                  @for ($j = 0; $j < 5; $j++)
                    @if(isset($especialidades[$i*5+$j]))
                      <td id="especialidad">
                      @if($tipoNegocio="otro")
                        <img src="/botones/otroTipoCliente/{{$especialidades[$i*4+$j]->id}}.png" id="boton" alt="{{$especialidades[$i*4+$j]->nombre}}" title="{{$especialidades[$i*4+$j]->nombre}}" style="width: 194px; height: 194px;" onclick="mandarForm({{$especialidades[$i*5+$j]->id}},{{$especialidades[$i*5+$j]->idConsultorio}})"><br>
                            {{$especialidades[$i*5+$j]->nombre}}
                      @else 
                        <img src="/botones/{{$especialidades[$i*4+$j]->id}}.png" id="boton" alt="{{$especialidades[$i*4+$j]->nombre}}" title="{{$especialidades[$i*4+$j]->nombre}}" style="width: 194px; height: 194px;" onclick="mandarForm({{$especialidades[$i*5+$j]->id}},{{$especialidades[$i*5+$j]->idConsultorio}})"><br>
                            {{$especialidades[$i*5+$j]->nombre}}
                      @endif
                      </td>
                    @endif
                  @endfor

                </tr>
                @endfor
              @endif
            </tbody>
          </table>
        </div>
    @else

        <div width="40%" align="center">
          <table div="" style="width: 40%;" ;="" cellspacing="5" border="0">
            <tbody>
              @if(isset($especialidades)) 
                @for ($i = 0; $i <= floor(count($especialidades)/5) ; $i++)
                  <tr>
                  @for ($j = 0; $j < 5; $j++)
                    @if(isset($especialidades[$i*5+$j]))
                      <td id="especialidad">
                        <img src="/botones/{{$especialidades[$i*4+$j]->id}}.png" id="boton" alt="{{$especialidades[$i*4+$j]->nombre}}" title="{{$especialidades[$i*4+$j]->nombre}}" style="width: 194px; height: 194px;" onclick="mandarForm({{$especialidades[$i*5+$j]->id}},{{$especialidades[$i*5+$j]->idConsultorio}})"><br>
                            {{$especialidades[$i*5+$j]->nombre}}
                      </td>
                    @endif
                  @endfor

                </tr>
                @endfor
              @endif

              @if(isset($especialidadesReferidas))
                @for ($i = 0; $i < count($especialidadesReferidas)/5 ; $i++)
                  <tr>
                  @for ($j = 0; $j < 5; $j++)
                    <td id="especialidad">
                    
                      <img src="/botones/{{$especialidadesReferidas[$i*4+$j]->id}}.png" id="boton" alt="{{$especialidadesReferidas[$i*4+$j]->nombre}}" title="{{$especialidades[$i*4+$j]->nombre}}" style="width: 194px; height: 194px;" onclick="mandarForm({{$especialidades[$i*4+$j]->id}},{{$especialidadesReferidas[$i*4+$j]->idConsultorio}})"><br>
                          {{$especialidadesReferidas[$i*4+$j]->nombre}}
                          </td>
                    
                  @endfor
                </tr>
                @endfor
              @endif


            </tbody>
          </table>

        </div>
    @endif
    <script>
            function mandarForm(especialidad,idConsult)
            {
              document.getElementById('especialidad').value = especialidad;
              document.getElementById('idConsultorio').value = idConsult;
              document.getElementById('form').submit();
            }
          </script>
  </body>
</html>
