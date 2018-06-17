// JavaScript Document

var ancho = window.outerWidth;


if(ancho>800){

		$(window).scroll(function() {


				 if ($(this).scrollTop() > 300) {
				 	 $("#lenguajes .titulo").css("animation","titulo 1s linear forwards");
				 }
		          if ($(this).scrollTop() > 500) {
		            $("#lenguajes .cajax").css("animation","cajax 1s linear forwards");



			            $(".html5-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 60,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#f1662a'
					    	});

			            		$("#html5").removeClass("html5-evento");

			            $(".css3-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 90,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#1c88c7'
					    	});

			          			  $("#css3").removeClass("css3-evento");

			            $(".js-evento").circliful({
					         animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 50,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#f1bf22'
					    	});

					   			 $("#js").removeClass("js-evento");

							$(".jq-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 75,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#076BB2'
					    	});

					    		$("#jq").removeClass("jq-evento");
			      }


			     
			     if ($(this).scrollTop() > 900) {
				 	$("#programas .titulo").css("animation","titulo 1s linear forwards");
				 }

		          if ($(this).scrollTop() > 1100) {

		            
		            $("#programas .cajax").css("animation","cajax 1s linear forwards");

		            	$(".dreamweaver-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 50,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#64F900'
					        });

		            			$("#dreamweaver").removeClass("dreamweaver-evento");

					        $(".edge-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 90,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#87769C'
					        });

					        	$("#edge").removeClass("edge-evento");

					        $(".photoshop-evento").circliful({
					         animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 50,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#30D3F6'
					        });

					        	$("#photoshop").removeClass("photoshop-evento");

					        $(".illustrator-evento").circliful({
					        animation: 1,
					        animationStep: 3,
					        foregroundBorderWidth: 5,
					        backgroundColor: "none",
					        percent: 25,
					        iconColor: '#3498DB',
					        iconSize: '40',
					        iconPosition: 'middle',
					        start:50,
					        showPercent:1,
					        target:0,
					        foregroundColor:'#F97019'
					        });

					        	$("#illustrator").removeClass("illustrator-evento");

		          }
		          

		          if ($(this).scrollTop() > 1500) {
		            $("#trabajos .titulo").slideDown(1000);         
		          }

		          if ($(this).scrollTop() > 1700) { 
		            $("#flejes .cajay").css("animation","cajay 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 2400) {
		            $("#prid .cajay2").css("animation","cajay2 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 3000) {
		            $("#oliver .cajay").css("animation","cajay 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 3400) {
		            $("#contacto .titulo").css("animation","titulo 1s linear forwards");
		            $("#nombre").css("animation","nombre 1.5s ease-in forwards");
		            $("#mail").css("animation","mail 1.5s ease-in forwards");
		            $("textarea").css("animation","mensaje 1.5s ease-in forwards");
		          }


		 
		    });


}




if(ancho<800){

		$(window).scroll(function() {


				 if ($(this).scrollTop() > 300) {
				 	 $("#lenguajes .titulo").css("animation","titulo 1s linear forwards");
				 }
		          if ($(this).scrollTop() > 500) {
		            $("#lenguajes .cajax").css("animation","cajax 1s linear forwards");
			         
			      }
	     
			     if ($(this).scrollTop() > 900) {
				 	$("#programas .titulo").css("animation","titulo 1s linear forwards");
				 }

		          if ($(this).scrollTop() > 1100) {
		            
		            $("#programas .cajax").css("animation","cajax 1s linear forwards");

		          }
		          

		          if ($(this).scrollTop() > 1500) {
		            $("#trabajos .titulo").slideDown(1000);         
		          }

		          if ($(this).scrollTop() > 1700) { 
		            $("#flejes .cajay").css("animation","cajax 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 2400) {
		            $("#prid .cajay2").css("animation","cajax 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 3000) {
		            $("#oliver .cajay").css("animation","cajax 1s ease-in forwards");
		          }

		          if ($(this).scrollTop() > 3400) {
		            $("#contacto .titulo").css("animation","titulo 1s linear forwards");
		            $("#nombre").css("animation","nombre 1.5s ease-in forwards");
		            $("#mail").css("animation","mail 1.5s ease-in forwards");
		            $("textarea").css("animation","mensaje 1.5s ease-in forwards");
		          }


		 
		    });

}