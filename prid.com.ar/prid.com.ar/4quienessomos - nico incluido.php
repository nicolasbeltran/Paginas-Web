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



main{
	height:2000px;}

	.slideshow {
  position: relative;
  overflow: hidden;
   }

	
	#motivaciones{
		margin-top:30px;
		
	}
	
	.nombre{
		font-size:1.5em;
		color:#068CC1;
		}
		
	.descripcion{
		font-size:1.1em;
		transition:color linear 3s;
		}
	.descripcion:hover{
		color:red;}
		

		
/*----------posiciones de las imagenes y texto---------------*/


	
	
	.agus img{
		display:none;
		position:absolute;
		right:55%;
		top: 73%;
		-moz-animation:agus 2s;
		-webkit-animation:agus 2s;
		animation:agus 2s;
	}
		
		.agus figcaption{
			display:none;
			width:40%;
			position:absolute;
			left:41%;
			top:68%;
			-moz-animation:textoagus 2s;
			-webkit-animation:textoagus 2s;
			animation:textoagus 2s;
		}
			.agus figcaption p{
				text-align:left;
			
		}
		
			@keyframes agus{
				0%{top:83%;
					opacity:0;}
				100%{top: 73%;
				opacity:1;}
				}

			@keyframes textoagus{
				0%{left:51%;
					opacity:0;}
				100%{left:41%;
				opacity:1;}
				}
		
	.nico img{
		display:none;
		position:absolute;
		right:15%;
		top: 137%;
		-moz-animation:nico 2s;
		-webkit-animation:nico 2s;
		animation:nico 2s;
	}
		
		.nico figcaption{
			display:none;
			width:40%;
			position:absolute;
			left:19%;
			top:132%;
		-moz-animation:textonico 2s;
		-webkit-animation:textonico 2s;
		animation:textonico 2s;
		}
	
			.nico figcaption p{
				text-align:right;
		}
		
			@keyframes nico{
				0%{top:147%;
					opacity:0;}
				100%{top: 137%;
				opacity:1;}
				}

			@keyframes textonico{
				0%{left:9%;
					opacity:0;}
				100%{left:19%;
				opacity:1;}
				}
				
	.nuria img{
		display:none;
		position:absolute;
		right:55%;
		top: 205%;
		-moz-animation:nuria 2s;
		-webkit-animation:nuria 2s;
		animation:nuria 2s;
	}
		
		.nuria figcaption{
			display:none;
			width:40%;
			position:absolute;
			left:41%;
			top:200%;
			-moz-animation:textonuria 2s;
			-webkit-animation:textonuria 2s;
			animation:textonuria 2s;
		}
			
			.nuria figcaption p{
				text-align:left;
			
		}
		
			@keyframes nuria{
				0%{top:215%;
					opacity:0;}
				100%{top: 205%;
				opacity:1;}
				}

			@keyframes textonuria{
				0%{left:51%;
					opacity:0;}
				100%{left:41%;
				opacity:1;}
				}
		
	.joel img{
		display:none;
		position:absolute;
		right:15%;
		top: 277%;
		-moz-animation:joel 2s;
		-webkit-animation:joel 2s;
		animation:joel 2s;
	}
		
		.joel figcaption{
			display:none;
			width:40%;
			position:absolute;
			left:19%;
			top:272%;
			-moz-animation:textojoel 2s;
			-webkit-animation:textojoel 2s;
			animation:textojoel 2s;
		}
			
			.joel figcaption p{
				text-align:right;
			
		}
		
			@keyframes joel{
				0%{top:282%;
					opacity:0;}
				100%{top: 272%;
				opacity:1;}
				}

			@keyframes textojoel{
				0%{left:9%;
					opacity:0;}
				100%{left:19%;
				opacity:1;}
				}


/*-------------------Efecto hover---------------*/

main img {
  position: relative;
  display: inline-block;
  background-color: #fff;
  border-radius: 20px;
 
  border-radius: 5px;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  
}

main img::after {
  content: "";
  border-radius: 5px;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 20px 5px #DCFCFC;
  opacity: 0;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

main img:hover {
  -webkit-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  box-shadow: 0px 0px 20px 5px #DCFCFC;
}

main img:hover::after {
    opacity: 1;
	box-shadow: 0px 0px 20px 5px #DCFCFC;
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

	<header><h1>¿Quiénes somos?</h1></header>
    
	<section id="integrantes">
           <div class="fotos">
              <figure class="agus"><img src="imagenesfinal/agusweb.jpg"  width="30%" alt=""><figcaption><p class="nombre" >Agustín Giovenale</p><p class="descripcion">Estudiante de Ciencias de la Comunicación en la Universidad de Buenos Aires, con aspiraciones en seguir publicidad. Baterista. Cinéfilo. Sociable y simpático.</p> </figcaption></figure>
              <figure class="nico"><img src="imagenesfinal/nico5.jpg" width="30%" alt=""><figcaption><p class="nombre">Nicolás Beltrán</p><p class="descripcion">Estudiante de Ciencias de la Comunicación en la UBA y de Desarrollo Web en la Universidad de la internet. Amigado con informática, peleado con el diseño. Apasionado por el futbol, el tenis y la música.</p></figcaption></figure>
              <figure class="nuria"><img src="imagenesfinal/nuria.jpg"  width="30%" alt=""><figcaption><p class="nombre">Nuria Banus</p><p class="descripcion">Estudiante de Ciencias de la Comunicación. Las fotos carnet le parecen un vejámen a la fotografía.</p> </figcaption></figure>
              <figure class="joel"><img src="imagenesfinal/joelweb.jpg" width="30%" alt=""><figcaption><p class="nombre">Joel Pica</p><p class="descripcion">Estudiante de Ciencias de la Comunicación. Sobrevivo en el Ministerio de Cultura de la Nacion. Amo las palabras y creo firmemente que un algoritmo es un algoritmo.</p></figcaption></figure>
           </div>
		

    </section>
    
    <section id="motivaciones">
        <p>Lo que nos motivó fue la idea de, mediante una plataforma virtual de acceso público, poder prevenir, informar y corroborar una enfermedad grave como lo es el dengue, a partir de la conexión de dicha plataforma con el Ministerio de Salud de la Nación, en la cual esten involucrados pacientes, médicos y en última instancia investigadores. </p>
    
    
    </section>
    <section></section>
    

</main>




		<!--Foooooooooooooooooooooooooooooooooooooooooooooooooter-->

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

<script>
	
		
	$(window).scroll(function() {
		  if ($(this).scrollTop() > 0) {
			$(".agus img").fadeIn(0);
		  }
		   else {
			$('.agus img').fadeOut(500);
		  }
			
				 if ($(this).scrollTop() > 0) {
					$(".agus figcaption").fadeIn(0);
				  }
				   else {
					$('.agus figcaption').fadeOut(500);
				  }
		   
			 if ($(this).scrollTop() > 400) {
			$(".nico img").fadeIn(0);
		  }
		   else {
			$('.nico img').fadeOut(500);
		  }

				  	 if ($(this).scrollTop() > 400) {
						$(".nico figcaption").fadeIn(0);
					  }
					   else {
						$('.nico figcaption').fadeOut(500);
					  }
		   if ($(this).scrollTop() > 700) {
			$(".nuria img").fadeIn(0);
		  }
		   else {
			$('.nuria img').fadeOut(500);
		  }

					  if ($(this).scrollTop() > 700) {
							$(".nuria figcaption").fadeIn(0);
						  }
						   else {
							$('.nuria figcaption').fadeOut(500);
						  }
  
			
			if ($(this).scrollTop() > 1200) {
			$(".joel img").fadeIn(0);
		  }
		   else {
			$('.joel img').fadeOut(500);
		  }
	
						if ($(this).scrollTop() > 1200) {
							$(".joel figcaption").fadeIn(0);
						  }
						   else {
							$('.joel figcaption').fadeOut(500);
						  }
	
	});
	

	
</script>

</html>
