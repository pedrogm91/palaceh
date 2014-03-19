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