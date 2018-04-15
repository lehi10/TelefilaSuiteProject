@extends('main')

@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "cliente.css"], "outOfDate":[]};
</script>
  
  <title>cliente</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/cliente.css?crc=381638368" id="pagesheet"/>

@endsection

@section('header')
<div class="browser_width colelem" id="u226-bw">
    <div id="u226"><!-- group -->
     <div class="clearfix" id="u226_align_to_page">
      <div class="clearfix grpelem" id="u227-4"><!-- content -->
       <p>SUITE CENTRO DE SALUD</p>
      </div>
      <div class="clip_frame grpelem" id="u232"><!-- image -->
       <img class="block" id="u232_img" src="images/logo_alpha.png?crc=4023370297" alt="" data-image-width="141" data-image-height="35"/>
      </div>
     </div>
    </div>
   </div>
@endsection

@section('content')
<div class="clearfix colelem" id="pu231-4"><!-- group -->
    <div class="clearfix grpelem" id="u231-4"><!-- content -->
     <p>Bienvenido:</p>
    </div>
    <div class="clearfix grpelem" id="u270-4"><!-- content -->
     <p>Hospital de Apoyo Huaral</p>
    </div>
    <div class="clearfix grpelem" id="pu375"><!-- column -->
     <div class="rounded-corners colelem" id="u375"><!-- simple frame --></div>
     <div class="rounded-corners colelem" id="u372"><!-- simple frame --></div>
    </div>
    <div class="clearfix grpelem" id="u363"><!-- group -->
     <div class="pointer_cursor clearfix grpelem" id="u364"><!-- group -->
      <a class="block" href="nuevo_cliente.html"><!-- Block link tag --></a>
      <a class="nonblock nontext clearfix grpelem" id="u365-4" href="nuevo_cliente.html"><!-- content --><p>EDITAR PERFIL</p></a>
     </div>
    </div>
   </div>
   <div class="clearfix colelem" id="pu917"><!-- group -->
    <div class="clip_frame grpelem" id="u917"><!-- svg -->
     <img class="svg" id="u915" src="images/pasted-svg-50691x50.svg?crc=3973562438" alt="" data-mu-svgfallback="images/pasted%20svg%2050691x50_poster_.png?crc=495545644" data-image-width="20" data-image-height="20"/>
    </div>
    <div class="clearfix grpelem" id="u276"><!-- group -->
     <div class="clearfix grpelem" id="pu234-4"><!-- column -->
      <div class="clearfix colelem" id="u234-4"><!-- content -->
       <p>Usuarios:</p>
      </div>
      <div class="clearfix colelem" id="u273-4"><!-- content -->
       <p>Nuevo Usuario:</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu235"><!-- column -->
      <div class="clearfix colelem" id="u235"><!-- group -->
       <div class="clearfix grpelem" id="u228"><!-- column -->
        <div class="colelem" id="u230" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7771,M12=-0.6293,M21=0.6293,M22=0.7771,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="-2"><!-- simple frame --></div>
        <div class="colelem" id="u229" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7771,M12=-0.6293,M21=0.6293,M22=0.7771,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="-3"><!-- simple frame --></div>
       </div>
      </div>
      <div class="clearfix colelem" id="u239"><!-- group -->
       <div class="pointer_cursor clearfix grpelem" id="u240"><!-- group -->
        <a class="block" href="nuevo-usuario.html"><!-- Block link tag --></a>
        <a class="nonblock nontext clearfix grpelem" id="u241-4" href="nuevo-usuario.html"><!-- content --><p>AGREGAR</p></a>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u236"><!-- group -->
      <div class="clearfix grpelem" id="u238"><!-- group -->
       <div class="clearfix grpelem" id="u237-4"><!-- content -->
        <p>CARGAR</p>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="clearfix colelem" id="u279"><!-- column -->
    <div class="clearfix colelem" id="u282-4"><!-- content -->
     <p>Reportes:</p>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u285-4" href="http://#"><!-- content --><p>Resumen general según fechas</p></a>
    <a class="nonblock nontext clearfix colelem" id="u288-4" href="http://#"><!-- content --><p>Tickets generados según consultorio</p></a>
   </div>
@endsection