for(var navItems=document.getElementsByClassName("nav-hab-item"),i=0;i<=navItems.length-1;i++)navItems[i].addEventListener("click",function(e){fotohab=document.getElementsByClassName("nav-hab-inner");for(var n=1,t=e.target.id,a=0;a<=fotohab.length-1;a++)fotohab[a].src="/images/habs/"+t+"/"+t+"_"+n+".gif",n++;tns=document.getElementsByClassName("nav-hab-target");for(var i=1,o=0;o<=tns.length-1;o++)tns[o].src="/images/habs/"+t+"/tn_"+t+"_"+i+".gif",i++},"false");$(function(){var e=window.location.hash;e&&$('ul.nav a[href="'+e+'"]').tab("show")});var loginOculto=document.getElementById("ocultoRes"),siUserCheck=document.getElementById("siRegistrado"),noUserCheck=document.getElementById("noRegistrado");siUserCheck.addEventListener("change",function(){loginOculto.className=""},"false"),noUserCheck.addEventListener("change",function(){loginOculto.className="ocultoRes"},"false"),window.addEventListener("resize",function(){var e=document.getElementById("tipohabitacion");window.innerWidth<768&&(e.size=6),window.innerWidth>768&&(e.size=1)},"false"),window.addEventListener("load",function(){var e=document.getElementById("tipohabitacion");window.innerWidth<768&&(e.size=6)},"fasle");