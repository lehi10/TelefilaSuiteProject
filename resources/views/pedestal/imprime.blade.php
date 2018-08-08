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
        <a class="nonblock nontext museBGSize clearfix grpelem" id="u841" href="fecha.html"><!-- group --><div class="clip_frame grpelem" id="u948"><!-- image --><img class="block" id="u948_img" src="images/check.png?crc=501764073" alt="" width="116" height="114"/></div></a>
        <div class="clearfix grpelem" id="u880-6"><!-- content -->
         <p>Se ha reservado temporalmente tu turno con el Dr. {{$medico->nombres.' '.$medico->apellidos }} para la especialidad de {{$consultorio->especialidad->nombre}}  para el {{$cita->fecha}} a las {{$cita->horaInicio}}. Dale en IMPRIMIR y acércate a caja a <span id="u880-2">pagar S/.{{$consultorio->especialidad->tarifa}}</span> y así confirmar tu turno.</p>
        </div>
       </div>

        
        
       
      <a class="nonblock nontext museBGSize clearfix colelem" id="u883" onclick="print()" href="{{url('pedestal/imprimiendo')}}"><!-- group --><div class="clearfix grpelem" id="u884-4"><!-- content --><p>IMPRIMIR</p></div></a>
       
       

       <div class="clearfix colelem" id="u895"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u889-4" href="{{url('pedestal')}}"><!-- content --><p>Cancelar</p></a>
        <a class="nonblock nontext rounded-corners grpelem" id="u892" href="{{url('pedestal')}}"><!-- simple frame --></a>
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
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   
   
<script>
function print() {
    ventimp.print();
    window.location.replace("/pedestal/imprimiendo");
}
</script>

   </body>

</html>
