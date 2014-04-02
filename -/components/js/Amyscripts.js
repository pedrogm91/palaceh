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

document.getElementById('matind2').addEventListener('click', function() {
imgs= document.getElementsByTagName('img');
var x = 1;
for(var i = 0; i <= imgs.length-1; i++) {
    
	imgs[i].src = "/images/habs/matind/matind_"+x+".gif";

}
}, 'false');