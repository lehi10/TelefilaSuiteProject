@extends('superUsuario.main')

@section('enlaces')
<script>
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["/scripts/museutils.js", "/scripts/museconfig.js", "/scripts/jquery.watch.js", "/scripts/require.js", "/css/cliente.css"], "outOfDate":[]};
</script>
  
  <title>Resultado de usuarios</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/cliente.css?crc=381638368" id="pagesheet"/>

@endsection

@section('header')
<div class="browser_width colelem" id="u226-bw">
    <div id="u226"><!-- group -->
     <div class="clearfix" id="u226_align_to_page">
      <div class="clearfix grpelem" id="u227-4"><!-- content -->
       <p>SUITE CENTRO DE SALUD</p>
      </div>
      <div class="clip_frame grpelem" id="u232"><!-- image -->
       <img class="block" id="u232_img" src="/images/logo_alpha.png?crc=4023370297" alt="" data-image-width="141" data-image-height="35"/>
      </div>
     </div>
    </div>
   </div>
@endsection

@section('content')
    
    <div class="clearfix colelem" id="u279"><!-- column -->
        <div class="clearfix colelem" id="u282-4"><!-- content -->
         <p>  Resultados:</p>
        </div>
        <table style="width:90%; margin:30px; ">
          <tr>
          
            <th width="8%"></th>
            <th>Username </th>
          </tr>
          @foreach($usuarios as $usuario)
            <tr>
              <td>{{$usuario->username}}</td>
              <td>{{$usuario->update_at}}</td>
            </tr>
          @endforeach
          
      </table>
      
    </div>
@endsection