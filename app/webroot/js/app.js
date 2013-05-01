function moveBackground()
{
	var margin;
	
	margin = parseInt($('.container').css('margin-left'));
	
	move = -370 + margin;
	
	$('body').css('background-position-x', move+'px');
}


$(window).resize(function(){
	
	moveBackground();
	
});

$(document).ready(function (){

	// menu items


	moveBackground();

});