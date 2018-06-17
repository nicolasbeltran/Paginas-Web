// JavaScript Document



$(document).ready(function() {

	window.scrollTo(0, 0);


	$("#nombre").change(function(){
		$("label[for='nombre']").css("animation","efectofade 1s forwards");
	});
	
	$("#mail").change(function(){
		$("label[for='email']").css("animation","efectofade 1s forwards");
	});
	
	$("#telefono").change(function(){
		$("label[for='telefono']").css("animation","efectofade 1s forwards");
	});
	
	$("#mensaje").change(function(){
		$("label[for='mensaje']").css("animation","efectofade 1s forwards");
	});





		$(window).scroll(function() {
		  if ($(this).scrollTop() > 500) {
			$("nav").addClass("fondo-negro");
			$("nav a").addClass("letra-blanca");
			$("#borde").css("color","white");
		  }
		  else {
			$("nav").removeClass("fondo-negro");
			$("nav a").removeClass("letra-blanca");
			$("#borde").css("color","black");
		  }
	});




	$("#borde").click(function(){
		$("#menu2").fadeIn(200);
	});
	
	$(".cerrar").click(function(){
		$("#menu2").fadeOut(200);
	});
	
	$("#menu2 a").click(function(){
		
		$("#menu2").fadeOut(200);
	});
	



	$(document).ready(function(e) {
    	$("nav a").click(function(e){
		e.preventDefault();
		});
	});

	
	$("nav a,#menu2 a").on('click', function(){
					var $link = $(this);
					var anchor = $link.attr('href');
					$('html, body').stop().animate({
					scrollTop: $(anchor).offset().top - 50
					}, 800);
					
	});
	


});