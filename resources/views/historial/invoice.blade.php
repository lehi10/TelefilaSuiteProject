<!DOCTYPE html>
<html lang="es">
<head><title>Hospital {{$hospital->nombre}} {{$fecha}}| Reporte</title></head>
  <body>
    <header class="clearfix">
      <div>
        <img width='150'  src="images/logo_alpha1.png">
      </div>
      <div id="company">
        <h2 class="name">Hospital {{$hospital->nombre}}</h2>
        <div>RUC: {{$hospital->ruc}}</div>
        <div>{{$hospital->direccion}}</div>
        <div>{{$hospital->ciudad}} - {{$hospital->region}}</div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Historial de Tickets Generados</div>
          <h2 class="name">{{$especialidad->nombre}}</h2>
          <div class="address">Fecha : {{$fecha}}</div>
        </div>
      </div>
      <h2>Tickets generados</h2>
      <div style='display: none;'>
          {{$i=1}}
      </div>
      <table >
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">Codigo</th>
            <th class="unit">Paciente</th>
            <th class="qty">Hora de Cita</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
            <tr>
              <td class="no" >{{$i++}}</td>
              <td class="desc">{{$registro->pacienteID}}</td>
              <td class="unit">{{$registro->pacienteNombres}} {{$registro->pacienteApellidos}}</td>
              <td class="qty">{{$registro->horaCita}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div id="notices">
        <div class="notice"> El día <strong>{{$fecha}}</strong> se han generado <strong>{{$i}}</strong> los cuales han sido pagados para la especialidad de {{$especialidad->nombre}}. </div>
      </div>
    </main>
    <footer>
      Reporte Generado por Telefila
    </footer>
  </body>
</html>
