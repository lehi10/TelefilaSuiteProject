<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Imprimir</title>
    <style type="text/css">
#fondo {
  background-color: black;
  font-size: 160px;
  font-family: "Arial";
  font-weight: bold;
  color: white;
  text-align: center;
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

#nombre {
  color: #ffcc00;
  font-weight: bold;
}

</style></head>

@if($tipo==="otro")

  <body id="cliente">
    <h1>BIENVENIDO  {{$persona[2]}} {{$persona[0]}}</h1>
    <h2>SERVICIO: {{$tipoServicio}} </h2>
    <h3>CANTIDAD DE TICKETS:  {{count($citas)}}</h3>
    
    
    @foreach ($citas as $idTicket )
        <h3>Nro:  {{$idTicket}}  ..... S/. {{$tarifa}}</h3>
    @endforeach
    <h2><strong>Total : S/. {{$precioTotal}}</strong></h2>
    
    <p><button name="IMPRIMIR" value="IMPRIMIR" type="button" id="boton2" onclick="imprimir('ticket')" >IMPRIMIR</button>
    </p>
    <div width="40%" align="center"><br>
    </div>
    CANCELAR<br>
  </body>
      <script type="text/javascript">
    function imprimir(elemento){
      
      var ticketHTML=document.getElementById(elemento);

      var ventana = window.open('','_blank','PRINT', 'height=10,width=1');
        ventana.document.write('<html><head><title> Imprime </title></head><body>');
        ventana.document.write('<FONT FACE="Arial" SIZE="2">');
        ventana.document.write(' <h2>{{$hospital->nombre}}</h2>');
        ventana.document.write('Hola, {{$persona[2]}} {{$persona[0]}}<br>');
        ventana.document.write('Bienvenido a los baños termales<br>');
        ventana.document.write('<hr>');
        ventana.document.write('Tickets : <br>');
        @foreach ($citas as $idTicket )
          ventana.document.write('Nro {{$idTicket}} .... S/. {{$precioTotal}}<br>');
        @endforeach
        ventana.document.write('Total : S/. {{$precioTotal}}');
        ventana.document.write('<hr>');
        
        ventana.document.write('Monto : S/. {{$tarifa}}<br>');
        ventana.document.write('Servicio : {{$tipoServicio}}<br>');
        ventana.document.write('Fecha : {{$fecha}}<br>');
        ventana.document.write('PUEDE CANJEAR ESTE TICKET POR UNA BOLETA DE VENTA<br>');
        ventana.document.write('<hr><br>');
        ventana.document.write('*POR SU SEGURIDAD*<br>');
        ventana.document.write('No corra en los bordes de la piscina.<br>');
        ventana.document.write('Abstanerse de sobreexponerse al agua caliente si sufre de alguna enfermedad.<br>');
        ventana.document.write('<hr>');
        ventana.document.write('"QUE TENGA UNA GRATA ESTADIA"');
        ventana.document.write('<hr>');
        ventana.document.write('www.realhotelmonterrey.com<br>');
        ventana.document.write('Baños termales | Restaurant | Hotel<br>');
        ventana.document.write('Reservas: +43349069 | +51.989061967<br>');
        ventana.document.write('<hr>');
      
  ventana.document.write('</FONT></body></html>');
 
  ventana.document.close();
  window.focus();
  
  ventana.print();
  
    var delayInMilliseconds = 6000; //5seconds
      setTimeout(function() {
  window.location.replace("/pedestal/{{$codigo}}/imprimiendo");
        ventana.close();
      }, delayInMilliseconds);
    }
    </script>
@else


<body id="cliente">
    <h1>BIENVENIDO   {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
    <h2>Código : {{$cita->id}}</h2>
    <h3>
      Se ha reservado temporalmente tu turno con el Dr. {{$medico->nombres.' '.$medico->apellidos }} 
      para la especialidad de {{$consultorio->especialidad->nombre}}  
      para el {{$cita->fecha}} a las {{$cita->horaInicio}}. 
      Dale en IMPRIMIR y acércate a caja a pagar S/.{{$consultorio->especialidad->tarifa}}
      y así confirmar tu turno.
    </h3>
    <p><button name="IMPRIMIR" value="IMPRIMIR" type="button" id="boton2" onclick="imprimir('ticket')" >IMPRIMIR</button>
    </p>
    <div width="40%" align="center"><br>
    </div>
    CANCELAR<br>
  
<div style="visibility: hidden; "> 
  <div id="ticket"> 
 
    {!! '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("$cita ", "C39+",2,30,array(1,1,1), true) . '" alt="barcode"   />' !!} 
  </div> 
</div> 

  </body>
  
  <script type="text/javascript"  >
    function imprimir(elemento){
      var ticketHTML=document.getElementById(elemento);
      var ventana = window.open('', 'PRINT', 'height=10,width=1');
      ventana.document.write('<html><head><title>' + document.title + '</title><body >');
        ventana.document.write(' <h2>{{$hospital->nombre}}</h2>');
        ventana.document.write(' {{$hospital->direccion}}<br>');
      ventana.document.write('<hr>');
        ventana.document.write('<strong>Código de Ticket: </strong>{{$cita->id}}<br>');
        ventana.document.write('<strong>Paciente : </strong>{{$paciente->apellidos}},{{$paciente->nombres}} <br>');
        ventana.document.write('<strong>DNI:</strong> {{$paciente->dni }}');
      ventana.document.write('<hr>');
        ventana.document.write(' <p>Medico: {{$medico->nombres.' '.$medico->apellidos }} <br>');
        ventana.document.write(' <stron>Especialidad:</strong> {{$consultorio->especialidad->nombre}}  <br>  ');
        ventana.document.write(' <strong>Fecha:</strong> {{$cita->fecha}} <br> ');
        ventana.document.write(' <strong>Hora:</strong> {{$cita->horaInicio}}<br>')
      ventana.document.write('<hr>');
        ventana.document.write('ACERCATE A CAJA PARA <br> VALIDAR SU TICKET ');
        ventana.document.write('S/.{{$consultorio->especialidad->tarifa}}');
      ventana.document.write('<hr>');
      ventana.document.write(ticketHTML.innerHTML);
      ventana.document.write('</body></html>');


      ventana.document.close();
      ventana.focus();
      ventana.print();
      ventana.close();
      window.location.replace("/pedestal/{{$codigo}}/imprimiendo");
    }




    </script>



@endif


</html>


