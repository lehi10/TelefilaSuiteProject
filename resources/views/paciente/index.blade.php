@extends('paciente.main_paciente')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>Inicio</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=322861927" id="pagesheet"/>
  @endsection


 @section('content')
  <div class="clip_frame colelem" id="u103"><!-- image -->
    <img class="block" id="u103_img" src="images/logo_alpha1.png?crc=4209966205" alt="" width="212" height="53"/>
   </div>
   <div class="clearfix colelem" id="u184-4"><!-- content -->
    <p>Ingresa tu numero de DNI</p>
   </div>
   <form class="form-grp clearfix colelem" id="widgetu113" method="post" enctype="multipart/form-data" action="scripts/form-u113.php"><!-- none box -->
    <div class="clearfix grpelem" id="u129-4"><!-- content -->
     <p>Enviando formulario...</p>
    </div>
    <div class="clearfix grpelem" id="u127-4"><!-- content -->
     <p>El servidor ha detectado un error.</p>
    </div>
    <div class="clearfix grpelem" id="u126-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
    <button class="submit-btn NoWrap clearfix grpelem" id="u128-3" type="submit" value="&nbsp;" tabindex="2"><!-- content -->
     <div style="margin-top:-19px;height:19px;">
      <p>&nbsp;</p>
     </div>
    </button>
    <div class="fld-grp clearfix grpelem" id="widgetu118" data-required="false"><!-- none box -->
     <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem" id="u119-3"><!-- content --><textarea class="wrapped-input" id="widgetu118_input" name="custom_U118" tabindex="1"></textarea></span>
    </div>
   </form>
   <a class="nonblock nontext museBGSize clearfix colelem" id="u218" href="especialidad.html"><!-- group --><div class="clearfix grpelem" id="u199-4"><!-- content --><p>ENTRAR</p></div></a>
   <div class="verticalspacer" data-offset-top="393" data-content-above-spacer="392" data-content-below-spacer="108"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/largo_b.png?crc=4172065039" alt=""/>
   @endsection