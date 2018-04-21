@extends('agenda.index_admi')

@section('content')
    <!-- Form Module-->
    <div class="module form-module">
      <div class="toggle"></div>
      <div class="form">
        <h2>Ingrese sus datos</h2>
        <form action="/superUsuario">  
          <input placeholder="Usuario" type="text"> 
          <input placeholder="Clave"
            type="password"> 
          <input type="submit" value="Entrar">
          
        </form>
      </div>
      <div class="cta"><a href="#">¿Necesitas ayuda? T. 943798335<br>
        </a></div>
@endsection
