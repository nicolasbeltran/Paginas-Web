// JavaScript Document

$(document).ready(function() {
    
	$(".boton").click(function(){
	$("#quees").fadeIn(500);
	});
	
	$(".iconocerrar").click(function(){
	$("#quees").fadeOut(500);
	});
	
	
});

//PEDIDO AJAX DE PRUEBA
/*
document.getElementById("boton-json").onclick = pedidoAjax;	
	
function pedidoAjax(){
		var results = document.getElementById("contenido-json");
		var hr = new XMLHttpRequest();
		hr.open("GET", "mylist.json", true);
		hr.onreadystatechange = function() {
			if(hr.readyState == 4 && hr.status == 200) {
				var data = JSON.parse(hr.responseText);
				results.innerHTML = "";
				for(var obj in data){
					results.innerHTML += data[obj].user+" is "+data[obj].age+" and lives in "+data[obj].country+"<hr />";
				}
			}
		}
		hr.send();
		results.innerHTML = "requesting...";
}
*/
