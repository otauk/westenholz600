var controller;
$(document).ready(function($) {
	controller = new ScrollMagic();
});
$(document).ready(function($) {
	var logo = TweenMax.fromTo($(".logo"), 0.2, {
		backgroundImage: "url('img/w600_logo.png')",
		marginLeft: "15px",
		ease: Power2.easeOut
	}, {
		backgroundImage: "url('img/w600_logo_klein.png')",
		backgroundRepeat: "no-repeat",
		top: "5px",
		marginLeft: "10px",
		width: "180px",
		height: "100px",
		ease: Power2.easeOut
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(logo).addTo(controller);
	var sublogo = TweenMax.fromTo($(".sublogo"), 0.4, {
		backgroundImage: "url('img/w600_logo_ohne.png')",
		marginLeft: "30px",
		ease: Power4.easeOut
	}, {
		backgroundImage: "url('img/w600_logo_klein.png')",
		backgroundRepeat: "no-repeat",
		marginLeft: "10px",
		ease: Power4.easeOut
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(sublogo).addTo(controller);
	var navi_container = TweenMax.fromTo($(".navi_container"), 0.2, {
		autoAlpha: 0,
		ease: Sine.easeOut
	}, {
		autoAlpha: 1,
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(navi_container).addTo(controller);
	var navi_border = TweenMax.to($(".navi_border"), 0.2, {
		borderRight: "1px solid transparent",
		ease: Sine.easeOut
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(navi_border).addTo(controller);
	var animNaviLi = TweenMax.to($(".shrink"), 0.2, {
		backgroundColor: "none"
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(animNaviLi).addTo(controller);
	var animNaviColor = TweenMax.to($(".clean"), 0.2, {
		backgroundColor: "none"
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(animNaviColor).addTo(controller);
	var animNaviUl = TweenMax.fromTo($(".nav>li>a"), 0.2, {
		padding: "40px"
	}, {
		padding: "15px 40px"
	});
	var scene = new ScrollScene({
		offset: 5
	}).setTween(animNaviUl).addTo(controller);
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