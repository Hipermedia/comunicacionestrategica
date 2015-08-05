jQuery(document).ready(function($) {

	//Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');


	//Agrega una animación al hacer scroll al llegar a un elemento gracias a waypoints
	$('.titulo').waypoint(function(direction) {
	  $('.titulo').addClass( 'fadeInUp animated' );
	},{
	  offset:'20%'
	});



	/* FLEXSLIDER; #cover-slider
	--------------------------------------------*/

	$('#cover-slider-thumb-nav').flexslider({
	 	animation: "slide",
	 	controlNav: false,
	 	animationLoop: false,
	 	slideshow: false,
	 	itemWidth: 147,
	 	asNavFor: '#cover-slider'
	});

	$('#cover-slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#cover-slider-thumb-nav"
	});

	$('#cover-slider-columnistas').flexslider({
	  	animation: "slide",
	  	animationLoop: false,
	  	itemWidth: 300,
	  	itemMargin: 0,
	  	controlNav: false
	});

	$('#cover-slider-videos').flexslider({
	  animation: "slide"
	});

	$('#cover-slider-analisis').flexslider({
	  animation: "slide"
	});
});

