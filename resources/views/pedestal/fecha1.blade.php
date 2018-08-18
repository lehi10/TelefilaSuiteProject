<!DOCTYPE html>
<html class="html css_verticalspacer" lang="es-ES">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  
  
  
  <title>fecha</title>
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

  <div class="clearfix gradient" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu275"><!-- group -->
    <div class="browser_width" id="u275-bw">
     <div id="u275"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u281"><!-- image -->
     <img class="block" id="u281_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
    </div>
    <div class="clearfix" id="u977-4"><!-- content -->
     <p>Hola! </p>
    </div>
    <a class="nonblock nontext museBGSize" id="u978" href="javascript:history.back()"><!-- simple frame --></a>
   </div>
   <div class="clearfix grpelem" id="pu231-4"><!-- column -->
    <div class="clearfix colelem" id="u231-4"><!-- content -->
     <p>¿Qué día necesitas atenderte?</p>
    </div>
    {{--
    <form action="/pedestal/{{$codigo}}/imprime" method="post" id="form">
      {{csrf_field()}}
      <input type="hidden" name="paciente_id" value='{{$paciente_id}}'>
      <input type="hidden" name="especialidad_id" value='{{$especialidad_id}}'>
      <input type="hidden" name="dia" value='' id="dia">
      <!-- <input type="hidden" name="mes" value='{{$mes}}'>
      <input type="hidden" name="year" value='{{$year}}'> -->


    </form>
    --}}
    
    <div class="browser_width colelem" id="u310-bw">
     <div id="u310"><!-- group -->
      <div class="col-xs-12 row" style="padding: 5px 10px 5px 10px; margin:5px 10% 5px 10%;"> 

      <div class="padre">
        @foreach($fechas as $fecha)
            <div class="hijo" id="u633">
            <a href="#" onclick="document.getElementById('form').submit()">
                <div class="clearfix colelem" id="u621-4"><!-- content -->
                <p>{{$fecha->formatLocalized('%d')}}</p>
                </div>
                <div class="clearfix colelem" id="u595-4"><!-- content -->
                <p>{{$fecha->formatLocalized('%A')}}</p>
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
   <p>Mes</p>
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
   </body>
</html>
