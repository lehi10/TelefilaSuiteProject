

<!DOCTYPE html>
<html lang="es">
<head><title>{{$hospital->nombre}} {{$fecha}}| Reporte</title>
<link rel="stylesheet" href="pdfStyles/style.css" media="all" />
</head>
  <body>
    <header class="clearfix">
      <div>
        <img width='150'  src="images/logo_alpha1.png">
      </div>
      <div id="company">
        <h2 class="name">{{$hospital->nombre}}</h2>
        <div>RUC: {{$hospital->ruc}}</div>
        <div>{{$hospital->direccion}}</div>
        <div>{{$hospital->ciudad}} - {{$hospital->region}}</div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          
          <div class="address">Fecha : {{$fecha}}</div>
          <div class="address">Hora : {{$hora}}</div>
        </div>
      </div>
      <h2>Tickets generados</h2>
      <div style='display: none;'>
          {{$i=0}}
          {{$sum=0}}
      </div>
      <table >
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="unit">Categoría</th>
            <th class="qty">Tarifa</th>
            <th class="unit">N° Tickets</th>
            <th class="qty">Total</th>
          </tr>
        </thead>
        <tbody>
        
          @foreach ($reporte as $registro)
            <div style='display: none;'>
                {{$sum+=round($registro->cant*$registro->tarifa,2)}}
                {{$i++}}
            </div>
            <tr>
              <td class="no" >{{$i}}</td>
              <td class="unit"> {{$registro->nombre}}</td>
              <td class="qty">S/. {{round($registro->tarifa,2)}}</td>
              <td class="unit">{{$registro->cant}}</td>
              <td class="qty">S/. {{round($registro->cant*$registro->tarifa,2)}}</td>
                
            </tr>
          @endforeach
            <tr>
              <td class="" ></td>
              <td class=""></td>
              <td class=""></td>
              <td class=""><strong>TOTAL</strong></td>
              <td class=""><strong>S/. {{$sum}}</strong></td>
            </tr>
        </tbody>
      </table>
      <div id="notices">
        <div class="notice"> El día <strong>{{$fecha}}</strong> se han generado <strong>{{$i}}</strong> los cuales han sido pagados para la especialidad de. </div>
      </div>
    </main>
    <footer>
      Reporte Generado por Telefila
    </footer>
  </body>
</html>
