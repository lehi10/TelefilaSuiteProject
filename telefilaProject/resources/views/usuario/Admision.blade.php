@extends('agenda.index_admi')

@section('content')
        <h2 style="text-align: center;" type="button">&nbsp;- COBRAR / ELIMINAR
          TICKET -</h2>
        <p style="width: 362px;"></p>
        <div id="txt_llama" style="text-align: center;"><input placeholder="Numero de ticket"

            name="Numero de ticket" type="text"> <input value="validar" name="Validar ticket"

type="button">Paciente: Juan Peres Garcia<br>Especialidad: Cardiología<br>Jueves 23 de Agosto; 11:30 am<br><br><table

style="width: 420px; height: 40px;" border="2"><tbody><tr><td><input id="color_but"

value="Cobrar" name="Cobrar" type="button"><br></td><td><input value="Eliminar"

name="Eliminar" type="button"><br></td></tr></tbody></table><br><hr style="width: 100%; height: 1px; color: white;"><br><h2

style="text-align: center;" type="button">- REFERIR PACIENTE -</h2><h2 style="text-align: center;"

type="button"></h2>
                  <p style="width: 362px;"></p>
                  <div style="text-align: center;"><input placeholder="Ingrese DNI"

name="Ingrese DNI" type="text"> <input value="validar" name="Validar ticket" type="button"><b>Paciente: Juan Peres Garcia<br>DNI: 25626532235</b></div><br><table

style="width: 100%" border="1"><tbody><tr><td>Referir a la especialidad de:</td><td><select

id="especialidad" required="required" name="Especialidad" type="text"><option value="1">Cardiología</option><option

value="2">Cirujia</option><option value="3">Dental</option><option value="4">Ginecología</option><option

value="5">Medicina General</option><option value="6">Medicina Interna</option><option

value="7">Nutrición</option><option value="8">Obstetricia</option><option value="9">Oftalmología</option><option

value="10">Pediatria</option><option value="11">Urología</option></select></td></tr></tbody></table><br>Para la semana:<br><br><input

name="semana de atención" type="week"><br><br>
        </div>
        <button>REFERIR</button> </div>
                <br><hr style="width: 100%; height: 1px; color: white;"><br><br><h2

style="text-align: center;" type="button">- AGREGAR PACIENTE -</h2>
                <div id="txt_llama" style="text-align: center;"><input id="txt_but"

placeholder="Numero de ticket" name="Nombres" type="text">
                  <div id="txt_llama" style="text-align: center;"><input id="txt_but"

placeholder="Apellidos" name="Numero de ticket" type="text">
                    <div id="txt_llama" style="text-align: center;"><input id="txt_but"

placeholder="DNI" name="Numero de ticket" type="text"><input id="txt_but" value="Fecha de nacimiento"

name="Fecha de nacimiento" type="date">PACIENTE - SIS: <br><br>SI<input value="si"

name="si" type="radio">&nbsp; NO <input value="no" name="no" type="radio">GENERO:&nbsp; <br><br>Masculino<input

value="si" name="si" type="radio">&nbsp; Femenino <input value="no" name="no" type="radio"><br><br>
                            </div>
        <button>AGREGAR</button> </div>
                      <br>
      <div class="cta"><a href="#">¿Necesitas ayuda? T. 943798335<br>
        </a></div>
    </div>
@endsection
