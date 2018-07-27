@extends('layouts.base')

@section('title','Admisión')

@section('auxiliar')
  <div class="nav-item d-none d-md-flex"> 
    <a href="{{ url('admision/agregarPaciente') }}" class="btn btn-sm btn-outline-primary">
      Agregar  Paciente
    </a>
  </div>
@endsection

@section('body')

@if(isset($message))
  <div class="alert alert-{{$kindMessage}} form-group text-center" role="alert">
      {{ $message }}
    </div>
  @endif
  <div class="my-3 my-md-5">
    <!--<div class="container">-->
    <!--<nav class="breadcrumb breadcrumb-content">-->
    <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
    <!--<span class="breadcrumb-item active">Cards</span>-->
    <!--</nav>-->
    <!--</div>-->
    <div class="container">
      <div class="row row-cards"><br>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><br>
              </h3>
              <h3 class="card-title"><br>
              </h3>
              <h3 class="card-title">Admisión</h3>
              <p><br>
              </p>
            </div>
            <br>
            <div class="table-responsive">
            <br>
            <div class="container">
              <div class="row">
                <div class="col-sm-3" ></div>
                <div class="col-sm-3" >
                  <center>
                    {{ Form::open(array('url' => 'admision', 'method' => 'get')) }}  
                      {!! csrf_field() !!}
                      <input  name="pacienteDNI" class="form-control" placeholder="Ingrese DNI" type="text"><br>
                      <button class="btn btn-primary" type="submit">Buscar</button>    
                    {{ Form::close() }}
                  </center>
                </div>
                
                @if(isset($paciente)) 
                <div class="col-sm-6" >
                  <h4>Resultados</h4>                      
                  Paciente : <b>{{ $paciente[0]->nombres }} {{$paciente[0]->apellidos}}</b> 
                  <br>
                  DNI : <b>{{$paciente[0]->dni}}</b>
                </div>
              </div>
            </div>
              <br>

            <div class="container" >  
              <div class="form-control" style="width : 50%; margin: auto; ">
                <label> Referir a</label>
                    <select name="user" id="select-users" class="form-control custom-select">
                      <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Medicina
                        General</option>
                      <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">Pediatria</option>
                      <option value="3" data-data="{&quot;image&quot;: &quot;demo/faces/female/1.jpg&quot;}">Cardiología</option>
                      <option value="4" data-data="{&quot;image&quot;: &quot;demo/faces/female/18.jpg&quot;}">Cirugia</option>
                      <option value="5" data-data="{&quot;image&quot;: &quot;demo/faces/male/16.jpg&quot;}">Dental</option>
                      <option value="6" data-data="{&quot;image&quot;: &quot;demo/faces/male/26.jpg&quot;}">Ginecología</option>
                      <option value="7" data-data="{&quot;image&quot;: &quot;demo/faces/female/7.jpg&quot;}">Medicina
                        Interna</option>
                      <option value="8" data-data="{&quot;image&quot;: &quot;demo/faces/female/17.jpg&quot;}">Nutrición</option>
                      <option value="9" data-data="{&quot;image&quot;: &quot;demo/faces/male/30.jpg&quot;}">Obstetricia</option>
                      <option value="10" data-data="{&quot;image&quot;: &quot;demo/faces/male/32.jpg&quot;}">Oftalmología</option>
                      <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Pediatria</option>
                    </select>
              
                    <label >Mes</label>
                    <select class="form-control custom-select">
                      <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Enero</option>
                      <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">Febrero</option>
                      <option value="3" data-data="{&quot;image&quot;: &quot;demo/faces/female/1.jpg&quot;}">Marzo</option>
                      <option value="4" data-data="{&quot;image&quot;: &quot;demo/faces/female/18.jpg&quot;}">Abril</option>
                      <option value="5" data-data="{&quot;image&quot;: &quot;demo/faces/male/16.jpg&quot;}">Mayo</option>
                      <option value="6" data-data="{&quot;image&quot;: &quot;demo/faces/male/26.jpg&quot;}">Junio</option>
                      <option value="7" data-data="{&quot;image&quot;: &quot;demo/faces/female/7.jpg&quot;}">Julio</option>
                      <option value="8" data-data="{&quot;image&quot;: &quot;demo/faces/female/17.jpg&quot;}">Agosto</option>
                      <option value="9" data-data="{&quot;image&quot;: &quot;demo/faces/male/30.jpg&quot;}">Setiembre</option>
                      <option value="10" data-data="{&quot;image&quot;: &quot;demo/faces/male/32.jpg&quot;}">Octubre</option>
                      <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Noviembre</option>
                      <option value="11" data-data="{&quot;image&quot;: &quot;demo/faces/male/9.jpg&quot;}">Diciembre</option>
                    </select>
                    <label>Semana</label>
                    <select class="form-control custom-select">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                    </select>
                    
                    <center>
                      <br>
                      <button class="btn btn-primary" type="button">Generar Referencia</button>
                    </center>
                                
              </div>
            
              @else
              <div class="col-sm-6" >
                <h4>Resultados</h4>                      
                Paciente : 
                <br>
                DNI : 
              </div>
              @endif

            </div>

              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


        