$(document).ready(function() {

	$('li.navbar-link').on('click', function() {

		$('li.navbar-link').removeClass('active');
		$(this).addClass('active');

	});

});