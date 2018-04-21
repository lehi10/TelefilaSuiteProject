@extends('agenda.index_admi')

@section('content')
        <h2 style="text-align: center;" type="button">- Agenda Médica -</h2>
        <table style="width: 100%" border="1">
          <tbody>
            <tr>
              <td>
                <select style="width: 315px;" id="especialidad" name="Medico">
                  <option value="1">Dr. Carlos Peralta Basurco, Consultorio 2</option>
                  <option value="3">Dr. Pedro Aquino, Consultorio 3</option>
                  <option value="2">Dr. Juan Carlos machuca, Consultorio 3</option>
                </select>
              </td>
              <td><button value="ver" name="Ver">Ver</button></td>
            </tr>
          </tbody>
        </table>
        <p><br>
        </p>
        <p>Dr. Carlos Peralta Basurco</p>
        <p>Consultorio: 2</p>
        <p>Especialidad: Cardiología</p>
        <p>Teléfono: 989898899</p>
        <p><br>
        </p>
        <p style="text-align: center;"><a href="#">&lt;&lt;</a> OCTUBRE <a href="#">&gt;&gt;</a></p>
        <p style="text-align: center;"><a href="#"><br>
          </a></p>
        <div style="text-align: center;">
          <table style="width: 100%" border="1">
            <tbody>
              <tr>
                <td>DOM</td>
                <td>LUN</td>
                <td>MAR</td>
                <td>MIE</td>
                <td>JUE</td>
                <td>VIE</td>
                <td>SAB</td>
              </tr>
              <tr>
                <td><br>
                </td>
                <td>1</td>
                <td id="calenda">2</td>
                <td id="calenda"> 3</td>
                <td id="calenda">4</td>
                <td id="calenda">5</td>
                <td id="calenda">6</td>
              </tr>
              <tr>
                <td>7</td>
                <td id="calenda">8</td>
                <td id="calenda">9</td>
                <td id="calenda">10</td>
                <td id="calenda">11</td>
                <td id="calenda">12</td>
                <td id="calenda">13</td>
              </tr>
              <tr>
                <td>14</td>
                <td id="calenda">15</td>
                <td id="calenda">16</td>
                <td id="calenda">17</td>
                <td id="calenda">18</td>
                <td id="calenda">19</td>
                <td id="calenda">20</td>
              </tr>
              <tr>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
              </tr>
              <tr>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
              </tr>
            </tbody>
          </table>
          <br>
          <br>
        </div>
        <button>GUARDAR DIAS</button> </div>
      <br>
      <hr style="width: 100%; height: 1px; color: white;">
      <hr style="width: 100%; height: 1px; color: white; border-style: solid;">
      <h2 style="text-align: center;" type="button">- Agregar Médico -</h2>
      <div id="txt_llama" style="text-align: center;"><input id="ancho_txt" placeholder="Nombres"

          name="Numero de ticket" type="text">
        <p> </p>
        <div id="txt_llama" style="text-align: center;"><input id="ancho_txt" placeholder="Apellidos"

            name="Numero de ticket" type="text"><br>
          <p> </p>
          <div id="txt_llama" style="text-align: center;"><input id="ancho_txt"

              placeholder="Teléfono" name="Numero de ticket" type="text">Especialidad:
            <br><br>
            <p></p>
            <select id="especialidad" required="required" name="Especialidad" type="text">
              <option value="1">Cardiología</option>
              <option value="2">Cirujia</option>
              <option value="3">Dental</option>
              <option value="4">Ginecología</option>
              <option value="5">Medicina General</option>
              <option value="6">Medicina Interna</option>
              <option value="7">Nutrición</option>
              <option value="8">Obstetricia</option>
              <option value="9">Oftalmología</option>
              <option value="10">Pediatria</option>
              <option value="11">Urología</option>
            </select>
            <div id="txt_llama" style="text-align: center;"> <br>
              <p> <button id="ancho_but">AGREGAR</button> </p>
            </div>
            <p></p>
            <div class="cta"><a href="#">¿Necesitas ayuda? T. 943798335<br>
              </a></div>
          </div>
        </div>
      </div>
@endsection            
    