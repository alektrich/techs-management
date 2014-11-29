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
		$('div#calgaryTechs').slideUp();
		$('div#vancouverTechs').slideUp();

	},  function() {

		$('div#torontoTechs').slideUp();	

	});

	$('button#calgary').clicktoggle(function() {

		$('div#calgaryTechs').slideDown();
		$('div#torontoTechs').slideUp();
		$('div#vancouverTechs').slideUp();

	},  function() {

		$('div#calgaryTechs').slideUp();	

	});

	$('button#vancouver').clicktoggle(function() {

		$('div#vancouverTechs').slideDown();
		$('div#torontoTechs').slideUp();
		$('div#calgaryTechs').slideUp();

	},  function() {

		$('div#vancouverTechs').slideUp();	

	});

});
