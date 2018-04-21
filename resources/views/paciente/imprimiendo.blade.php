@extends('paciente.main_paciente')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "imprimiendo.css"], "outOfDate":[]};
</script>
  
  <title>imprimiendo</title>
  <!-- CSS -->
  
  <link rel="stylesheet" type="text/css" href="css/imprimiendo.css?crc=4017479104" id="pagesheet"/>
@endsection

@section('content')
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu907"><!-- group -->
     <div class="browser_width" id="u907-bw">
      <div id="u907"><!-- simple frame --></div>
     </div>
     <div class="clip_frame" id="u913"><!-- image -->
      <img class="block" id="u913_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
     </div>
    </div>
    <div class="clearfix colelem" id="u906-4"><!-- content -->
     <p>Retire su ticket y páguelo en caja</p>
    </div>
    <div class="browser_width colelem" id="u911-bw">
     <div id="u911"><!-- column -->
      <div class="clearfix" id="u911_align_to_page">
       <div class="clip_frame colelem" id="u939"><!-- image -->
        <img class="block" id="u939_img" src="images/imagen%20pegada%20322x342.jpg?crc=4061717987" alt="" width="179" height="190"/>
       </div>
       <div class="clearfix colelem" id="u917-4"><!-- content -->
        <p>Gracias por usar telefila</p>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="542" data-content-above-spacer="541" data-content-below-spacer="71"></div>
   </div>
@endsection
 
@section('footer')
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
@endsection
