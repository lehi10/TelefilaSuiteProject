<div class="container" >
    <div class="row row-cards">
        <br>
        <div class="col-12">
        @if(session('message'))
        <div id="msg" class="alert alert-success form-group text-center" role="alert">
            {{session('message')}}
          </div>
        @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado general de Clientes</h3>
                </div>
                <div class="table-responsive">
                    @if ($hospitales->isEmpty())
                    <br>
                    <center>
                        <h4>No tiene clientes registrados.</h4>
                    </center>
                    <br>
                    @else
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">Nro.</th>
                                <th>NOMBRE</th>
                                <th>CIUDAD</th>
                                <th>CODIGO</th>
                                <th>ESTADO</th>
                                <th style="text-align: center;">ACCCIONES</th>
                                <th> EDITAR</th>
                                <th style="text-align: center;"> ELIMINAR </th>
                                <th><br>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hospitales as $hos)
                            <tr>
                                <td><span class="text-muted">{{sprintf("%04d",$hos->id)}}</span></td>
                                <td><a href="{{url('superuser/usersClient/'.$hos->id)}}" class="text-inherit">{{$hos->nombre}}<br>
                                    </a>
                                </td>
                                <td>{{$hos->ciudad}}</td>
                                <td>{{$hos->codigo}}</td>
                                <td>
                                    @if ($hos->estado===1) 
                                        <span class="status-icon bg-warning"></span> En implementación                                 
                                    @elseif ($hos->estado===2) 
                                        <span class="status-icon bg-success"></span> Operando 
                                    @else 
                                        <span class="status-icon bg-danger"></span> Suspención Temporal 
                                    @endif 

                                </td>
                                <td class="text-right">                                       
                                    <select class="custom-select" id="select1" onchange="updateState(this.value,'{{$hos->id}}')" >                                             
                                        <option value="1"  @if($hos->estado==1 ) selected="selected" @endif>En implementación</option> 
                                        <option value="2"  @if($hos->estado==2 ) selected="selected" @endif>Operando</option> 
                                        <option value="3"  @if($hos->estado==3 ) selected="selected" @endif>Suspensión temporal</option> 
                                    </select>
                                </td>

                                <td>  
                                      <a href="{{url('superuser/editClient/'.$hos->id)}}" class="btn btn-lg ">  
                                      <span class="glyphicon glyphicon-edit"></span></a> 
                                </td> 

                                <td >  
                                     <a onclick="eliminarCliente('{{$hos->id}}','{{$hos->nombre}}')" class="btn btn-lg " data-toggle="modal" id="owner">  
                                     <span class="glyphicon glyphicon-remove"></span></a>
                                     <input name="idUsera" type="hidden" value="{{$hos->id}}" id="idUsera">
                                </td> 
                                <td> <a class="icon" href="javascript:void(0)"> </a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    @endif
    
                    {{ $hospitales->links() }}
                  </div>


                  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmacion" role="dialog" >
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-header" >
                <h2 class="modal-title">Mensaje de Confirmacion</h2>
            </div>
            <div class="modal-body" style="text-align: center; ">
                <p id = "nombreHospital"> </p>
            </div>
            <div style="padding :5px 5px 5px 350px; " >
                {{ Form::open(array('url' => 'superuser/eliminarUser','id'=>'eliminarUser','method' => 'post')) }}
                <input  name="idUser" type="hidden" value="{{$hos->id}}" id="idUser">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-default"  onclick="document.getElementById('eliminarUser').submit()" >Eliminar</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<script>
        $('#msg').delay(8000).hide(600);
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

    function eliminarCliente(hos_id, hos_nombre){
        $("#nombreHospital").html("Esta seguro que desea eliminar el hospital: "+ hos_nombre);
        $("#idUser").val(hos_id);

        $("#confirmacion").modal("show");
    }


      $(".pagination").children("li").each(function(){
            $(this).addClass("page-item");
            $(this).children("a").addClass("page-link");
            $(this).children("span").addClass("page-link");
      });
</script>
<script>
$(document).ready(function(){
  $("#owner").click(function(){
      $("#idUser").val("");
      var data = $("#idUsera").val();
      $("#idUser").val(data);
  });
});
</script>