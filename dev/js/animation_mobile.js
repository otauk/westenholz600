var controller;
$(document).ready(function($) {
	controller = new ScrollMagic();
});
$(document).ready(function($) {
	var animPicnav = TweenMax.fromTo("#animate2", 1, {
		autoAlpha: 0,
		marginLeft: "-1000px",
		ease: Sine.easeOut
	}, {
		autoAlpha: 1,
		marginLeft: "0",
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 25
	}).setTween(animPicnav).addTo(controller);
	scene.reverse(0, false);
	var flyLeft1 = TweenMax.fromTo(".flyLeft1", 1, {
		autoAlpha: 0,
		marginLeft: "-200px",
		ease: Sine.easeOut
	}, {
		autoAlpha: 1,
		marginLeft: "0",
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 100
	}).setTween(flyLeft1).addTo(controller);
	scene.reverse(0, false);
	var flyLeft2 = TweenMax.fromTo(".flyLeft2", 1, {
		autoAlpha: 0,
		marginLeft: "-200px",
		ease: Sine.easeOut
	}, {
		autoAlpha: 1,
		marginLeft: "0",
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 300
	}).setTween(flyLeft2).addTo(controller);
	scene.reverse(0, false);
	var flyBottom = TweenMax.fromTo(".flyBottom", 1, {
		autoAlpha: 0,
		ease: Sine.easeOut
	}, {
		autoAlpha: 1,
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 300
	}).setTween(flyBottom).addTo(controller);
	scene.reverse(0, false);
});