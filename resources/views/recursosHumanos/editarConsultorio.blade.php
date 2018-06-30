@extends('layouts.base')

@section('title','Editar Consultorio')



@section('body')
<div class="my-3 my-md-5">
          <!--<div class="container">-->
          <!--<nav class="breadcrumb breadcrumb-content">-->
          <!--<a class="breadcrumb-item" href="javascript:void(0)">Library</a>-->
          <!--<span class="breadcrumb-item active">Cards</span>-->
          <!--</nav>-->&nbsp;
          <div class="container">
            <div class="row row-cards"><br>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><br>
                    </h3>
                    <p><br>
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                      <form action="/recursosHumanos/editarConsultorio/{{$consultorio->id}}" method="post">
                      {{csrf_field()}}
                        <div class="form-group" style="width: 886px;">&nbsp; <label
                            class="form-label">Editar Consultorio {{$consultorio->nombre}}</label></div>
                        <div class="form-group"><input name="nombre" class="form-control" placeholder="{{$consultorio->nombre}}"
                            type="text" disabled></div>
                        <div class="form-group"><label class="form-label" style="width: 886px;">
                            Médicos Asignados</label></div>
                        <div class="form-group"><label class="form-label" style="width: 886px;"></label>
                          <table style="width: 884px; height: 51px;" cellspacing="20"
                            border="0">
                            <tbody>
                              <tr>
                                <th class="w-1" style="width: 155px;">Asignar
                                  Médico</th>
                                <th class="w-1" style="width: 155px;">Especialidad
                                  </th><th class="w-1" style="width: 155px;">Turnos</th>
                              </tr>
                              <tr>
                                <td>
                                  <select id="medico" name="medico_id" class="form-control custom-select">
                                    
                                    <option value=" " data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}" data-especialidad="Ninguno" {{ $consultorio->medico_id ? 'selected' : ''}} >Ninguno</option>
                                    
                                    @foreach($medicos as $medico)
                                      <option value="{{$medico->id}}" data-turnos="{{$medico->getTurnos()}}" data-especialidad="{{$medico->especialidad->nombre}}" {{$consultorio->medico_id==$medico->id ? 'selected' : ''}}  >{{$medico->nombres}} {{$medico->apellidos}}</option>
                                    @endforeach
                                  </select>
                                </td>
                                <td><input class="form-control" disabled="disabled" id="med_especialidad"
                                    placeholder="" value=""
                                    type="text"></td>
                                <td><input class="form-control" disabled="disabled"
                                    placeholder="turnos" value="0" type="text" id="turnos">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <label class="form-label" style="width: 886px;"><br>
                          </label></div>
                      </div>
                      <br>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group"><br>
                        </div>
                        Especialidad<br>
                        <div class="row align-items-center">
                          <div class="col"><input class="form-control" disabled="disabled"
                              placeholder="especialidad" value="{{$consultorio->especialidad->nombre}}" type="text">&nbsp;&nbsp;
                            &nbsp; </div>
                        </div>
                      </div>
                      <br>
                      <div class="card-footer text-right">
                        <div class="d-flex" style="text-align: center;">
                          <dl>
                            <dt> <a href="javascript:void(0)" class="btn btn-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </a><button type="submit" class="btn btn-primary ml-auto">Guardar
                                cambios</button> </dt>
                          </dl>
                        </div>
                      </div>
                      <div class="col-md-12"> </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive"><br>
            </div>
          </div>
        </div>
        <script>
        
          $("#medico").ready(function(){
            $("#med_especialidad").attr('value',$(this).find(":selected").data('especialidad'));
            $("#med_especialidad").text($(this).find(":selected").data('especialidad'));
          });

          $("#medico").change(function(){
            $("#med_especialidad").attr('value',$(this).find(":selected").data('especialidad'));
            $("#med_especialidad").text($(this).find(":selected").data('especialidad'));
            $("#turnos").val($(this).find(":selected").data('turnos'))
          });
        </script>
@endsection