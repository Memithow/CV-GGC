$(document).ready(function(){
	$('.parallax-container').css('height', $(window).height());	
	$('#triangulo').css({'border-right-width': ($(".parallax1").width()/5),
            		'border-top-width': ($(".parallax1").height()/1.5),
            		'border-left-width':  ($(".parallax1").width()/5),
            		'border-bottom-width': ($(".parallax1").height()/1.5)});
	$('#triangulo-gris').css({'border-right-width': ($(".parallax1").width()/8),
	                    'border-top-width': ($(".parallax1").height()/2),
	                    'border-left-width': ($(".parallax1").width()/8),
	                    'border-bottom-width': ($(".parallax1").height()/2)});
	$('#triangulo-banner').css({'border-right-width': ($(".parallax1").width()/2.5),
	                    'border-top-width': ($(".parallax1").height()/4),
	                    'border-left-width': ($(".parallax1").width()/2.5),
	                    'border-bottom-width': ($(".parallax1").height()/4)});
	$('.parallax').parallax();
	$('.sidenav').sidenav();
	$('.fixed-action-btn').floatingActionButton({direction: 'left'});
	$('.tooltipped').tooltip();
	image_parallax();
});

$(window).on("resize", function(){
	$('.parallax-container').css('height', $(window).height());	
	image_parallax();
});

function image_parallax(){
	if ($(window).width() < 500){
		$('#triangulo-banner').css({'border-right-width':  ($(".parallax1").width()/3),
		                    'border-top-width': ($(".parallax1").height()/5),
		                    'border-left-width':  ($(".parallax1").width()/3),
		                    'border-bottom-width': ($(".parallax1").height()/5)});
		$('#triangulo-gris').css({'border-right-width':  ($(".parallax1").width()/4),
		                    'border-top-width': ($(".parallax1").height()/4),
		                    'border-left-width':  ($(".parallax1").width()/4),
		                    'border-bottom-width': ($(".parallax1").height()/4)});
		$('#triangulo').css({'border-right-width':  ($(".parallax1").width()/4),
		                    'border-top-width': ($(".parallax1").height()/2),
		                    'border-left-width':  ($(".parallax1").width()/4),
		                    'border-bottom-width': ($(".parallax1").height()/2)});
		$('#banner-image').attr('src', '../img/banner-360.jpg');
	}else{
		if ($(window).width() < 800){
			$('#triangulo-banner').css({'border-right-width':  ($(".parallax1").width()/3.5),
		                    'border-top-width': ($(".parallax1").height()/5),
		                    'border-left-width':  ($(".parallax1").width()/3.5),
		                    'border-bottom-width': ($(".parallax1").height()/4)});
			$('#triangulo-gris').css({'border-right-width':  ($(".parallax1").width()/5),
			                    'border-top-width': ($(".parallax1").height()/4),
			                    'border-left-width':  ($(".parallax1").width()/4),
			                    'border-bottom-width': ($(".parallax1").height()/4)});
			$('#triangulo').css({'border-right-width':  ($(".parallax1").width()/4),
			                    'border-top-width': ($(".parallax1").height()/2),
			                    'border-left-width':  ($(".parallax1").width()/4),
			                    'border-bottom-width': ($(".parallax1").height()/2)});
			$('#banner-image').attr('src', '../img/banner-760.jpg');
		}else{
			$('#triangulo-banner').css({'border-right-width':  ($(".parallax1").width()/3),
		                    'border-top-width': ($(".parallax1").height()/4),
		                    'border-left-width':  ($(".parallax1").width()/3),
		                    'border-bottom-width': ($(".parallax1").height()/4)});
			$('#triangulo-gris').css({'border-right-width':  ($(".parallax1").width()/4),
			                    'border-top-width': ($(".parallax1").height()/4),
			                    'border-left-width':  ($(".parallax1").width()/4),
			                    'border-bottom-width': ($(".parallax1").height()/4)});
			$('#triangulo').css({'border-right-width':  ($(".parallax1").width()/4),
			                    'border-top-width': ($(".parallax1").height()/2),
			                    'border-left-width':  ($(".parallax1").width()/4),
			                    'border-bottom-width': ($(".parallax1").height()/2)});
			$('#banner-image').attr('src', '../img/banner-1300.jpg');
		}
	}
}

