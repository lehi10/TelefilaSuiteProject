<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>pedestal</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
.inputsize {
	background-color: black;

  display: block;
  width: 100%;
  box-sizing(border-box);
  font-size: 100px;
  font-family: "Arial";
  font-weight: bold;
  color: white;
  text-align: center;
  margin-top:0;
  margin-bottom:0;
  border: 0;

}

.fondo {
background-color: black;
  font-size: 160px;
  font-family: "Arial";
  font-weight: bold;
  color: white;
  text-align: center;
  margin-top:0;
  margin-bottom:0;
}

#boton {
  font-size: 100px;
  text-align: center;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  transform-style: preserve-3d;
  perspective: 10px;
  width: 140px;
  height: 140px;
  font-family: "Arial";
  font-weight: bold;
  image-orientation: from-image;
  background-color: white;
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
  font-family: "Arial";
  font-weight: bold;
  color: white;
}

#boton3 {
  font-size: 100px;
  text-align: center;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  transform-style: preserve-3d;
  perspective: 10px;
  width: 140px;
  height: 140px;
  background-color: #ffcc33;
  font-family: "Arial";
  font-weight: bold;
}

#cliente {
  font-family: "Calibri";
  font-size: 18px;
  text-align: center;
  color: white;
  background-color: #303030;
}



</style></head>
  <body id="cliente">
  
    <form action="/pedestal/{{$codigo}}/imprime" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
        <input type="hidden" name="especialidad_id" value="{{$datosTicket['especialidad_id']}}" id="especialidad">
        <input type="hidden" name="personaApellidoP" value="{{$datosTicket['personaApellidoP']}}">
        <input type="hidden" name="personaApellidoM" value="{{$datosTicket['personaApellidoM']}}">
        <input type="hidden" name="personaNombre" value="{{$datosTicket['personaNombre']}}">
        <input type="hidden" name="paciente_id" value="{{$datosTicket['paciente_id']}}">
        <input type="hidden" name="codigo" value="{{$datosTicket['codigo']}}">
        <input type="hidden" name="hospital_id" value="{{$datosTicket['hospital_id']}}">
        <input type="hidden" name="tipo" value="{{$datosTicket['tipo']}}">
        <input type="hidden" name="idConsultorio" value="{{$datosTicket['idConsultorio']}}" id="idConsultorio" >

      <h2>CANTIDAD DE TICKETS</h2>
      <div style=" display: block; margin-left: auto; margin-right: auto; width: 50%;">
        <table  border="0">
          <tbody>
            <tr>
              <td>
              <input name="numTickets" id="inputNum" class="inputsize"   required="required">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    <br>
  
		<div width="40%" align="center">
		  <table div="" style="width: 40%;" ;="" cellspacing="5" border="0">
		    <tbody>
		      <tr>
		        <td><button  type="button" id="boton" onclick="setTextInput(1)" >1</button></td>
		        <td><button  type="button" id="boton" onclick="setTextInput(2)" >2</button><br></td>
		        <td><button  type="button" id="boton" onclick="setTextInput(3)" >3</button><br>
		        </td>
		        <td style="text-align: left;"><button name="1" value="1" type="button" id="boton3" onclick="delInput()">«</button><br>
		        </td>
		      </tr>
		      <tr>
		        <td> <button  type="button" id="boton" onclick="setTextInput(4)">4</button><br>
		        </td>
		        <td><button  type="button" id="boton"  onclick="setTextInput(5)">5</button><br>
		        </td>
		        <td><button  type="button" id="boton"  onclick="setTextInput(6)">6</button><br>
		        </td>
		        <td><button  type="button" id="boton"  onclick="setTextInput(0)">0</button><br>
		        </td>
		      </tr>
		      <tr>
		        <td><button  type="button" id="boton"  onclick="setTextInput(7)">7</button><br>
		        </td>
		        <td><button  type="button" id="boton"  onclick="setTextInput(8)">8</button><br>
		        </td>
		        <td><button  type="button" id="boton"  onclick="setTextInput(9)">9</button><br>
		        </td>
		        <td><button name="ENTRAR" value="ENTRAR" type="submit" id="boton2">ENTRAR</button><br>
		        </td>
		      </tr>
		    </tbody>
		  </table>
		</div>
	</form>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header"></div>
				<div class="modal-body">
					<div class="dangerstyle" style="color:#ff5959;" id="u184-4">
						<p>{{session('message')}}</p>
				   	</div>
				</div>
			</div>
		</div>
	</div>

    <br>


	@if(session('message'))
		<script>
       	$('#myModal').modal('show');
   		</script>
	@endif

  </body>

	<script>
		function setTextInput(number) {
			if(document.getElementById("inputNum").value.length <= 8 )
				document.getElementById("inputNum").value += number;
		}

		function delInput() {
			var number = document.getElementById("inputNum").value;
			if(number.length>0)
			{
				var newNumber = number.substr(0, number.length-1);
				document.getElementById("inputNum").value = newNumber;
			}
		}

		function clearInput() {
			document.getElementById("inputNum").value ="";
		}
	</script>

</html>
