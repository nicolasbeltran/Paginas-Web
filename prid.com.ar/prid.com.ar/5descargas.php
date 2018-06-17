<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta content="">

<title>Pre-consulta dengue</title>

<link rel="stylesheet" href="estilofinal.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="alertify/alertify.core.css" />
<link rel="stylesheet" href="alertify/alertify.default.css" />


<style>

main h1{
	margin-bottom:0px;
}

#ppt h3{
	margin-bottom: 20px;
}

	#botonppt .boton{
		margin-bottom:0%;
		}

	#botoninforme .boton{
		margin-bottom:15%;
		padding-left:30px;
		
		}

	main img{
		vertical-align:middle;
	}

main h3{
	font-size:2.2em;
	
}
	
		
		main a {
			
			font-size:1.9em;
			text-decoration:none;
			color:#0489C3;
			position: relative;
			color: #0489C3;
			text-decoration: none;
			-moz-transition-property:text-shadow;
			-moz-transition-duration:0.2s;
			-moz-transition-timing-function:linear;
			-webkit-transition-property:text-shadow;
			-webkit-transition-duration:0.2s;
			-webkit-transition-timing-function:linear;
			  
		}
		
		main a:hover {
			text-shadow:0px 0px 3px #0489C3;
		}

		.divdescargas{
			display: flex;
			justify-content:space-around;
		}
		

		#informe{
			
		}
		
</style>

</head>

<body>

<nav>
		<img onClick="inicio()" class="logo" src="imagenesfinal/logo4.png" width="60px" alt="">
    	<h2 onClick="inicio()" class="logo2">PRID</h2> 
        <h2 onClick="inicio()" class="logo3">Programa de Registro</h2>
        <h2 onClick="inicio()" class="logo3">Inclusivo del Dengue</h2>
        
	
	<ul>
    	<li><a id="inicio" href="index.php">Inicio</a></li>
        <li><a id="interfaz" href="2interfaz.php">Interfaz</a></li>
        <li><a id="algoritmo" href="3algoritmo.php">¿Cómo funciona?</a></li>
        <li><a id="quienes" href="4quienessomos.php">¿Quiénes somos?</a></li>
        <li><a id="recorrido" href="6recorrido.php">Recorrido del trabajo</a></li>
        <li><a id="descargas" href="5descargas.php">Descargas</a></li>
    </ul>

</nav>


<main>

	<header><h1>Descargas</h1></header>

<div class="divdescargas">

	<section id="ppt">
    	<h3>Presentación en <br/>PowerPoint</h3>
        
        <div id="botonppt">
            <div class="boton"><a href="https://docs.google.com/presentation/d/11s2PLAoYAVkWDF67GE7mw7Qm6QeKPpgXA_pts0VjUGo/pub?start=false&loop=false&delayms=10000" target="_blank"><img src="imagenesfinal/pptdescarga3.png"  width="140px" alt="">Ver online</a><br/></div>
            <div class="boton"><a href="documentos/PRID - Presentación en ppt.pptx" download><img src="imagenesfinal/pptdescarga3.png"  width="140px" alt="">Descargar</a></div>
        </div>
    </section>
    
    
    <section id="informe">
    	<h3>Informe completo<br/> en PDF</h3>
        <div id="botoninforme">
            <div class="boton"><a href="documentos/PRID - Informe completo.pdf" target="_blank"><img src="imagenesfinal/pdfdescarga2.png"  width="100px" alt="">&nbsp;&nbsp; Ver online</a><br/></div>
            <div class="boton"><a href="documentos/PRID - Informe completo.pdf" download><img src="imagenesfinal/pdfdescarga2.png"  width="100px" alt="">&nbsp;&nbsp;Descargar</a></div>
        </div>
    </section>
    
 </div>

	

</main>

<footer id="footer1" >
	<section id="links">
    	<h5>Más información sobre el dengue:</h5>
        <ul>
        	<li><a href="http://www.msal.gov.ar/dengue/">Ministerio de Salud de la Nación</a></li>
            <li><a href="http://www.paho.org/hq/index.php?option=com_content&view=article&id=4493&Itemid=40232&lang=es">Organización Panamericana de la Salud</a></li>
            <li><a href="http://www.who.int/mediacentre/factsheets/fs117/es/">Organización Mundial de la Salud</a></li>
            <li><a href="http://idatosabiertos.org/datos-abiertos-y-salud-el-caso-del-dengue/">Iniciativa Latinoamericana de Datos Abiertos</a></li>
        </ul>
    </section>
    
    <section id="mapasitio">
    	<h5>Mapa del sitio</h5>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="2interfaz.html">Interfaz</a></li>
            <li><a href="3algoritmo.html">¿Cómo funciona?</a></li>
            <li><a href="4quienessomos.html">¿Quiénes somos?</a></li>
            <li><a href="6recorrido.html">Recorrido del trabajo</a></li>
            <li><a href="5descargas.html">Descargas</a></li>
   		</ul>
    </section>
    
        <section id="contacto">
    	<h5>Contáctenos</h5>
    	<form action="" method="post">
        	
            	<input type="text" name="nombre" id="nombre" value="" placeholder="Nombre"><br/>        
            	<input type="email" name="mail" id="mail" value="" placeholder="E-mail" required><br/>
            	<textarea id="comentario" name="comentario" cols="25" rows="2" placeholder="Mensaje"></textarea><br/>      
            <input id="enviar" name="enviar" type="submit" value="Enviar mensaje">
        </form>
        
			<?php
				$name = $_POST['nombre'];
				$email = $_POST['mail'];
				$message = $_POST['comentario'];
				$from = 'consulta sobre prid'; 
				$to = 'nico_beltran_92@hotmail.com'; 
				$subject = 'consulta sobre prid';
						
				$body = "From: $name\n E-Mail: $email\n Message:\n $message";
							
				if ($_POST['enviar']) {
				if (mail ($to, $subject, $body, $from)) { 
					echo '<p>Tu mensaje fue enviado con éxito</p>';
				} else { 
					echo '<p>Hubo un error, inténtalo nuevamente</p>';
				}
			}
			?>
	</section>
</footer>



<footer id="footer2">
	<p>Página diseñada y desarrollada por <a href="http://www.nicolasbeltran.com.ar" target="_blank" id="desarrollador">Nicolás Beltrán</a></p>
</footer>

<script type="text/javascript" src="jQuery/jQuery-2.2.3-uncompressed.js"></script>
<script type="text/javascript" src="alertify/alertify.js"></script>
<script type="text/javascript" src="js.js" ></script>

<script>
var mensaje = $("#contacto p").html()

if(mensaje=="Tu mensaje fue enviado con éxito"){
	alertify.success("Tu mensaje fue enviado con éxito");
	}
	
if(mensaje=="Hubo un error, inténtalo nuevamente"){
	alertify.error("Hubo un error, inténtalo nuevamente");
	}

</script>

</body>


</html>
