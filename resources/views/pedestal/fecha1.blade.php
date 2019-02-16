<!DOCTYPE html>
<html class="html css_verticalspacer" lang="es-ES">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>

  <title>Fecha</title>
  <!-- CSS -->
  <link href="/assets/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="/css/fecha.css?crc=251659439" id="pagesheet"/>

  <!-- JS includes -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/basic:n4:default.js" type="text/javascript">\x3C/script>');
</script>

  <style>
    .padre {
      /* IMPORTANTE */
      text-align: center;
    }
    .hijo {
      padding: 10px;
      margin: 10px;
      /* IMPORTANTE */
      display: inline-block;
    }
  </style>
   </head>
 <body>

   {{$idConsultorio}}

  <div class="clearfix gradient" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu275"><!-- group -->
    <div class="browser_width" id="u275-bw">
     <div id="u275"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u281"><!-- image -->
     <img class="block" id="u281_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
    </div>
    <div class="clearfix" id="u977-4"><!-- content -->
     <p>Hola! {{$nombres}} {{$apellidos}} </p>
    </div>
    <a class="nonblock nontext museBGSize" id="u978" href="javascript:history.back()"><!-- simple frame --></a>
   </div>
   <div class="clearfix grpelem" id="pu231-4"><!-- column -->
    <div class="clearfix colelem" id="u231-4"><!-- content -->
     <p>¿Qué día necesitas atenderte?</p>
    </div>
    <form action="/pedestal/{{$codigo}}/imprime" method="post" id="form">
      {{csrf_field()}}
      <input type="hidden" name="paciente_id" value='{{$paciente_id}}'>
      <input type="hidden" name="especialidad_id" value='{{$especialidad_id}}'>
      <input type="hidden" name="dia" value='' id="dia">
      <input type="hidden" name="idConsultorio" value='{{$idConsultorio}}'>
    </form>

    <div class="browser_width colelem" id="u310-bw">
     <div id="u310"><!-- group -->
      <div class="col-xs-12 row" style="padding: 5px 10px 5px 10px; margin:5px 10% 5px 10%;">
      <div class="padre">
        @foreach($fechas as $fecha)
            <div class="hijo" id= @if($fecha['disp']<=0) 'u770' @elseif ($fecha['disp']<=5 and $fecha['disp']>=0) 'u291' @else 'u633' @endif   >
            <a href="#" onclick="mandarForm('{{$fecha['fecha']->format('Y-m-d')}}')">
                <div class="clearfix colelem fecha" id="u621-4"><!-- content -->
                <p>{{$fecha['fecha']->formatLocalized('%d')}}  </p>
                </div>
                <div class="clearfix colelem" id="u595-4"><!-- content -->
                <p>{{ $day_dias[ucfirst($fecha['fecha']->formatLocalized('%A'))]}}</p>
                </div>
            </a>
            </div>
        @endforeach
      </div>
      </div>
     </div>
    </div>
    <script>
    </script>

   </div>
   <div class="verticalspacer" data-offset-top="537" data-content-above-spacer="537" data-content-below-spacer="62"></div>
   <div class="clearfix grpelem" id="u989-4"><!-- content -->
   <p>{{$months_meses[ucfirst($Pmes)]}}</p>
   </div>
   <div class="rounded-corners grpelem" id="u787"><!-- simple frame --></div>
   <div class="clearfix grpelem" id="u796-4"><!-- content -->
    <p>No hay disponibilidad</p>
   </div>
   <div class="rounded-corners grpelem" id="u790"><!-- simple frame --></div>
   <div class="clearfix grpelem" id="u808-4"><!-- content -->
    <p>Ultimos cupos</p>
   </div>
   <div class="rounded-corners grpelem" id="u793"><!-- simple frame --></div>
   <div class="clearfix grpelem" id="u802-4"><!-- content -->
    <p>Disponible</p>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/back.png?crc=107087755" alt=""/>
   <img class="preload" src="images/boton_blancob.png?crc=369233959" alt=""/>
  </div>

      <script>
          function mandarForm(value){
            if(value)
            {
              $('#dia').val(value);
              $('#form').submit();
            }
          }
      </script>

  <!-- Other scripts -->

  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
