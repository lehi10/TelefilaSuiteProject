<!DOCTYPE html>
<html class=" html css_verticalspacer" lang="es-ES">
 <head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <title>imprime</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="/css/imprime.css?crc=259043253" id="pagesheet"/>


  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
    <script type="text/javascript">
      document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/basic:n4:default.js" type="text/javascript">\x3C/script>');
    </script>
   </head>
 <body>

@if($tipo="otro")

    <div class="clearfix gradient" id="page"><!-- column -->
      <div class="position_content" id="page_position_content">
        <div class="clearfix colelem" id="pu839"><!-- group -->
        <div class="browser_width" id="u839-bw">
          <div id="u839"><!-- simple frame --></div>
        </div>
        <div class="clearfix" id="u847-4"><!-- content -->
          <p>Cliente {{$paciente}} </p>
        </div>
        <div class="clip_frame" id="u844"><!-- image -->
          <img class="block" id="u844_img" src="/images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
        </div>
        <a class="nonblock nontext museBGSize" id="u852" href="fecha.html"><!-- simple frame --></a>
        </div>
        <div class="clearfix colelem" id="u846-4"><!-- content -->
        <p>Gracias por usar nuestros servicios</p>
        </div>
        <div class="browser_width colelem" id="u853-bw">
        <div id="u853"><!-- column -->
          <div class="clearfix" id="u853_align_to_page">

            <div class="clearfix colelem" id="pu841"><!-- group -->

              <a class="nonblock nontext museBGSize clearfix grpelem" id="u841" href="fecha.html"><!-- group -->
                <div class="clip_frame grpelem" id="u948"><!-- image --><img class="block" id="u948_img" src="images/check.png?crc=501764073" alt="" width="116" height="114"/>
                </div>
              </a>
                <div class="clearfix grpelem" id="u880-6"><!-- content -->
                  <p>
                  
                  S/.{{$tarifa}}
                  Dale en IMPRIMIR </span> .</p>
                </div>
            </div>
          <a class="nonblock nontext museBGSize clearfix colelem" id="u883" onclick="imprimir('ticket')" ><!-- group -->
            <div class="clearfix grpelem" id="u884-4"><!-- content -->
              <p>IMPRIMIR</p>
            </div>
          </a>

          <div class="clearfix colelem" id="u895"><!-- group -->
            <a class="nonblock nontext clearfix grpelem" id="u889-4" href="{{url('pedestal/'.$codigo)}}"><!-- content --><p>No imprimir</p></a>
            <a class="nonblock nontext rounded-corners grpelem" id="u892" href="{{url('pedestal/'.$codigo)}}"><!-- simple frame --></a>
          </div>
          </div>
        </div>
        </div>
        <div class="verticalspacer" data-offset-top="542" data-content-above-spacer="541" data-content-below-spacer="71"></div>
      </div>
      </div>
      <div class="preload_images">
      <img class="preload" src="/images/back.png?crc=107087755" alt=""/>
      <img class="preload" src="/images/medgen_a.png?crc=3923899377" alt=""/>
      <img class="preload" src="/images/largo_b.png?crc=4172065039" alt=""/>
      </div>
      <!-- Other scripts -->

      <!-- RequireJS script -->
      <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>

    <div style="visibility: hidden; ">
      <div id="ticket">

      </div>
    </div>



Real Hotel Monterrey 
 
HOLA, <Nombre y apellido>
Bienvenido a los baños termales

Ticket N° <Codigo de ticket>  
Monto pagado: <Precio>
Servicio: <consultorio>
<Lunes, 20 de mayo 2019>
<11:00 am>

PUEDE CANJEAR ESTE TICKET
POR UNA BOLETA DE VENTA 

POR SU SEGURIDAD:
- No corra en los bordes de la piscina
- Abstengase de sobreexponerse al agua caliente
- SI sufre alguna enfermedad que le pueda afectar el vapor, abstengase.

******QUE TENGA UNA GRATA ESTADIA ****



    <script>
    function imprimir(elemento){
      var ticketHTML=document.getElementById(elemento);
      var ventana = window.open('', 'PRINT', 'height=10,width=1');

      ventana.document.write('<html><head><title>' + document.title + '</title>');
        ventana.document.write(' <h2>{{$hospital->nombre}}</h2>');
        ventana.document.write(' {{$hospital->direccion}}<br>');
      
      ventana.document.write('<hr>');
        ventana.document.write('ACERCATE A CAJA PARA <br> VALIDAR SU TICKET ');
        ventana.document.write('S/.{{$tarifa}}');
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


@else


    <div class="clearfix gradient" id="page"><!-- column -->
      <div class="position_content" id="page_position_content">
        <div class="clearfix colelem" id="pu839"><!-- group -->
        <div class="browser_width" id="u839-bw">
          <div id="u839"><!-- simple frame --></div>
        </div>
        <div class="clearfix" id="u847-4"><!-- content -->
          <p>Hola! {{$paciente->nombres}} {{$paciente->apellidos}}</p>
        </div>
        <div class="clip_frame" id="u844"><!-- image -->
          <img class="block" id="u844_img" src="/images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
        </div>
        <a class="nonblock nontext museBGSize" id="u852" href="fecha.html"><!-- simple frame --></a>
        </div>
        <div class="clearfix colelem" id="u846-4"><!-- content -->
        <p>Gracias por reservar su cita</p>
        </div>
        <div class="browser_width colelem" id="u853-bw">
        <div id="u853"><!-- column -->
          <div class="clearfix" id="u853_align_to_page">

            <div class="clearfix colelem" id="pu841"><!-- group -->

              <a class="nonblock nontext museBGSize clearfix grpelem" id="u841" href="fecha.html"><!-- group -->
                <div class="clip_frame grpelem" id="u948"><!-- image --><img class="block" id="u948_img" src="images/check.png?crc=501764073" alt="" width="116" height="114"/>
                </div>
              </a>
                <div class="clearfix grpelem" id="u880-6"><!-- content -->
                  <p>Código : {{$cita->id}}</p>
                  <p>Se ha reservado temporalmente tu turno con el Dr. {{$medico->nombres.' '.$medico->apellidos }} para la especialidad de {{$consultorio->especialidad->nombre}}  para el {{$cita->fecha}} a las {{$cita->horaInicio}}. Dale en IMPRIMIR y acércate a caja a <span id="u880-2">pagar S/.{{$consultorio->especialidad->tarifa}}</span> y así confirmar tu turno.</p>
                </div>
            </div>
          <a class="nonblock nontext museBGSize clearfix colelem" id="u883" onclick="imprimir('ticket')" ><!-- group -->
            <div class="clearfix grpelem" id="u884-4"><!-- content -->
              <p>IMPRIMIR</p>
            </div>
          </a>

          <div class="clearfix colelem" id="u895"><!-- group -->
            <a class="nonblock nontext clearfix grpelem" id="u889-4" href="{{url('pedestal/'.$codigo)}}"><!-- content --><p>Cancelar</p></a>
            <a class="nonblock nontext rounded-corners grpelem" id="u892" href="{{url('pedestal/'.$codigo)}}"><!-- simple frame --></a>
          </div>
          </div>
        </div>
        </div>
        <div class="verticalspacer" data-offset-top="542" data-content-above-spacer="541" data-content-below-spacer="71"></div>
      </div>
      </div>
      <div class="preload_images">
      <img class="preload" src="/images/back.png?crc=107087755" alt=""/>
      <img class="preload" src="/images/medgen_a.png?crc=3923899377" alt=""/>
      <img class="preload" src="/images/largo_b.png?crc=4172065039" alt=""/>
      </div>
      <!-- Other scripts -->

      <!-- RequireJS script -->
      <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>

    <div style="visibility: hidden; ">
      <div id="ticket">

        {!! '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("$cita->id ", "C39+",2,30,array(1,1,1), true) . '" alt="barcode"   />' !!}
      </div>
    </div>


    <script>
    function imprimir(elemento){
      var ticketHTML=document.getElementById(elemento);
      var ventana = window.open('', 'PRINT', 'height=10,width=1');
      ventana.document.write('<html><head><title>' + document.title + '</title>');
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
  
   </body>

</html>
