@extends('layouts.template')

@section('title','Super Usuario')
@section('buscar','clientes')

@section('body')      
  <div class="my-3 my-md-5">
  @if(session('message'))
              <div class="alert alert-{{session('kindMessage') ? session('kindMessage') : 'success'  }} form-group text-center" id="msg" role="alert">
                  {{session('message')}}
                </div>
  @endif
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
    $("#tabla").load("{{asset('superuser/inicio?page='.$page)}}");    

    // $("#form").submit(function(){
    //   $.post("{{asset('superUsuario')}}",$("#form").serialize()).done(function(){
    //     $("#tabla").load("{{asset('superuser/tabla')}}");
    //     $("#form")[0].reset();
    //     alertify.success("buen camino");
    //   });
    //   return false;
    // })
    function mostrarTabla(busqueda){
      var datos = {
        "busqueda" : busqueda,
      };
      $.ajax({
        data: datos,
        url: 'superuser/tabla',
        type: 'get',
        dataType: 'json',
        success: function(data){
          $("#tabla").html(data);
        }
      });
    }
    </script> 
   <script>
      $.ajaxSetup({headers:{'csrftoken' :'{{csrf_token()}}'}});
  </script> 
@endsection


