@extends('paciente.main_paciente')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "fecha.css"], "outOfDate":[]};
</script>
  
  <title>fecha</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/fecha.css?crc=251659439" id="pagesheet"/>
@endsection  

@section('content')
   <div class="clearfix grpelem" id="pu275"><!-- group -->
    <div class="browser_width" id="u275-bw">
     <div id="u275"><!-- simple frame --></div>
    </div>
    <div class="clip_frame" id="u281"><!-- image -->
     <img class="block" id="u281_img" src="images/logo_alpha2.png?crc=4239319242" alt="" width="171" height="42"/>
    </div>
    <div class="clearfix" id="u977-4"><!-- content -->
     <p>Hola! Rolando Ancajima</p>
    </div>
    <a class="nonblock nontext museBGSize" id="u978" href="index.html"><!-- simple frame --></a>
   </div>
   <div class="clearfix grpelem" id="pu231-4"><!-- column -->
    <div class="clearfix colelem" id="u231-4"><!-- content -->
     <p>¿Qué día necesitas atenderte?</p>
    </div>
    <div class="browser_width colelem" id="u310-bw">
     <div id="u310"><!-- group -->
      <div class="clearfix" id="u310_align_to_page">
       <div class="clearfix grpelem" id="pu291"><!-- column -->
        <div class="museBGSize clearfix colelem" id="u291"><!-- column -->
         <div class="clearfix colelem" id="u621-4"><!-- content -->
          <p>HOY</p>
         </div>
         <div class="clearfix colelem" id="u595-4"><!-- content -->
          <p>Lunes 18</p>
         </div>
        </div>
        <div class="museBGSize clearfix colelem" id="u770"><!-- column -->
         <div class="clearfix colelem" id="u776-4"><!-- content -->
          <p>25</p>
         </div>
         <div class="clearfix colelem" id="u773-4"><!-- content -->
          <p>Lunes</p>
         </div>
        </div>
       </div>
       <div class="clearfix grpelem" id="pu633"><!-- column -->
        <div class="museBGSize clearfix colelem" id="u633"><!-- column -->
         <div class="clearfix colelem" id="u636-4"><!-- content -->
          <p>19</p>
         </div>
         <div class="clearfix colelem" id="u639-4"><!-- content -->
          <p>Martes</p>
         </div>
        </div>
        <div class="museBGSize clearfix colelem" id="u749"><!-- column -->
         <div class="clearfix colelem" id="u764-4"><!-- content -->
          <p>26</p>
         </div>
         <div class="clearfix colelem" id="u761-4"><!-- content -->
          <p>Martes</p>
         </div>
        </div>
       </div>
       <div class="clearfix grpelem" id="pu659"><!-- column -->
        <div class="museBGSize clearfix colelem" id="u659"><!-- column -->
         <div class="clearfix colelem" id="u662-4"><!-- content -->
          <p>20</p>
         </div>
         <div class="clearfix colelem" id="u665-4"><!-- content -->
          <p>Miercoles</p>
         </div>
        </div>
        <div class="museBGSize clearfix colelem" id="u767"><!-- column -->
         <div class="clearfix colelem" id="u755-4"><!-- content -->
          <p>27</p>
         </div>
         <div class="clearfix colelem" id="u758-4"><!-- content -->
          <p>Miercoles</p>
         </div>
        </div>
       </div>
       <div class="clearfix grpelem" id="pu716"><!-- column -->
        <div class="museBGSize clearfix colelem" id="u716"><!-- column -->
         <div class="clearfix colelem" id="u731-4"><!-- content -->
          <p>21</p>
         </div>
         <div class="clearfix colelem" id="u722-4"><!-- content -->
          <p>Jueves</p>
         </div>
        </div>
        <a class="nonblock nontext museBGSize clearfix colelem" id="u734" href="imprime.html"><!-- column --><div class="clearfix colelem" id="u752-4"><!-- content --><p>28</p></div><div class="clearfix colelem" id="u737-4"><!-- content --><p>Jueves</p></div></a>
       </div>
       <div class="clearfix grpelem" id="pu725"><!-- column -->
        <div class="museBGSize clearfix colelem" id="u725"><!-- column -->
         <div class="clearfix colelem" id="u728-4"><!-- content -->
          <p>22</p>
         </div>
         <div class="clearfix colelem" id="u719-4"><!-- content -->
          <p>Viernes</p>
         </div>
        </div>
        <div class="museBGSize clearfix colelem" id="u740"><!-- column -->
         <div class="clearfix colelem" id="u746-4"><!-- content -->
          <p>29</p>
         </div>
         <div class="clearfix colelem" id="u743-4"><!-- content -->
          <p>Viernes</p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="537" data-content-above-spacer="537" data-content-below-spacer="62"></div>
   <div class="clearfix grpelem" id="u989-4"><!-- content -->
    <p>JULIO</p>
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
@endsection

@section('footer')
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
@endsection