

$(document).ready(function() {


	var otherCities = function(city) {

		if(city == 'toronto') {
			city2 = 'calgary';
			city3 = 'vancouver';
		} else if (city == 'calgary') {
			city2 = 'toronto';
			city3 = 'vancouver';
		} else {
			city2 = 'calgary';
			city3 = 'toronto';
		}

		return [city2, city3];

	}

	var capitalize = function(string) {

		return string.charAt(0).toUpperCase() + string.substring(1);

	}

	var colapseDown = function(city, speed) {

		var capitalizedCity = capitalize(city);
		var mapSrc = $('#mapFrame').attr('src');

		$('div.' + city + 'Techs').slideDown(speed);
		$('div.' + otherCities(city)[0] + 'Techs').slideUp(speed);
		$('div.' + otherCities(city)[1] + 'Techs').slideUp(speed);

		if(mapSrc.indexOf(city) == -1) {

			$('#mapFrame').attr('src', 'https://www.google.com/maps/embed/v1/place?key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ&q=' + city);

		}

		$('div#iframeHead h4').text('#1 - Job in ' + capitalizedCity + ' - Details will go below');

	}

	var colapseUp = function(city, speed) {

		$('div#' + city + 'Techs').slideUp(speed);

	}

	var switchCategory = function(category) {

		$('h4#category').text(category);

	}

	$('button.cityDropDown').click(function() {
		
		colapseDown($(this).attr('id'), 100);

	});

	$('li.navbar-link').on('click', function() {

		switchCategory($(this).text());

	});

	var mapResponsive = function() {
		var topBarHeight = $('div.topBarContainer').height();
		var sideBarWidthMod = $('ul.side-nav').width();
		var jobDetailsHeight = $('div#iframeHead').height();
		
		if(sideBarWidthMod != 0) {
			var racio = (1 - ((window.outerHeight - topBarHeight - jobDetailsHeight) / (window.outerWidth - sideBarWidthMod + 10))) * 100;
		} else {
			var racio = (1 - ((window.outerHeight - topBarHeight - jobDetailsHeight) / (window.outerWidth))) * 100;
		}
		var percentage = racio + '%';
		$('#iframeBody').css('padding-bottom', percentage);
	}

	mapResponsive();

	$(window).resize(function() {
		mapResponsive();
	});


});
