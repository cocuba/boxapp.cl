
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

	// init Isotope
	var iso = new Isotope( '.portfolio-items', {
	  itemSelector: '.portfolio-item',
	  layoutMode: 'fitRows'
	});

	// filter functions
	var filterFns = {
	  // show if number is greater than 50
	  numberGreaterThan50: function( itemElem ) {
	    var number = itemElem.querySelector('.number').textContent;
	    return parseInt( number, 10 ) > 50;
	  },
	  // show if name ends with -ium
	  ium: function( itemElem ) {
	    var name = itemElem.querySelector('.name').textContent;
	    return name.match( /ium$/ );
	  }
	};

	// bind filter button click
	var filtersElem = document.querySelector('.portfolio-filter');
	filtersElem.addEventListener( 'click', function( event ) {
	  // only work with buttons
	  if ( !matchesSelector( event.target, 'button' ) ) {
	    return;
	  }
	  var filterValue = event.target.getAttribute('data-filter');
	  // use matching filter function
	  filterValue = filterFns[ filterValue ] || filterValue;
	  iso.arrange({ filter: filterValue });
	});

	// change is-checked class on buttons
	var buttonGroups = document.querySelectorAll('.portfolio-filter');
	for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
	  var buttonGroup = buttonGroups[i];
	  radioButtonGroup( buttonGroup );
	};

	function radioButtonGroup( buttonGroup ) {
	  buttonGroup.addEventListener( 'click', function( event ) {
	    // only work with buttons
	    if ( !matchesSelector( event.target, 'button' ) ) {
	      return;
	    }
	    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
	    event.target.classList.add('is-checked');
	  });
	};
})
