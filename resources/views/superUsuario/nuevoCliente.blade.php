@extends('superUsuario.main')


  <title>Nuevo Cliente</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/nuevo_cliente.css" id="pagesheet"/>

@section('enlaces')
<script>
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["/scripts/museutils.js", "/scripts/museconfig.js", "/scripts/jquery.watch.js", "/scripts/require.js", "/css/nuevo_cliente.css"], "outOfDate":[]};
</script>  

<style>
.bt_uploadFile {
    background:url(/images/pasted-svg-287179x246.svg?crc=213937591) no-repeat;
    width: 88px;
    height: 75px;
    border: none;
}
</style>

@endsection


  
@section('header')
  <div class="browser_width colelem" id="u352-bw">
    <div id="u352"><!-- group -->
     <div class="clearfix" id="u352_align_to_page">
      <div class="clearfix grpelem" id="u347-4"><!-- content -->
       <p>SUITE ADMINISTRADOR</p>
      </div>
      <div class="clip_frame grpelem" id="u332"><!-- image -->
       <img class="block" id="u332_img" src="/images/logo_alpha.png?crc=4023370297" alt="" data-image-width="141" data-image-height="35"/>
      </div>
     </div>
    </div>
   </div>
@endsection

@section('content')
   <div class="clearfix colelem" id="u351-4"><!-- content -->
    <p>Dar de alta a NUEVO CLIENTE</p>
   </div>
    
  {!!Form::open(['action'=>'SuperUsuarioController@store','method'=>'POST'])!!}

    <div class="clearfix colelem" id="pu934"><!-- group -->
      <a class="nonblock nontext clip_frame grpelem" id="u934" href="{{url()->previous()}}"><!-- svg --><img class="svg" id="u935" src="/images/pasted-svg-50691x50.svg?crc=3973562438" alt="" data-mu-svgfallback="/images/pasted%20svg%2050691x50_poster_.png?crc=495545644" data-image-width="20" data-image-height="20"/></a>
    
      <div class="clearfix grpelem" id="u350"><!-- column -->
        <div class="clearfix colelem" id="pu353-4"><!-- group -->
          <div class="clearfix grpelem" id="u353-4"><!-- content -->
            <p>Nombre del establecimiento:</p>
          </div>
          {!!Form::text('nombre',null,['class'=>'grpelem','id'=>'u348'])!!}
          
        </div>
      
        <div class="clearfix colelem" id="pu349-4"><!-- group -->
          <div class="clearfix grpelem" id="u349-4"><!-- content -->
            <p>RUC:</p>
          </div>
          {!!Form::text('ruc',null,['class'=>'grpelem','id'=>'u360'])!!}
          <div class="clearfix grpelem" id="u338-4"><!-- content -->
            <p>Director:</p>
          </div>
          {!!Form::text('director',null,['class'=>'grpelem','id'=>'u357'])!!}
        </div>

        <div class="clearfix colelem" id="pu378-4"><!-- group -->
          <div class="clearfix grpelem" id="u378-4"><!-- content -->
            <p>Dirección:</p>
          </div>
          {!!Form::text('direccion',null,['class'=>'grpelem','id'=>'u381'])!!}
        </div>

        <div class="clearfix colelem" id="pu384-4"><!-- group -->
          <div class="clearfix grpelem" id="u384-4"><!-- content -->
          <p>Ciudad:</p>
          </div>
          {!!Form::text('ciudad',null,['class'=>'grpelem','id'=>'u387'])!!}
          <div class="clearfix grpelem" id="u390-4"><!-- content -->
            <p>País:</p>
          </div>
          {!!Form::text('pais',null,['class'=>'grpelem','id'=>'u393'])!!}
        </div>

        <div class="clearfix colelem" id="pu402-4"><!-- group -->
          <div class="clearfix grpelem" id="u402-4"><!-- content -->
            <p>Celular:</p>
          </div>
          <div class="clearfix grpelem" id="u396-4"><!-- content -->
            <p>Persona de contacto:</p>
          </div>
          {!!Form::text('telefono',null,['class'=>'grpelem','id'=>'u405'])!!}
          {!!Form::text('personaContacto',null,['class'=>'grpelem','id'=>'u399'])!!}
        </div>

        <div class="clearfix colelem" id="pu426-4"><!-- group -->
          <div class="clearfix grpelem" id="u426-4"><!-- content -->
            <p>Clave:</p>
          </div>
          <div class="clearfix grpelem" id="u420-4"><!-- content -->
            <p>Usuario:</p>
          </div>
          {!!Form::password('clave',['class'=>'grpelem','id'=>'u429'])!!}
          {!!Form::text('usuario',null,['class'=>'grpelem','id'=>'u423'])!!}
        </div>

        <div class="clearfix colelem" id="u432-4"><!-- content -->
          <p>Documentos adjuntos:</p>
        </div>

        <div class="clearfix colelem" id="pu457"><!-- group -->
          <div class="clearfix grpelem" id="u457"><!-- group -->
          <div class="clip_frame grpelem" id="u447"><!-- svg -->
            <img class="svg" id="u445" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
          </div>
          <div class="clearfix grpelem" id="u454-4"><!-- content -->
            <p>Cargar</p>
          </div>
        </div>

        <div class="clearfix grpelem" id="u460"><!-- group -->
          <div class="clip_frame grpelem" id="u462"><!-- svg -->
            <img class="svg" id="u463" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
          </div>
          <div class="clearfix grpelem" id="u461-4"><!-- content -->
            <p>Cargar</p>
          </div>
        </div>
        
        <div class="clearfix grpelem" id="u475"><!-- group -->
          <div class="clip_frame grpelem" id="u477"><!-- svg -->
            <img class="svg" id="u478" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
          </div>
          <div class="clearfix grpelem" id="u476-4"><!-- content -->
            <p>Cargar</p>
          </div>
        </div>

        <div class="clearfix grpelem" id="u562"><!-- group -->
          <div class="clearfix grpelem" id="pu564"><!-- group -->
            <div class="clip_frame grpelem" id="u564"><!-- svg -->
              <img class="svg" id="u565" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
              
            </div>
            <div class="clearfix grpelem" id="u563-4"><!-- content -->
              <p>Cargar</p>
            </div>
          </div>
          <div class="clearfix grpelem" id="pu592"><!-- group -->
          
            <div class="clip_frame grpelem" id="u592"><!-- svg -->
              <img class="svg" id="u593" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
            </div>
            <div class="clearfix grpelem" id="u589-4"><!-- content -->
              <p>Cargar</p>
              {{ Form::file('archivo_1') }}
            </div>
          </div>
        </div>
        <div class="clip_frame grpelem" id="u492"><!-- svg -->        
          <img class="svg" id="u493" src="/images/pasted-svg-287179x246.svg?crc=213937591" alt="" data-mu-svgfallback="/images/pasted%20svg%20287179x246_poster_.png?crc=320079953" data-image-width="88" data-image-height="75"/>
        </div>
        <div class="clearfix grpelem" id="u491-4"><!-- content -->
          <p>Cargar</p>
        </div>
      </div>
      
    
      <div class="clearfix colelem" id="u334"><!-- group -->      
        <div class="pointer_cursor clearfix grpelem" id="u335"><!-- group -->
          {!!Form::submit('AGREGAR',['class'=>'nonblock nontext clearfix grpelem','id'=>'u336-4'])!!}
          
        </div>
        
      </div>
    {!!Form::close()!!}
    
    </div>
  </div>
@endsection
   