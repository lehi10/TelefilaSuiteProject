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

        function updateState(value,id) {
            //alert(value+" "+id);
            $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: '/superuser/cambiarEstadoCliente', // This is the url we gave in the route
            data: {'idCliente' : id, 'state':value }, // a JSON object to send back
            success: function(data){ // What to do if we succeed
                if(data.success == true){ // if true (1)
                    alert("cargando");
                    setTimeout(function(){// wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 5000); 
                }    
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
        }
  
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


