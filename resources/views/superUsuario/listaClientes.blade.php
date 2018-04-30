@extends('superUsuario.main')


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
            <th>Nombre </th>
            <th>Dirección</th> 
            <th>RUC</th>
            
          </tr>

          @foreach($clientes as $cliente)
            <tr>
              <td> <a class="nonblock clearfix colelem" href="cliente/{{$cliente->id}}" > Entrar</a> </td>
              <td>{{$cliente->nombre_hospital}}</td>
              <td>{{$cliente->direccion}}</td> 
              <td>{{$cliente->ruc}}</td>
              
            </tr>
          @endforeach
          
      </table>
      
    </div>
@endsection