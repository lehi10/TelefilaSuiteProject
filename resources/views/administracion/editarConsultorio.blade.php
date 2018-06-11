
@extends('layouts.template')        

@section('title')
Oftalmología 1
@endsection

@section('body')
<div class="my-3 my-md-5">
    &nbsp;
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
                  <div class="form-group" style="width: 886px;">&nbsp; <label

                      class="form-label">Editar Consultorio</label></div>
                  <div class="form-group"><input class="form-control" placeholder="Oftalmología 1"

                      type="text"></div>
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
                            <select name="user" class="form-control custom-select">
                              &nbsp;
                              <option value="1" data-data="{&quot;image&quot;: &quot;demo/faces/female/16.jpg&quot;}">Ninguno</option>
                              <option value="2" data-data="{&quot;image&quot;: &quot;demo/faces/male/41.jpg&quot;}">Dra.
                                Luciana Perez Aguirre</option>
                              <option value="3" data-data="{&quot;image&quot;: &quot;demo/faces/female/1.jpg&quot;}">Dr.
                                Godofredo Camacho Bite</option>
                              <option value="4" data-data="{&quot;image&quot;: &quot;demo/faces/female/18.jpg&quot;}">Dra.
                                Maria del Carmen Ballena</option>
                            </select>
                          </td>
                          <td><input class="form-control" disabled="disabled"

                              placeholder="Company" value="Oftalmologia 1"

                              type="text"></td>
                          <td><input class="form-control" disabled="disabled"

                              placeholder="turnos" value="0" type="text">
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

                        placeholder="especialidad" value="Oftalmología" type="text">&nbsp;&nbsp;
                      &nbsp; </div>
                  </div>
                </div>
                <br>
                <div class="card-footer text-right">
                  <div class="d-flex" style="text-align: center;">
                    <dl>
                      <dt> <a href="javascript:void(0)" class="btn btn-link">Eliminar
                          consultorio</a><button type="submit" class="btn btn-primary ml-auto">Guardar
                          cambios</button> </dt>
                    </dl>
                  </div>
                </div>
                <div class="col-md-12"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive"><br>
      </div>
    </div>
  </div>
        
@endsection