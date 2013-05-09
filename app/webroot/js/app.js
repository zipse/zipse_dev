function moveBackground()
{
	var margin;
	
	margin = parseInt($('.container').css('margin-left'));
	
	move = -475 + margin;
	
	$('body').css('background-position-x', move+'px');
}

function inputSwap()
{
	if($('input').length == 0 ) return;
	
	$('input').each(function(){
		
		console.log('wadap');
	});
}

$(window).resize(function(){
	
	moveBackground();
	
});

$(document).ready(function (){

	// menu items

	
	moveBackground();
	
	// for default value for inputs
	
	inputSwap();

});