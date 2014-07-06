<section class="formreserva">
  <form class="form-horizontal" role="form">
    <fieldset>
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
        <label for="identificacion" class="col-xs-4 col-sm-4 control-label">Cedula / R.I.F.</label>
        <div class="col-xs-8 col-sm-8">
          <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="ej: V-20.955.549">
        </div>
      </div> <!-- Indetificacion -->

      <div class="form-group">
       <span class="form-inline col-xs-4">
        <label for="tipoHabitacion" class="control-label">Tipo de Habitacion</label>
        <select name="tipohabitacion" id="tipohabitacion" style="" class="form-control">
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
        <span class="form-inline col-xs-8">
          <label>Check-IN</label>&nbsp<input type="date" style="width:150px;" class="form-control" name="checkin">
          <label>Check-OUT</label>&nbsp<input type="date" style="width:150px;" class="form-control" name="checkout">
        </span>

      </div> <!-- Tipohab  -->













      <div class="form-group">
        <label for="checkout" class=" col-xs-4 col-sm-4 control-label">Check OUT</label>
        <div class="col-xs-8 col-sm-8">
          <input type="date" class="form-control" name="checkout" id="checkout" placeholder="Ej: 25/12/2013">
        </div>
      </div> <!-- Checkout -->

      <div class="form-group">
        <label for="pax" class="col-xs-4 col-sm-4 control-label">PAX</label>
        <div class="col-xs-8 col-sm-8">
          <input type="text" class="form-control" name="pax" id="pax" placeholder="ej: 3">
        </div>
      </div> <!-- PAX -->

      <div class="form-group">
        <label for="Comentarios" class="col-xs-4 col-sm-4 control-label">Comentarios</label>
        <div class="col-xs-8 col-sm-8">
          <textarea class="form-control" name="Comentarios" id="Comentarios" placeholder="comentarios"></textarea>
        </div>
      </div> <!-- Comentarios -->

      <div class="form-group">
        <div class="col-sm-offset-4">
          <button type="submit" class="btn btn-default">Reservar</button>
        </div>
      </div> <!-- Boton -->
      
    </fieldset> <!-- Campos -->
    </form> <!-- Formulario -->
</section>