@extends('paciente.main_paciente')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "especialidad.css"], "outOfDate":[]};
</script>
  
  <title>especialidad</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/especialidad.css?crc=4201154614" id="pagesheet"/>
@endsection

@section('content')
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu563"><!-- group -->
     <div class="browser_width" id="u563-bw">
      <div id="u563"><!-- simple frame --></div>
     </div>
     <div class="clip_frame" id="u560"><!-- image -->
      <img class="block" id="u560_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
     </div>
     <div class="clearfix" id="u983-4"><!-- content -->
      <p>Hola! Rolando Ancajima</p>
     </div>
     <a class="nonblock nontext museBGSize" id="u984" href="fecha.html"><!-- simple frame --></a>
    </div>
    <div class="clearfix colelem" id="u572-4"><!-- content -->
     <p>¿En que te vas a atender?</p>
    </div>
    <div class="browser_width colelem" id="u559-bw">
     <div id="u559"><!-- group -->
      <div class="clearfix" id="u559_align_to_page">
       <div class="clearfix grpelem" id="pu573"><!-- column -->
        <a class="nonblock nontext museBGSize colelem" id="u573" href="fecha.html"><!-- simple frame --></a>
        <a class="nonblock nontext museBGSize colelem" id="u569" href="fecha.html"><!-- simple frame --></a>
       </div>
       <div class="clearfix grpelem" id="pu565"><!-- column -->
        <a class="nonblock nontext museBGSize colelem" id="u565" href="fecha.html"><!-- simple frame --></a>
        <a class="nonblock nontext museBGSize colelem" id="u567" href="fecha.html"><!-- simple frame --></a>
       </div>
       <div class="clearfix grpelem" id="pu564"><!-- column -->
        <a class="nonblock nontext museBGSize colelem" id="u564" href="fecha.html"><!-- simple frame --></a>
        <a class="nonblock nontext museBGSize colelem" id="u566" href="fecha.html"><!-- simple frame --></a>
       </div>
       <div class="clearfix grpelem" id="pu568"><!-- column -->
        <a class="nonblock nontext museBGSize colelem" id="u568" href="fecha.html"><!-- simple frame --></a>
        <a class="nonblock nontext museBGSize colelem" id="u562" href="fecha.html"><!-- simple frame --></a>
       </div>
       <div class="clearfix grpelem" id="pu570"><!-- column -->
        <a class="nonblock nontext museBGSize colelem" id="u570" href="fecha.html"><!-- simple frame --></a>
        <a class="nonblock nontext museBGSize colelem" id="u574" href="fecha.html"><!-- simple frame --></a>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="534" data-content-above-spacer="534" data-content-below-spacer="78"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/back.png?crc=107087755" alt=""/>
   <img class="preload" src="images/medgen_b.png?crc=300562693" alt=""/>
   <img class="preload" src="images/gine_b.png?crc=26139113" alt=""/>
   <img class="preload" src="images/dental_b.png?crc=463551447" alt=""/>
   <img class="preload" src="images/obstetricia_b.png?crc=494308813" alt=""/>
   <img class="preload" src="images/pedia_b.png?crc=259735835" alt=""/>
   <img class="preload" src="images/medint_b.png?crc=48247206" alt=""/>
   <img class="preload" src="images/oftal_b.png?crc=102071850" alt=""/>
   <img class="preload" src="images/cirujia_b.png?crc=4228318749" alt=""/>
   <img class="preload" src="images/nutri_b.png?crc=8563566" alt=""/>
   <img class="preload" src="images/cardio_b.png?crc=4148589182" alt=""/>
  @endsection

  @section('footer')
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
  @endsection
  