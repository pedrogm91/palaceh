/** function equalHeight(group) {    
tallest = 0;    
group.each(function() {       
thisHeight = $(this).height();       
if(thisHeight > tallest) {          
tallest = thisHeight;       
}    
});    
group.each(function() { $(this).height(tallest); });
} 



window.addEventListener('resize', function() {
setTimeout(function() {equalHeight($(".thumbnail"));}, 2000); }, 'false');
*/
function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}

var navItems= document.getElementsByClassName('nav-hab-item');

for (var i = 0; i <= navItems.length-1; i++) {
	navItems[i].addEventListener('click', function(evt) {
		fotohab= document.getElementsByClassName('nav-hab-inner');
		var x = 1;
		var tipohab = evt.target.id;
		for(var i = 0; i <= fotohab.length-1; i++) {
          
			fotohab[i].src = "/images/habs/"+tipohab+"/"+tipohab+"_"+x+".gif";
			x++;
		}
	tns= document.getElementsByClassName('nav-hab-target');
	var y = 1;
	for(var j = 0; j <= tns.length-1; j++) {
        
		tns[j].src = "/images/habs/"+tipohab+"/tn_"+tipohab+"_"+y+".gif";
        y++;


	}}, 'false');

}
$(function(){
var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

}); //JQuery is loaded
 //Login Oculto
var loginOculto = document.getElementById('ocultoRes');
var siUserCheck = document.getElementById('siRegistrado');
var noUserCheck = document.getElementById('noRegistrado');
siUserCheck.addEventListener('change', function() {
	loginOculto.className = "";
}, 'false');
noUserCheck.addEventListener('change', function() {
	loginOculto.className = "ocultoRes";
}, 'false');
// Resize del select habitaciones
window.addEventListener('resize',function(){
	var selectHab = document.getElementsByClassName('listaha');

	for(i = 0; i <= selectHab.length-1; i++){
		if (window.innerWidth < 768){
			selectHab[i].size = 6;
		}
		if (window.innerWidth > 768) {
			selectHab[i].size = 1;
		}
	}
},'false');


//Resize del seelct habitaciones al cargar
window.addEventListener('load',function(){
	var selectHab = document.getElementsByClassName('listaha');

	for(i = 0; i <= selectHab.length-1; i++){
		if (window.innerWidth < 768){
			selectHab[i].size = 6;
		}
	}
},'false');

 //Boton Agregar Habitacion al Formulario
 var botonMas = document.getElementById('bMas');
 botonMas.addEventListener('click', function(){
 	var contarFormHab = document.getElementsByClassName("habitas");
 	var cantFormHab = contarFormHab.length+1;
 	contaH = cantFormHab.toString();
 	var campoHolder = document.getElementById('camposForm');
 	var spanHolder = document.getElementById('punteroHabs');
 	var habHolder = document.getElementById('habHolder');
 	var huesHolder = document.getElementById('huesHolder');
 	var punteroHues = document.getElementById('punteroHues');
 	habHolder.innerHTML = '    <div class="form-group habitas">
 	<span class="form-inline col-xs-4">
	<label for="tipohabitacion[]">'+contaH+')</label><select name="tipohabitacion[]" id="tipohabitacion'+contaH+'" class="form-control listaha">
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
 	<label for="checkin[]" class="col-sm-1 col-xs-12 control-label">Check-IN:</label><span class="col-sm-4 col-xs-12"><input placeholder="Ej: 01/01/2014" type="date" style="" class="form-control" name="checkin[]" id="checkin'+contaH+'"></span>
 	<label for="checkout[]" class="col-sm-1 asdf col-xs-12 control-label">Check-OUT:</label><span class="col-sm-4 col-xs-12 chek"><input placeholder="Ej: 01/01/2014" type="date" style="" class="form-control" name="checkout[]" id="checkout'+contaH+'"></span>
 	<span></span>
 	</span> <!-- Checkin and Out -->
 	</div>
 	';
     huesHolder.innerHTML = '
          <div class="form-group">
            <label for="huesped[]" class="col-xs-4 col-sm-4 control-label">Huesped(es) Habitacion '+contaH+':</label>
              <div class="col-xs-8 col-sm-8">
               <input type="text" class="form-control" name="huesped[]" id="huesped'+contaH+'" placeholder="ej: Juan Alfonzo y Maria Arteaga">
              </div>
            </div> <!-- Huesped(es) -->
     ';
   huesHolder.removeAttribute('id');
   var nuevoHuesHolder = document.createElement('div');
   nuevoHuesHolder.setAttribute('id','huesHolder');
   campoHolder.insertBefore(nuevoHuesHolder,punteroHues);

 	habHolder.removeAttribute('id');
 	var nuevoHolder = document.createElement('div');
 	nuevoHolder.setAttribute('id','habHolder');
 	campoHolder.insertBefore(nuevoHolder,spanHolder);
 },'false');
//Boton Eliminar Habitacion del Formulario
var botonMenos = document.getElementById('bMenos');
 botonMenos.addEventListener('click', function(){
 	var contarFormHab = document.getElementsByClassName("habitas");
 	if (contarFormHab.length <= 1){
 		return 0;
 	} else {
 	punteroRe = document.getElementById('habHolder');
 	divElim = punteroRe.previousSibling;
 	divElim.parentNode.removeChild(divElim);
    punteroHuesRe = document.getElementById('huesHolder');
    huesElim = punteroHuesRe.previousSibling;
    punteroHuesRe.parentNode.removeChild(huesElim);
 }
 },'fasel');

 //Cambiar formato del telefono
 $('#telefono').focusout(function(){
 	var probar = /^[0-9]{11}$/
 	if (probar.test($('#telefono').val())) {
 		var telefono = $('#telefono').val();
 		var nuevoTlf = new String();
 		var x = 0;
        for (var i = 0; i <= telefono.length-1;i++){
        	if (i == 3  || i == 6){
        		nuevoTlf = nuevoTlf.concat(telefono[i]);
        		nuevoTlf = nuevoTlf.concat('-');
        		x++;
        		x++;
        	} else {
        		nuevoTlf = nuevoTlf.concat(telefono[i]);
        		x++;
        	}
        }
 		$('#telefono').val(nuevoTlf);
 	}
 });

 //Dropdown de cedula
$('#Ven').click(function(){
	$('#tipoCed').html('V <span class="caret"></span>');
	$('#tipoCedu').val('V');
});
$('#Ex').click(function(){
	$('#tipoCed').html('E <span class="caret"></span>');
	$('#tipoCedu').val('E');
});
$('#Jud').click(function(){
	$('#tipoCed').html('J <span class="caret"></span>');
    $('#tipoCedu').val('J');
});
$('#Gob').click(function(){
	$('#tipoCed').html('G <span class="caret"></span>');
    $('#tipoCedu').val('G');
});

//Scripts del modal de reserva

//Tarifas de habitacion
 var   costoMat = 580.36,
       costoMat1 = 625.00,
       costo3Ind = 758.93,
       costoDobMat = 803.57,
       costo4Ind = 803.57,
       costoSuiteJ = 892.86,
       costoSuiteP = 982.14,
       costoSuitePF = 1071.43;

$('#submitModal').click(function(){
	//Validar antes de mostrar el modal
    $('#formReserva').data('bootstrapValidator').validate();
    if (!$('#formReserva').data('bootstrapValidator').isValid()){
    } else {
	//Recuperar datos del formulario
	var solicitante = $('#solicitante').val(), 
	email = $('#email').val(),
	telefono = $('#telefono').val(),
	cedula = $('#cedrif').val(),
	tipoCedu = $('#tipoCedu').val(),
	habs = document.getElementsByClassName('habitas'),
	cant = habs.length;
	cedula = tipoCedu.concat(cedula),
	//Referencia de la tabla para insercion
	tabla = document.getElementById('tablaConfRes');
	//Limpiar tabla antes de cargarla
    while (tabla.lastChild.id != 'lish') {
    	tabla.removeChild(tabla.lastChild);
    }
    //Insertar en tabla datos del solicitante
	$('#sol').html(solicitante);
	$('#ema').html(email);
	$('#tel').html(telefono);
	$('#cr').html(cedula);
	//Contar Habitaciones
	for (var i = 0; i <= habs.length-1; i++){
		//Obtener informacion de las habitaciones solicitadas
		var checkin1 = $('#checkin'+(i+1)).val(),
		checkout1 = $('#checkout'+(i+1)).val(),
		tipohabit = $('#tipohabitacion'+(i+1)).val(),
		nomHuesped = $('#huesped'+(i+1)).val();
		checkout1 = moment(checkout1);
		checkin1 = moment(checkin1);
        //Dar formato a la fecha que ira en la tabla
		var checkout = checkout1.format('DD/MM/YYYY');
		var checkin = checkin1.format('DD/MM/YYYY');
		//Determinar numero de noches entre las dos fechas
		var noches = checkout1.diff(checkin1,'Days');
        var subtotal  = 0.00;
        var costohab;
        switch(tipohabit){
        	case 'Matrimonial':
              costohab = costoMat;
              tipohabit = 'Matrimonial'
              break;
            case 'Matrimonial1':
              costohab = costoMat1;
              tipohabit = 'Matrimonial con Individual'
              break;
              case '3ind':
              costohab = costo3Ind;
              tipohabit = '3 Camas Matrimoniales'
              break;
              case 'dobmat':
              costohab = costoDobMat;
              tipohabit = 'Doble Matrimonial'
              break;
              case '4ind':
              costohab = costo4Ind;
              tipohabit = 'Cuatro Camas Individuales'
              break;
              case 'suitej':
              costohab = costoSuiteJ;
              tipohabit = 'Suite Junior'
              break;
              case 'suitep':
              costohab = costoSuiteP;
              tipohabit = 'Suite Palace'
              break;
              case 'suitepf':
              costohab = costoSuitePF;
              tipohabit = 'Suite Palace Familiar'
              break;
        }
       subtotal = accounting.formatMoney(roundToTwo(costohab*noches), [symbol = "Bs     "], [precision = 2], [thousand = "."], [decimal = ","], [format = "%s%v"]);
		//Crear Elementos vacios
		var nHabrows = document.createElement('tr'),
		nHab = document.createElement('td'),
		nIn = document.createElement('td'),
		nOut = document.createElement('td'),
		nNoches = document.createElement('td'),
		nHuesNom = document.createElement('td'),
		nSubtotal = document.createElement('td');
	    //Crear nodos de texto
		var nHabi = document.createTextNode(tipohabit),
		textonHuesNom = document.createTextNode(nomHuesped),
		nFecInVal = document.createTextNode(checkin),
		nFecOutVal = document.createTextNode(checkout),
		noches = document.createTextNode(noches),
		subtotalText = document.createTextNode(subtotal);
        //Unir nodos de texto a Elementos vacios
        nHab.appendChild(nHabi);
        nHuesNom.appendChild(textonHuesNom);
        nIn.appendChild(nFecInVal);
        nOut.appendChild(nFecOutVal);
        nNoches.appendChild(noches);
        nSubtotal.appendChild(subtotalText);
        //Unir Elementos en la fila de la habitacion
        nHabrows.appendChild(nHab);
        nHabrows.appendChild(nHuesNom);
        nHabrows.appendChild(nIn);
        nHabrows.appendChild(nOut);
        nHabrows.appendChild(nNoches);
        nHabrows.appendChild(nSubtotal);
        //Unir la fila a la tabla    
        tabla.appendChild(nHabrows);
        //Crear un id a cada habitacion
		nHabrows.setAttribute('id', 'hab'+(i+1));
	}
	$('#myModal').modal(); 
	$('#myModal').show;
  }
});

