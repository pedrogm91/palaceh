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
 
var loginOculto = document.getElementById('ocultoRes');
var siUserCheck = document.getElementById('siRegistrado');
var noUserCheck = document.getElementById('noRegistrado');
siUserCheck.addEventListener('change', function() {
	loginOculto.className = "";
}, 'false');
noUserCheck.addEventListener('change', function() {
	loginOculto.className = "ocultoRes";
}, 'false');

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




window.addEventListener('load',function(){
	var selectHab = document.getElementsByClassName('listaha');

	for(i = 0; i <= selectHab.length-1; i++){
		if (window.innerWidth < 768){
			selectHab[i].size = 6;
		}
	}
},'false');

