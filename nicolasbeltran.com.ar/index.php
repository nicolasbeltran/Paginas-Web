<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <title>Desarrollo web front-end</title>
    <meta name="description" content="Pagina web personal de Nicolas Beltran, desarrollador web front-end">
    <meta name="keywors" content="diseño, desarrollo, web, front-end, Nicolás, nicolas, Beltrán, beltran, html, css, javascript, jquery, photoshop, dreamweaver, illustrator">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="responsive.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="alertify/alertify.core.css" />
    <link rel="stylesheet" href="alertify/alertify.default.css" />
    <link href="circulo-porcentaje/css/jquery.circliful.css" rel="stylesheet" type="text/css" />


</head>


<body>


<section id="inicio">
	<article>
        <h3>HOLA, MI NOMBRE ES</h3>
        <div class="linea1"></div>
        <h3>NICOLÁS BELTRÁN</h3>
        <div class="linea2"></div>
        <div class="caja">
            <div class="linea"></div>
            <h1>Soy desarrollador web front-end</h1>
            <p>Conocé algunos de mis trabajos así como los lenguajes y </br>programas que utilizo para llevarlos a cabo.</p>
        </div>
    </article>
    <img src="imagenes/flecha.png" alt="">
</section>




<section id="lenguajes">

	<div class="titulo">
    	<h2>Lenguajes</h2>
    </div>
    
    <div class="cajax">
    	<article class="circulos">
            <article id="html5" class="html5-evento">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
            <article id="css3" class="css3-evento">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
            <article id="js" class="js-evento">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
            <article id="jq" class="jq-evento">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
        </article>
    </div>
    
</section>





<section id="programas">
	<div class="titulo"><h2>Programas</h2></div>
	<div class="cajax">
     <article class="circulos">
            <article id="dreamweaver" class="dreamweaver-evento">
                <h4>Adobe Dreamweaver</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>

            </article>
            <article id="edge" class="edge-evento">
                <h4>Adobe Edge Animate</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
            <article id="photoshop" class="photoshop-evento">
                <h4>Adobe Photoshop</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>
                    </div>
                </div>
            </article>
            <article id="illustrator" class="illustrator-evento">
                <h4>Adobe Illustrator</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="test-circle"></div>  
                    </div>
                </div>
            </article>
        </article>
    </div>
</section>



<section id="trabajos">

	<div class="titulo"><h2>Mis trabajos</h2></div>


	    <section id="flejes">
    	<div class="cajay">
             <img src="imagenes/flejes-logo.png">       
             <h3>www.flejesdeacero.com.ar</h3>
             <p>One-page responsive para una empresa dedicada a la venta y transformación de flejes de acero y la comercialización de diversos productos de acero.</p>
            <a target="_blank" class="boton-enlace" href="http://www.flejesdeacero.com.ar">Ir a la página</a>
        </div>
    </section>

	<section id="prid">
    	<div class="cajay2"> 
        <div id="logoprid">    
            <img class="logo" src="imagenes/logo4.png" width="100px" alt="">
            <h5 class="logo2">PRID</h5> 
            <h5 class="logo3">Programa de Registro</h5>
            <h5 class="logo3">Inclusivo del Dengue</h5>
        </div>
            <h3>www.prid.com.ar</h3>

            <p>Pagina web de escritorio realizada para un trabajo de facultad de estudiantes de la UBA.</p>

            <a target="_blank" class="boton-enlace" href="http://www.prid.com.ar">Ir a la página</a>
        </div>
    </section>



    <section id="oliver">
    	<div class="cajay">
            <img src="imagenes/oliver-logo.png">
            <h3>www.oliverstudio.com.ar</h3>
            <p>Página en la que estoy trabajando actualmente para un estudio de grabación de sonido.</p>
            <a target="_blank" class="boton-enlace" href="http://www.oliverstudio.com.ar">Ir a la página</a>   
        </div>
    </section>
</section>


<section id="contacto">
	<div class="titulo"><h2>Contacto</h2></div>


    
		<form action="" method="post">
        	<div id="formulario">
        		             <?php
                $name = $_POST['nombre'];
                $email = $_POST['mail'];
                $message = $_POST['comentario'];
                $from = '!----Consulta: nicolasbeltran.com.ar---------!'; 
                $to = 'nico_beltran_92@hotmail.com'; 
                $subject = '!----Consulta: nicolasbeltran.com.ar---------!';
                        
                $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                            
                if ($_POST['enviar']) {
                if (mail ($to, $subject, $body, $from)) { 
                    echo '<p style="color:#6CBF28">Tu mensaje fue enviado con éxito</p>';
                } else { 
                    echo '<p style="color:red">Hubo un error, inténtalo nuevamente</p>';
                }
            }
            ?>
                <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre">       
                <input type="email" name="mail" id="mail" value="" placeholder="E-mail*" required>
                <textarea id="comentario" name="comentario" cols="25" rows="2" placeholder="Mensaje"></textarea>    
                <input id="enviar" name="enviar" type="submit" value="Enviar mensaje">
            </div>
        </form>
        
		
	</section>




</body>

<script src="jQuery/jQuery-2.2.3-compressed.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="circulo-porcentaje/js/jquery.circliful.js"></script>
<script type="text/javascript" src="alertify/alertify.js"></script>
<script src="js.js"></script>


<script>
var mensaje = $("#formulario p").html()

if(mensaje=="Tu mensaje fue enviado con éxito"){
    alertify.success("Tu mensaje fue enviado con éxito");
    }
    
if(mensaje=="Hubo un error, inténtalo nuevamente"){
    alertify.error("Hubo un error, inténtalo nuevamente");
    }

</script>




</html>

