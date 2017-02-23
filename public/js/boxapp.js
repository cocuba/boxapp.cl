
$(document).ready(function(){
	$(window).scroll(function(){
    if ( $(window).scrollTop() > 599 ) {
      $('.navbar').css('background-color', '#0269B0');
      $('.navbar').css('padding-top', '0');
      $('.navbar-nav a:hover').css('color', 'white');
      $('#mainLogo').attr('src','public/images/boxapplogo-inverted.png');
    } else {
      $('.navbar').css('background-color', 'transparent');
      $('.navbar').css('padding-top', '1%');
      $('#mainLogo').attr('src','public/images/boxapplogo.png');
  	}
	});	
})
