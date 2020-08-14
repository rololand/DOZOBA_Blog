$(document).ready(function(){
	var NavY = $('.navbar').offset().top;
	var stickyNav = function(){
		var Scrolly = $(window).scrollTop();

		if (Scrolly > NavY) {
			$('.nav, .navbar-header ').css({
				'padding-top': '0px',
				'padding-bottom': '0px'
			});
			$('.navbar').addClass('navbar-fixed-top');
			
		} else {
			$('.nav, .navbar-header ').css({
				'padding-top': '25px',
				'padding-bottom': '25px'
			});
			$('.navbar' ).removeClass('navbar-fixed-top');
			
		}
	};
	stickyNav();

	$(window).scroll(function() {
		stickyNav();
	});
	
	$('.menupost').click(function(){
	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top-100
	    }, 800);
	});

	
});



//wgrywanie kolejnych postow
var indeks = 1;
function zaladujPosty(indeksMax, kategoria) {
	
	if (indeks<indeksMax){
		indeks = indeks + 9;
		if (indeks>=indeksMax-9){
			$('#zaladujPostyButton').css("display","none");
		}
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				$('#loading').css("display","none");
				$('#containerPosty').append(this.responseText);
			} else {
				$('#loading').css("display","block");
			};
			
		};
		 xhttp.open("GET", "php/zaladujposty.php?indeks="+indeks+"&kategoria="+kategoria, true);
		 xhttp.send(); 
	};
		
	
	
};