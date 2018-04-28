
@extends('superUsuario.main')

  @section('enlaces')
  <script>
    if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["/scripts/museutils.js", "/scripts/museconfig.js", "/scripts/jquery.watch.js", "/scripts/require.js", "/css/nuevo-usuario.css"], "outOfDate":[]};
  </script>
  
  <link rel="shortcut icon" href="/images/nuevo-usuario-favicon.ico?crc=3940202540"/>
  <title>nuevo usuario</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/nuevo-usuario.css?crc=127623343" id="pagesheet"/>

  @endsection

  @section('header')
   <div class="browser_width colelem" id="u819-bw">
    <div id="u819"><!-- group -->
     <div class="clearfix" id="u819_align_to_page">
      <div class="clearfix grpelem" id="u814-4"><!-- content -->
       <p>SUITE CENTRO DE SALUD</p>
      </div>
      <div class="clip_frame grpelem" id="u799"><!-- image -->
       <img class="block" id="u799_img" src="/images/logo_alpha.png?crc=4023370297" alt="" data-image-width="141" data-image-height="35"/>
      </div>
     </div>
    </div>
   </div>
   @endsection

   @section('content')
   <div class="clearfix colelem" id="pu813-4"><!-- group -->
    <div class="clearfix grpelem" id="u813-4"><!-- content -->
     <p>Bienvenido:</p>
    </div>
    <div class="clearfix grpelem" id="u818-4"><!-- content -->
     <p>{{$nombre}}</p>
    </div>
   </div>
   
  {!!Form::open(['action'=>'SuperUsuarioController@storeUsuario','method'=>'POST'])!!}
  <input type="hidden" name="hospital_id" value="{{$id}}" >

   <div class="clearfix colelem" id="pu925"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem" id="u925" href="{{url()->previous()}}"><!-- svg --><img class="svg" id="u926" src="/images/pasted-svg-50691x50.svg?crc=3973562438" alt="" data-mu-svgfallback="/images/pasted%20svg%2050691x50_poster_.png?crc=495545644" data-image-width="20" data-image-height="20"/></a>
    <div class="clearfix grpelem" id="u817"><!-- column -->
     <div class="clearfix colelem" id="u816-4"><!-- content -->
      <p>- NUEVO USUARIO -</p>
     </div>
     <div class="clearfix colelem" id="pu832-4"><!-- group -->
      <div class="clearfix grpelem" id="u832-4"><!-- content -->
       <p>Nombres:</p>
      </div>
      {!!Form::text('nombre',null,['class'=>'grpelem','id'=>'u843'])!!}
      <div class="clearfix grpelem" id="u828-4"><!-- content -->
       <p>Apellidos:</p>
      </div>
      {!!Form::text('apellidos',null,['class'=>'grpelem','id'=>'u839'])!!}
      
     </div>
     <div class="clearfix colelem" id="pu831-4"><!-- group -->
      <div class="clearfix grpelem" id="u831-4"><!-- content -->
       <p>Celular:</p>
      </div>
      <div class="clearfix grpelem" id="u837-4"><!-- content -->
       <p>DNI:</p>
      </div>
      {!!Form::text('celular',null,['class'=>'grpelem','id'=>'u842'])!!}
      {!!Form::text('dni',null,['class'=>'grpelem','id'=>'u846'])!!}
      
     </div>
     <div class="clearfix colelem" id="pu834-4"><!-- group -->
      <div class="clearfix grpelem" id="u834-4"><!-- content -->
       <p>Rol:</p>
      </div>
       
       {!!Form::text('rol',null,['class'=>'grpelem','id'=>'u888'])!!}
        
     </div>
     <div class="clearfix colelem" id="pu900"><!-- group -->
      <div class="clearfix grpelem" id="u900"><!-- group -->
       <div class="clip_frame grpelem" id="u902"><!-- svg -->
        <img class="svg" id="u903" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
       </div>
       <div class="clearfix grpelem" id="u901-4"><!-- content -->
        <p>Agregar Foto</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="pu835-4"><!-- column -->
       <div class="clearfix colelem" id="u835-4"><!-- content -->
        <p>Usuario:</p>
       </div>
       <div class="clearfix colelem" id="u830-4"><!-- content -->
        <p>Clave:</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="pu845"><!-- column -->

       {!!Form::text('usuario',null,['class'=>'grpelem','id'=>'u845'])!!}
       {!!Form::password('clave',['class'=>'grpelem','id'=>'u841'])!!}
       
       <div class="clearfix colelem" id="u801"><!-- group -->
        <div class="clearfix grpelem" id="u802"><!-- group -->
        {!!Form::submit('AGREGAR',['class'=>'clearfix grpelem','id'=>'u803-4'])!!}
         
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   {!!Form::close()!!}
@endsection