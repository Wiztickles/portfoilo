$(document).ready(function(){
	onGear();
});


function onGear(){

	var svgContainerBike = document.querySelector("#motorcycle");
	var svgContentBike = svgContainerBike.contentDocument; 
	var bike = svgContentBike.querySelector("#motorcycle");
	var svgContainerMusic = document.querySelector("#music");
	var svgContentMusic = svgContainerMusic.contentDocument; 
	var guitar = svgContentMusic.querySelector("#guitar");
	var svgContainerGear = document.querySelector("#gear");
	var svgContentGear = svgContainerGear.contentDocument; 
	var gear = svgContentGear.querySelector("#gear");
	var t1 = new TimelineMax({repeat:-1,repeatDelay:2,paused:false});


	t1.to((bike), 0.3, {rotation:45, directionalRotation:"330_ccw",transformOrigin: "15% 75%"}).to((bike), 0.3, {rotation:45, directionalRotation:"0_cw",transformOrigin: "15% 75%"}).to((bike), 0.25,  {delay: 0.2 ,rotation:45, directionalRotation:"30_cw",transformOrigin: "90% 80%"}).to((bike), 0.3, {delay:0.2 ,rotation:45, directionalRotation:"0_ccw",transformOrigin: "90% 80%"}).to((guitar), 0.4, {delay:2, rotation:45, directionalRotation:"340_ccw",transformOrigin: "50% 50%"}).to((guitar), 0.4, {rotation:45, directionalRotation:"0_cw",transformOrigin: "50% 50%"}).to((guitar), 0.4, {rotation:45, directionalRotation:"340_ccw",transformOrigin: "50% 50%"}).to((guitar), 0.4, {rotation:45, directionalRotation:"0_cw",transformOrigin: "50% 50%"}).to((gear), 0.5, {delay:2, rotation:180,transformOrigin: "50% 50%"});


}
