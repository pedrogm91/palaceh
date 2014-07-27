<section class="formreserva">
  <form id="formReserva" class="form-horizontal" method="post" role="form" action="../-/components/php/reservar.php"><fieldset id="camposForm">

    <div class="modal fade bs-example-modal-lg" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Volver</span></button>
            <h4 class="modal-title">Confirmacion de Reserva</h4>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <colgroup>
              <col span="1" style="width: 25%;">
              <col span="1" style="width: 29%;">
              <col span="1" style="width: 12%;">
              <col span="1" style="width: 12%;">
              <col span="1" style="width: 5%;">
              <col span="1" style="width: 17%;">
            </colgroup>
              <tbody id="tablaConfRes">
              <tr><th colspan="7" class="well">Datos del Solicitante</th></tr>
              <tr>
                <td><strong>Solicitante</strong></td>
                <td colspan="6" id="sol">Ramon Ledezma</td>
              </tr>
              <tr>
                <td><strong>E-Mail</strong></td>
                <td colspan="6" id="ema">ramonlv93</td>
              </tr>
              <tr>
                <td><strong>Telefono</strong></td>
                <td colspan="6" id="tel">04160350957</td>
              </tr>
              <tr>
                <td> <strong>Cedula / RIF</strong></td>
                <td colspan="6" id="cr">20955549</td>
              </tr>
              <tr><th colspan="7" class="well">Habitaciones</th></tr>
              <tr id="lish">
                <td><strong>Tipo de habitacion</strong></td>
                <td><strong>Huesped(es)</strong></td>
                <td><strong>Check-In</strong></td>
                <td><strong>Check-Out</strong></td>
                <td><strong>Noches</strong></td>
                <td><strong>Subtotal</strong></td>
              </tr>
              </tbody>
            </table>
            <table class="table table-bordered" style="width:36.5%; position:relative; left:63.5%;">
            <col span="1" style="width: 54%;"></col>
              <col span="1" style="width: 46%; font-family:consolas;"></col>
                <tbody>
                  <tr id="baseI">
                    <td class="noElim">Base Imponible(G)</td>             
                  </tr>
                  <tr id="iva">
                   <td class="noElim">I.V.A.(12%)</td>      
                  </tr>
                  <tr id="totalPagar">
                    <td class="noElim">Total a Pagar</td>      
                  </tr>
                </tbody>
              </table>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
            <button type="button" class="btn btn-primary">Confirmar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <legend><h2>Solicitud de Reserva</h2></legend>

    <div class="form-group">
      <label for="solicitante" class="col-xs-4 control-label">Es usuario Registrado?</label>
      <div class="form-inline col-xs-8">
        <input type="radio" class="" name="registrado" id="siRegistrado" value="1">Si&nbsp
        <input type="radio" checked class="" name="registrado" id="noRegistrado" value="0">No&nbsp&nbsp
        <span id="ocultoRes" class="ocultoRes">Usuario:&nbsp<input type="text" name="identificacion" size="8" class="form-control">&nbspClave:&nbsp<input type="password" name="clave" size="8" class="form-control"></span>
      </div>
    </div> <!-- Usuario Registrado -->

    <div class="form-group">
      <label for="solicitante" class="col-xs-4 col-sm-4 control-label">Solicitante</label>
      <div class="col-xs-8 col-sm-8">
        <input type="text" class="form-control" name="solicitante" id="solicitante" placeholder="Ej: Palace Hotel, C.A.">
      </div>
    </div> <!-- Solicitante -->

    <div class="form-group">
      <label for="email" class="col-xs-4 col-sm-4 control-label">E-mail</label>
      <div class="col-xs-8 col-sm-8">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email">  
      </div>
    </div> <!-- Email -->

    <div class="form-group">
      <label for="telefono" class="col-xs-4 col-sm-4 control-label">Telefono</label>
      <div class="col-xs-8 col-sm-8">
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
      </div>
    </div> <!-- Telefono -->

    <div class="form-group">
      <label for="cedrif" class="col-xs-4 col-sm-4 control-label">Cedula / R.I.F.</label>
      <div class="col-xs-8 col-sm-8">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" id="tipoCed" class="btn btn-default 
            dropdown-toggle" data-toggle="dropdown">V <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
           <li><a id="Ven">V</a></li>
           <li><a id="Ex">E</a></li>
           <li><a id="Jud">J</a></li>
           <li><a id="Gob">G</a></li>
         </ul>
       </div><!-- /btn-group -->
       <input type="hidden" value="V" id="tipoCedu" name="tipoCedu">
       <input type="text" class="form-control" name="cedrif" id="cedrif" placeholder="ej: 305241945">
     </div>
   </div>
 </div> <!-- Indetificacion -->

 <div class="form-group habitas">
  <span class="form-inline col-xs-4">
    <label for="tipohabitacion[]">1)</label><select name="tipohabitacion[]" id="tipohabitacion1" class="form-control listaha">
    <option value="Matrimonial">Matrimonial</option>
    <option value="Matrimonial1">Matrimonial + Individual</option>
    <option value="3ind">3 Camas Individuales</option>
    <option value="dobmat">Doble Matrimonial</option>
    <option value="4ind">Cuatro Camas Individuales</option>
    <option value="suitej">Suite Junior</option>
    <option value="suitep">Suite Palace</option>
    <option value="suitepf">Suite Palace Familiar</option>
  </select>
</span>
<span class="form-inline col-xs-8 checkinout">
  <label for="checkin[]" class="col-sm-1 col-xs-12 control-label">Check-IN:</label>
  <span class="col-sm-4 col-xs-12">
    <input placeholder="Ej: 01/01/2014" type="date" style="" class="form-control calNoStyle" name="checkin[]" id="checkin1">
  </span>
  <label for="checkout[]" class="col-sm-1 asdf col-xs-12 control-label">Check-OUT:</label>
  <span class="col-sm-4 col-xs-12 chek">
    <input placeholder="Ej: 01/01/2014" type="date" style="" class="form-control calNoStyle" name="checkout[]" id="checkout1">
  </span>
  <span></span>
</span> <!-- Checkin and Out -->
</div><div id="habHolder"></div><span id="punteroHabs"></span>
<span><img id="bMas" style="width:30px; height:30px; cursor:pointer;" src="/images/boton_mas.png"></span>
<span><img id="bMenos" style="width:30px; height:30px; cursor:pointer;" src="/images/boton_menos.png"></span>

<div class="form-group">
  <label for="huesped[]" class="col-xs-4 col-sm-4 control-label">Huesped(es) Habitacion 1:</label>
  <div class="col-xs-8 col-sm-8">
    <input type="text" class="form-control" name="huesped[]" id="huesped1" placeholder="ej: Juan Alfonzo y Maria Arteaga">
  </div>
</div> <!-- Huesped(es) -->
<div id="huesHolder"></div><span id="punteroHues"></span>

<div class="form-group">
  <label for="Comentarios" class="col-xs-4 col-sm-4 control-label">Comentarios</label>
  <div class="col-xs-8 col-sm-8">
    <textarea class="form-control" name="Comentarios" id="Comentarios" placeholder="comentarios"></textarea>
  </div>
</div> <!-- Comentarios -->

<div class="form-group">
  <div class="col-sm-offset-4">
    <button type="button" id="submitModal" class="btn btn-default"  data-target="#myModal">Reservar</button>
  </div>
</div> <!-- Boton -->

</fieldset> <!-- Campos -->
</form> <!-- Formulario -->
</section>