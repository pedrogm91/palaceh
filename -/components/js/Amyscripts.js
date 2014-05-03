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