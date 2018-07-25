<div class="container" >
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
                                <th style="text-align: center;">ACCCIONES</th>
                                <th><br>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hospitales as $hos)
                            <tr>
                                <td><span class="text-muted">{{sprintf("%04d",$hos->id)}}</span></td>
                                <td><a href="{{url('superuser/cliente/'.$hos->id)}}" class="text-inherit">{{$hos->nombre}}<br>
                                    </a>
                                </td>
                                <td>{{$hos->ciudad}}</td>
                                <td>0</td>
                                <td> <span class="status-icon bg-success"></span>
                                    Operando 
                                </td>
                                <td class="text-right">
                                    <select class="custom-select">
                                        <option value="STATUS_CODE" selected="selected">Cambiar
                                            estado
                                        </option>
                                        <option value="JSON_BODY">En implementación</option>
                                        <option value="HEADERS">Operando</option>
                                        <option value="TEXT_BODY">Suspensión temporal</option>
                                        <option value="RESPONSE_TIME">Cancelado</option>
                                    </select>
                                </td>
                                <td> <a class="icon" href="javascript:void(0)"> </a>
                                    <br>
                                </td>
                            </tr>
                            @endforeach
                            </php>
                            </script>
                        </tbody>
                    </table>
                    @endif
    
                    {{ $hospitales->links() }}
                  </div>
                  
            </div>
        </div>
    </div>
</div>