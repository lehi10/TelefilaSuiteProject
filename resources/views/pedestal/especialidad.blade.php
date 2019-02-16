<!DOCTYPE html>
<html class=" html css_verticalspacer" lang="es-ES">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>


  <title>Especialidad</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="/css/especialidad.css?crc=4201154614" id="pagesheet"/>

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

  <!-- Other scripts -->
  <!-- JS includes -->
   </head>
 <body>
  <div class="clearfix gradient" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu563"><!-- group -->
     <div class="browser_width" id="u563-bw">
      <div id="u563"><!-- simple frame --></div>
     </div>
     <div class="clip_frame" id="u560"><!-- image -->
      <img class="block" id="u560_img" src="/images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
     </div>
     <div class="clearfix" id="u983-4"><!-- content -->
      <p>Hola! {{$paciente->nombres}} {{$paciente->apellidos}} </p>
     </div>
     <a class="nonblock nontext museBGSize" id="u984" href="javascript:history.back()"><!-- simple frame --></a>
    </div>
    <div class="clearfix colelem" id="u572-4"><!-- content -->
     <p>¿En que te vas a atender?</p>
    </div>
    <div class="browser_width colelem" id="u559-bw">
     <div id="u559"><!-- group -->

    <form action="/pedestal/{{$codigo}}/fecha" method="post" id="form">
      {{csrf_field()}}
      <input type="hidden" name="especialidad_id" value="" id="especialidad">
      <input type="hidden" name="apellidos" value="{{$paciente->apellidos}}">
      <input type="hidden" name="nombres" value="{{$paciente->nombres}}">
      <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
      <input type="hidden" name="codigo" value="{{$codigo}}">
      <input type="hidden" name="hospital_id" value="{{$paciente->hospital_id}}">
      <input type="hidden" name="idConsultorio" value="" id="idConsultorio">
    </form>

    <div class="padre">
    @if(isset($especialidades))
      @foreach ( $especialidades as $especialidad )
        <div class="hijo">
            <a style='background:transparent url("/images/{{$especialidad->id}}.png?crc=3939622240")' class="nonblock nontext museBGSize colelem" id="u570" href="#" onclick="mandarForm({{$especialidad->id}},{{$especialidad->idConsultorio}})"><!-- simple frame --></a>
        </div>
        @endforeach
    @endif

    @if(isset($especialidadesReferidas))

    <h2> <b> Especialidades referidas: </b> </h2>
      @foreach ( $especialidadesReferidas as $especialidad )
        @if(!$especialidades->contains('id',$especialidad->id))
        <div class="hijo">
          <a style='background:transparent url("/images/{{$especialidad->id}}.png?crc=3939622240")' class="nonblock nontext museBGSize colelem" id="u570" href="#" onclick="mandarForm({{$especialidad->id}},{{$especialidad->idConsultorio}})"><!-- simple frame --></a>z
        </div>
        @endif
      @endforeach
      @endif
    </div>

     </div>
    </div>
    <div class="verticalspacer" data-offset-top="534" data-content-above-spacer="534" data-content-below-spacer="78"></div>
   </div>
  </div>


  <div class="preload_images">
   <img class="preload" src="/images/back.png?crc=107087755" alt=""/>
   <img class="preload" src="/images/medgen_b.png?crc=300562693" alt=""/>
   <img class="preload" src="/images/gine_b.png?crc=26139113" alt=""/>
   <img class="preload" src="/images/dental_b.png?crc=463551447" alt=""/>
   <img class="preload" src="/images/obstetricia_b.png?crc=494308813" alt=""/>
   <img class="preload" src="/images/pedia_b.png?crc=259735835" alt=""/>
   <img class="preload" src="/images/medint_b.png?crc=48247206" alt=""/>
   <img class="preload" src="/images/oftal_b.png?crc=102071850" alt=""/>
   <img class="preload" src="/images/cirujia_b.png?crc=4228318749" alt=""/>
   <img class="preload" src="/images/nutri_b.png?crc=8563566" alt=""/>
   <img class="preload" src="/images/cardio_b.png?crc=4148589182" alt=""/>
  </div>
  <!-- Other scripts -->

  <script>
    function mandarForm(especialidad,idConsult)
    {
      document.getElementById('especialidad').value = especialidad;
      document.getElementById('idConsultorio').value = idConsult;
      document.getElementById('form').submit();
    }
  </script>


  <!-- RequireJS script -->
  <script src="/scripts/require.js?crc=244322403" type="text/javascript" async data-main="/scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
