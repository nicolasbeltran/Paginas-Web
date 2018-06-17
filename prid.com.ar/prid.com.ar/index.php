<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pre-consulta dengue</title>

<link rel="stylesheet" href="estilofinal.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="alertify/alertify.core.css" />
<link rel="stylesheet" href="alertify/alertify.default.css" />

<style>
	body{
		background: -moz-radial-gradient(circle, #E1FDFD, #8CE5E5);
		}
		
		
	iframe{
		margin-bottom:100px;
		}
		
		
/*--------ICONOS FLIP--------*/
		
#todosiconos{
	display:flex;
	justify-content:center;
	flex-wrap:wrap;
	width:100%;
	}
		

.iconos {
	perspective: 1000px;
	margin: -44px;

}


	.iconos:hover .rotar, .iconos.hover .rotar {
		transform: rotateY(180deg);
	}

.iconos, .adelante, .atras {
	width: 320px;
	height: 340px;
	transform:scale(0.75,0.75);
	
	
}


.rotar {
	transition: 0.6s;
	transform-style: preserve-3d;
	position:relative;
    color: black;

	

}


.adelante, .atras {
	backface-visibility: hidden;
	position: absolute;
	top: 0;
	left: 0;
	cursor:pointer;
}



.adelante {
	z-index: 2;

	transform: rotateY(0deg);
	border-radius:10px;
}


.atras {
	transform: rotateY(180deg);
	
	border-radius:10px;
}


h4{
	font-size:1.4em;
	color:black;
	}
	
.atras p{
	text-align:center;
	font-size:1.3em;
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

	<header><h1>Nuestro proyecto</h1></header>
    
    <iframe width="740px" height="415" src="https://www.youtube.com/embed/duibSKG4av8" frameborder="0" allowfullscreen></iframe>
   
    
<section id="todosiconos">
    <div class="iconos" ontouchstart="this.classList.toggle('hover');">
        <a href="2interfaz.php">
            <div class="rotar" id="icono1">
                <div class="adelante">
                    <img width="70%" src="imagenesfinal/interfaz2.png" alt="">
                    <h4>La interfaz</h4>
                </div>
                <div class="atras">
                    <p>Cómo acceder a la pre-consulta.</p>
                    <p>Cómo será su interfaz en la web.</p>
                    <p>¡Hacé una prueba!</p>
                </div>
            </div>
        </a>
    </div>
    
    <div class="iconos" ontouchstart="this.classList.toggle('hover');">
        <a href="3algoritmo.php">
            <div class="rotar" id="icono2">
                <div class="adelante" >
                    <img width="70%" src="imagenesfinal/algoritmo2.png" alt="">
                    <h4>¿Cómo funciona?</h4>
                </div>
                <div class="atras">
                    <p style="margin-top:25%;">Conocé el algoritmo que hace posible la pre-consulta.</p>
                </div>
            </div>
        </a>
    </div>
        
    <div class="iconos" ontouchstart="this.classList.toggle('hover');">
        <a href="4quienessomos.php">
            <div class="rotar" id="icono3">
                <div class="adelante">
                    <img width="70%" src="imagenesfinal/equipo2.png" alt="">
                    <h4>¿Quiénes somos?</h4>
                </div>
                <div class="atras">
                    <p style="margin-top:25%;">Conocé al equipo detrás del proyecto.</p>
                </div>
            </div>
        </a>
    </div>
    
    <div class="iconos" ontouchstart="this.classList.toggle('hover');">
        <a href="6recorrido.php">
            <div class="rotar" id="icono4">
                <div class="adelante">
                    <img width="70%" src="imagenesfinal/recorrido3.png" alt="">
                    <h4>El recorrido del trabajo</h4>
                </div>
                <div class="atras">
                    <p style="margin-top:20%;">Identificar el objeto de estudio.</p>
                    <p>La falta de datos.</p>
                    <p>Reflexiones finales.</p>
                </div>
            </div>
        </a>
    </div>
    
    <div class="iconos" ontouchstart="this.classList.toggle('hover');">
        <a href="5descargas.php">
            <div class="rotar" id="icono5">
                <div  class="adelante">
                    <img width="70%" src="imagenesfinal/descargas3.png" alt="">
                    <h4>Descargas</h4>
                </div>
                <div class="atras">
                    <p>Descargá un PowerPoint de nuestro trabajo.</p>
                    <p>Si querés más información descargá el informe completo en PDF.</p>
                </div>
            </div>
        </a>
    </div>
 </section>

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
				$to = 'nico_beltran_92@hotmail.com,nicobeltran92@gmail.com'; 
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
