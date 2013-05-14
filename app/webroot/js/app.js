function moveBackground()
{
	var margin;
	
	margin = parseInt($('.container').css('margin-left'));
	
	move = -475 + margin;
	
	$('body').css('background-position-x', move+'px');

	return;
}

function toggleActions()
{
    
}

function inputSwap()
{
	
	if(this.value == this.defaultValue) 	this.value = '';
	else if(this.value == '')		this.value = this.defaultValue;
	
		
			console.log('wadap');			

}

$(window).resize(function(){
	
	moveBackground();
	
});

$(document).ready(function (){

	// keep background synced with layout
	moveBackground();
	
	// side actions display
	$('.actions-toggle').click(toggleActions());
	
	// for default value for inputs
	$('input[type="text"]').focus( inputSwap ).blur( inputSwap );
	$('input[type="password"]').focus( inputSwap ).blur( inputSwap );

});