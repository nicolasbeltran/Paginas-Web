<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Pre-consulta dengue</title>

<link rel="stylesheet" href="estilofinal.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="alertify/alertify.core.css" />
<link rel="stylesheet" href="alertify/alertify.default.css" />

<style>

	iframe{
		margin-top:10px;
		}
		
	#explicacion1 a{
		text-decoration:none;
		}
	#explicacion2{
		margin-top:100px;
		
		}
		
	#explicacion3{
		margin-top:50px;
		position:relative;
		left:13%;
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

	<header><h1 id="titulo">La interfaz</h1></header>
    
    <section id="explicacion1">
    	<h3>¿Cómo acceder?</h3>
    	<p>La interfaz esta pensada como un anexo de la sección "Dengue" de la página web del <a href="http://www.msal.gob.ar/dengue/" target="_blank">Ministerio de Salud de la Nación</a>.</p>
        <p>Lo que se ve en la imagen es una representación de las alternativas que puede tener el usuario para acceder a la pre-consulta.</p>
        <img src="imagenesfinal/compu3-.png" width="99%" alt="Captura de pantalla de la página del Ministerio de Salud">
   </section>
	
    <section id="explicacion2">
    	<h3>Haga una pre-consulta</h3>
    	<p>A continuación mostramos un prototipo del modo en que puede se puede realizar una pre-consulta dentro de la página del Ministerio de Salud.</p>
        <p>Los resultados que devolverá la página dependerán de la cantidad de síntomas y de días que el usuario tilde.</p>
        
    	<iframe src="preconsulta2.html" width="85%" height="600px" frameborder="0"></iframe>
    </section>
    
    <section id="explicacion3">
    	<p>Si quiere realizar una nueva pre-consulta actualize la página</p>
       
    </section>
	 <img src="imagenesfinal/actualizar.png" width="5%" alt="">
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

(document).ready(function() {

    window.scrollTo(0, 0);
});

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
