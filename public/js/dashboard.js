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

	$('button#calgary, button#vancouver').attr('disabled', true);

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
		$('div#calgaryTechs').slideUp();
		$('div#vancouverTechs').slideUp();
		$('button#toronto').attr('disabled', false);
		$('button#calgary').attr('disabled', true);
		$('button#vancouver').attr('disabled', true);

	});

	$('li.navbar-link#ducts').on('click', function() {

		$('div#calgaryTechs').slideDown();
		$('div#torontoTechs').slideUp();
		$('div#vancouverTechs').slideUp();
		$('button#calgary').attr('disabled', false);
		$('button#toronto').attr('disabled', true);
		$('button#vancouver').attr('disabled', true);

	});

	$('li.navbar-link#interlock').on('click', function() {

		$('div#vancouverTechs').slideDown();
		$('div#calgaryTechs').slideUp();
		$('div#torontoTechs').slideUp();
		$('button#vancouver').attr('disabled', false);
		$('button#toronto').attr('disabled', true);
		$('button#calgary').attr('disabled', true);

	});
});
