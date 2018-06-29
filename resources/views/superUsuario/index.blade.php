@extends('layouts.template')

@section('title','Super Usuario')
@section('buscar','clientes')

@section('body')      
  <div class="my-3 my-md-5">
      <!--<div class="container">-->
      <!--<nav class="breadcrumb breadcrumb-content">-->
      <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
      <!--<span class="breadcrumb-item active">Cards</span>-->
      <!--</nav>-->
      <!--</div>-->
      <div id ="tabla">
          
      </div>
  </div>
  <script type="text/javascript">
    $("#tabla").load("{{ asset('superUsuario/tabla')}}");

    $("#form").submit(function(){
      $.post("{{asset('superUsuario')}}",$("#form").serialize()).done(function(){
        $("#tabla").load("{{asset('superUsuario/tabla')}}");
        $("#form")[0].reset();
        alertify.success("buen camino");
      });
      return false;
    })


    function mostrarTabla(busqueda){
      var datos = {
        "busqueda" : busqueda,
      };
      $.ajax({
        data: datos,
        url: 'obtenerTabla',
        type: 'get',
        dataType: 'json',
        success: function(data){
          $("#todos").html(data);
        }
      });
    }
    </script> 
 {{--  <script>
      $.ajaxSetup({headers:{'csrftoken' :'{{csrftoken()}}'}});
  </script> --}}
@endsection


