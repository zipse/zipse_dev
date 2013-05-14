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
	var wtf = $('.actions').css('display');
	
	// show side actions and move toggle button over
	if($('.actions-slick').css('display') == "none")
	{
	    $('.actions-slick').show("slide", {direction: "left"}, 500);
	    $('.actions-toggle').addClass('open');
	    $('.actions-toggle').css('display', 'none');
	    $('.actions-toggle').show("slide", {direction: "left"}, 600);
	    $('.actions-toggle').html('-');
	    
	}else{
	    
	    $('.actions-slick').hide('slide',{direction: 'left'}, 500);
	    $('.actions-toggle').hide('slide',{direction: 'right'}, 100);
	    $('.actions-toggle').show('slide',{direction: 'left'}, 500);
//	    $('.actions').removeClass('show');
//	    $('.actions').addClass('hide');
	    $('.actions-toggle').removeClass('open');
	    $('.actions-toggle').html('+');
	}
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
	
	if($('.actions-slick').css('display') !== "none") $('body').click( toggleActions );
	
	// side actions display
	$('.actions-toggle').click( toggleActions );
	
	// for default value for inputs
	$('input[type="text"]').focus( inputSwap ).blur( inputSwap );
	$('input[type="password"]').focus( inputSwap ).blur( inputSwap );

});