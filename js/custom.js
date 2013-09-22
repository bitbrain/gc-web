var data = '/proxy.php?url=https://raw.github.com/MyRealityCoding/galacticum/master/res/meta.json';

// Create a team view
$('.team').icebearTeam({
    datasource : data
});

$('.progress').icebearProgress({
    datasource : data,

    onEnterPhase : function(element) {
            
                element.find('.ui-progressbar-value').css({
                        backgroundImage: "url('/img/progress.png')",
                        backgroundSize : "100% 100%"
                });
                

                element.find('.caption').animate({
                    color: '#6826ff'
                }, 250);
            },
    onLeavePhase : function(element) {
            
                element.find('.ui-progressbar-value').css({
                        backgroundImage: "url('/img/progress-simple.png')"
                });

                element.find('.caption').animate({
                    color : '#109ce5'
                }, 580);
    }
});

$(document).ready(function() {

	// Add classes
	$('.team div.member').addClass('cell box');
});

$(window).resize(function() {
	// Add classes
	$('.team div.member').addClass('cell box');
});