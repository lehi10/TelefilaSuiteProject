

@section('title','Super Usuaasdsario')


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