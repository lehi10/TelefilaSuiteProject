@extends('superUsuario.main')


@section('enlaces')
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>telefila</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/index.css" id="pagesheet"/>
@endsection

@section('header')
<div class="browser_width colelem" id="u97-bw">
    <div id="u97"><!-- group -->
     <div class="clearfix" id="u97_align_to_page">
      <div class="clip_frame grpelem" id="u119"><!-- image -->
       <img class="block" id="u119_img" src="images/logo_alpha.png?crc=4023370297" alt="" data-image-width="141" data-image-height="35"/>
      </div>
     </div>
    </div>
</div>
@endsection

@section('content')

   <div class="browser_width" id="u611-bw">
    <div class="pinned-colelem" id="u611"><!-- simple frame --></div>
   </div>
   <div class="clearfix colelem" id="u94-5"><!-- content -->
    <p id="u94-3"><span id="u94">Suite Telefila </span><span id="u94-2">v. 1.1</span></p>
   </div>
   <div class="clearfix colelem" id="pu129-4"><!-- group -->
    
   <form action="superUsuario/listaClientes" method="get" >
      <div class="clearfix grpelem" id="u129-4"><!-- content -->
        <p>Clientes: </p>
      </div>
      <div class="clearfix grpelem" id="u196"><!-- group -->
        <div class="clearfix grpelem" id="u215"><!-- column -->
          <input type="text"  name="clienteEntrada"><br>
        </div>
        </div>
        <div class="clearfix grpelem" id="u145"><!-- group -->
        <div class="pointer_cursor clearfix grpelem" id="u139"><!-- group -->
          <input type="submit"  value="CARGAR" class="nonblock nontext clearfix grpelem" id="u142-4" ><!-- content --></input>
        </div>
      </div>
      
    </form>

   </div>
   <div class="clearfix colelem" id="pu132-4"><!-- group -->
    <div class="clearfix grpelem" id="u132-4"><!-- content -->
     <p>Nuevo Cliente:</p>
    </div>
    <div class="clearfix grpelem" id="u187"><!-- group -->
     <div class="pointer_cursor clearfix grpelem" id="u189"><!-- group -->
      <a class="block" href="superUsuario/nuevoCliente"><!-- Block link tag --></a>
      <a class="nonblock nontext clearfix grpelem" id="u188-4" href="superUsuario/nuevoCliente"><!-- content --><p>AGREGAR</p></a>
     </div>
    </div>
   </div>
@endsection