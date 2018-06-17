// JavaScript Document

/*---------------------HOVER EN EL MENU-------------------------*/	
	var url=window.location.href;

		if (url=="http://prid.com.ar/index.php"){
		document.getElementById("inicio").style.borderBottom="solid 2px white";
		}
	if (url=="http://prid.com.ar/2interfaz.php#titulo"){
		document.getElementById("interfaz").style.borderBottom="solid 2px white";
		}
		
	if (url=="http://prid.com.ar/3algoritmo.php"){
		document.getElementById("algoritmo").style.borderBottom="solid 2px white";
		}
	if (url=="http://prid.com.ar/4quienessomos.php"){
		document.getElementById("quienes").style.borderBottom="solid 2px white";
		}
	
	if (url=="http://prid.com.ar/6recorrido.php"){
		document.getElementById("recorrido").style.borderBottom="solid 2px white";
		}
	if (url=="http://prid.com.ar/5descargas.php"){
		document.getElementById("descargas").style.borderBottom="solid 2px white";
		}
		
		
/*---------------------AVISO MAIL ENVIADO-------------------------*/
var mensaje = $("#contacto p").html()

if(mensaje=="Tu mensaje fue enviado con éxito"){
	alertify.success("Tu mensaje fue enviado con éxito");
	}
	
if(mensaje=="Hubo un error, inténtalo nuevamente"){
	alertify.error("Hubo un error, inténtalo nuevamente");
	}