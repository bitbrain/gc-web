// Create a team view
$('.team').icebearTeam({
    datasource : '/meta.json'
});

$(document).ready(function() {

	// Add classes
	$('.team div.member').addClass('cell box');
});

$(window).resize(function() {
	// Add classes
	$('.team div.member').addClass('cell box');
});