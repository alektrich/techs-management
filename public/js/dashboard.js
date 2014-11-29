$.fn.clicktoggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).click(function() {
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};

$(document).ready(function() {

	$('button#toronto').clicktoggle(function() {

		$('div#torontoTechs').slideDown();

	},  function() {

		$('div#torontoTechs').slideUp();	

	});

	$('button#calgary').clicktoggle(function() {

		$('div#calgaryTechs').slideDown();

	},  function() {

		$('div#calgaryTechs').slideUp();	

	});

	$('button#vancouver').clicktoggle(function() {

		$('div#vancouverTechs').slideDown();

	},  function() {

		$('div#vancouverTechs').slideUp();	

	});


	$('li.navbar-link#appliances').on('click', function() {

		$('div#torontoTechs').slideDown();
		$('button#calgary, button#vancouver').attr('disabled', true);

	});
});
