$(function() {
	
	/* jQuery Flip Effect
	--------------------------------------------*/
	$(".hexagon_out").flip({trigger: 'hover'});
	
	/* Config effect RANDOM SHOW
	--------------------------------------------*/
	var configHexEffectBegin = {
		'-webkit-transition' : 'opacity 0.5s ease-in !important',
		'transition' : 'opacity 0.5s ease-in !important',
		'opacity' : '0',
	};
	var configHexEffectEnd = {
		'opacity' : '1',
	};
	var arrDiv = $('.hexagon_out').children('.front').css(configHexEffectBegin);
	var arrHex = [];
	arrDiv.each(function(){
		arrHex.push( $(this) );
	});
	arrHex.sort(randOrd); // array random
	
	/* Begin effect
	--------------------------------------------*/
	var i = 0;
	var showHexagon = setInterval(function(){
		var div = arrHex[i];
		if( i >= arrHex.length ) {
			clearInterval(showHexagon);
			return;
		}
		div.css(configHexEffectEnd);
		i++;
	}, 200);
	
});

/* Refer: http://javascript.about.com/library/blsort2.htm
--------------------------------*/
function randOrd() {
	return (Math.round(Math.random()) - 0.5);
}