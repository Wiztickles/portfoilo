$(document).ready(function(){
	onGear();
	onMotorcycle();
	onMusic();
});


function onGear(){
	var svgContainer = document.querySelector("#gear");
	var svgContent = svgContainer.contentDocument; 
	var gear = svgContent.querySelector("#gear");
	var shadow = svgContent.querySelector("#shadow");

	$('.tinkerer_hob').on({
		mouseenter: function() {
			TweenMax.to($(gear), 2, {rotation:90, transformOrigin: "50% 50%"})
		},
		mouseleave: function() {
			TweenMax.to($(gear), 2, {rotation:90, directionalRotation:"270_ccw",transformOrigin: "50% 50%"});
		}
	});

}

function onMotorcycle(){
	var svgContainer = document.querySelector("#motorcycle");
	var svgContent = svgContainer.contentDocument; 
	var bike = svgContent.querySelector("#motorcycle");
	var t1 = new TimelineMax({repeat:-1,repeatDelay:0.3,paused:true});

	t1.to((bike), 0.3, {rotation:45, directionalRotation:"330_ccw",transformOrigin: "15% 75%"}).to((bike), 0.3, {rotation:45, directionalRotation:"0_cw",transformOrigin: "15% 75%"}).to((bike), 0.25,  {delay: 0.2 ,rotation:45, directionalRotation:"30_cw",transformOrigin: "90% 80%"}).to((bike), 0.3, {delay:0.2 ,rotation:45, directionalRotation:"0_ccw",transformOrigin: "90% 80%"}) ;


	$('.motorcycle_hob').on({
		mouseenter: function() {
			t1.play();
		},
		mouseleave: function() {
			t1.pause();

		}
	});
}

function onMusic(){
	var svgContainer = document.querySelector("#music");
	var svgContent = svgContainer.contentDocument; 
	var guitar = svgContent.querySelector("#guitar");
	var t1 = new TimelineMax({repeat:-1,paused:true});

	t1.to((guitar), 0.4, {rotation:45, directionalRotation:"340_ccw",transformOrigin: "50% 50%"}).to((guitar), 0.4, {rotation:45, directionalRotation:"0_cw",transformOrigin: "50% 50%"});

	$('.music_hob').on({
		mouseenter: function() {
			t1.play();
		},
		mouseleave: function() {
			t1.pause();
		}
	});
}