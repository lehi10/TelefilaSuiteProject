@extends('paciente.main_paciente')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "imprime.css"], "outOfDate":[]};
</script>
  
  <title>imprime</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/imprime.css?crc=259043253" id="pagesheet"/>
  <!-- Other scripts -->
@endsection
  
@section('content')
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu839"><!-- group -->
     <div class="browser_width" id="u839-bw">
      <div id="u839"><!-- simple frame --></div>
     </div>
     <div class="clearfix" id="u847-4"><!-- content -->
      <p>Hola! Rolando Ancajima</p>
     </div>
     <div class="clip_frame" id="u844"><!-- image -->
      <img class="block" id="u844_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
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
        <a class="nonblock nontext museBGSize clearfix grpelem" id="u841" href="fecha.html"><!-- group --><div class="clip_frame grpelem" id="u948"><!-- image --><img class="block" id="u948_img" src="images/check.png?crc=501764073" alt="" width="116" height="114"/></div></a>
        <div class="clearfix grpelem" id="u880-6"><!-- content -->
         <p>Se ha reservado temporalmente tu turno con el Dr. Armando Bejarano para la especialidad de Medicina General para el dia JUEVES 28 a las 12:15. Dale en IMPRIMIR y acércate a caja a <span id="u880-2">pagar S/.11.00</span> y así confirmar tu turno.</p>
        </div>
       </div>
       <a class="nonblock nontext museBGSize clearfix colelem" id="u883" href="imprimiendo.html"><!-- group --><div class="clearfix grpelem" id="u884-4"><!-- content --><p>IMPRIMIR</p></div></a>
       <div class="clearfix colelem" id="u895"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u889-4" href="index.html"><!-- content --><p>Cancelar</p></a>
        <a class="nonblock nontext rounded-corners grpelem" id="u892" href="index.html"><!-- simple frame --></a>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="542" data-content-above-spacer="541" data-content-below-spacer="71"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/back.png?crc=107087755" alt=""/>
   <img class="preload" src="images/medgen_a.png?crc=3923899377" alt=""/>
   <img class="preload" src="images/largo_b.png?crc=4172065039" alt=""/>
  @endsection

@section('footer')  
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
@endsection