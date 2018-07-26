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
      <div class="container">
          <div class="row row-cards">
              <br>
              <div class="col-12">
              @if(session('message'))
              <div class="alert alert-success form-group text-center" role="alert">
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
                                      <th>TICKETS</th>
                                      <th>ESTADO</th>
                                      <th style="text-align: center;">ACCIONES</th>
                                      <th>EDITAR</th>
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
                                      <td>0</td>
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
                                  </tr>
                                  @endforeach
                                  </php>
                                  </script>
                              </tbody>
                          </table>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
      $('#search').on('keyup',function(){
          $value=$(this).val();
          $.ajax({
              type : 'get',
              url : '{{URL::to('search')}}',
              data:{'search':$value},
              success:function(data){
                    $('tbody').html(data);
              }
          });
      })


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
  </script> 
@endsection


