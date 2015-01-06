var controller;
$(document).ready(function($) {
// init controller
controller = new ScrollMagic();
});
	$(document).ready(function($) {
		// Logo
		var logo = TweenMax.fromTo($(".logo"), 0.2,
								{
									backgroundImage: "url('img/w600_logo.png')",
									ease:Power2.easeOut

								},
								{
									backgroundImage: "url('img/w600_logo_klein.png')",
									backgroundRepeat: "no-repeat",
									//scale: 0.2,
									//top: "-122px",
									top: "15px",
									marginLeft:"15px",
									ease:Power2.easeOut
								}
								);
		var scene = new ScrollScene({offset:5})
		.setTween(logo)
		.addTo(controller);

		// Navigation
		var navi_container = TweenMax.fromTo($(".navi_container"), 0.2,
								{
									autoAlpha:0,
									ease:Sine.easeOut
								},
								{
									autoAlpha:1,
									ease:Sine.easeOut
								}
								);
		var scene = new ScrollScene({offset:5})
		.setTween(navi_container)
		.addTo(controller);

			// Navigation Border
		var navi_border = TweenMax.to($(".navi_border"), 0.2,
								{
									borderRight: "1px solid transparent",
									ease:Sine.easeOut
								}
								);
		var scene = new ScrollScene({offset:5})
		.setTween(navi_border)
		.addTo(controller);


		// Navigation Li
		var animNaviLi = TweenMax.to($(".shrink"), 0.2,
								{
									padding: "0px",
									backgroundColor:"none"
								});
		var scene = new ScrollScene({offset: 5})
		.setTween(animNaviLi)
		.addTo(controller);

		// Navigation ul
		var animNaviColor = TweenMax.to($(".clean"), 0.2,
								{
									backgroundColor:"none"
								});
		var scene = new ScrollScene({offset: 5})
		.setTween(animNaviColor)
		.addTo(controller);

		// Navigation li ul ul
		var animNaviUl = TweenMax.to($(".closer"), 0.2,
								{
									marginTop: "5px"
								});
		var scene = new ScrollScene({offset: 5})
		.setTween(animNaviUl)
		.addTo(controller);

		// Picnav (einmalig)
		var animPicnav = TweenMax.fromTo("#animate2", 1,
									{
										autoAlpha:0,
										marginLeft: "-1000px",
										ease:Sine.easeOut
									},
									{
										autoAlpha:1,
										marginLeft: "0",
										ease:Sine.easeOut
									}
									);
		var scene = new ScrollScene({offset:25})
		.setTween(animPicnav)
		.addTo(controller);
		scene.reverse(0, false);

		// flyLeft (einmalig)
		var flyLeft1 = TweenMax.fromTo(".flyLeft1", 1,
									{
										autoAlpha:0,
										marginLeft: "-200px",
										ease:Sine.easeOut
									},
									{
										autoAlpha:1,
										marginLeft: "0",
										ease:Sine.easeOut
									}
									);
		var scene = new ScrollScene({offset:100})
		.setTween(flyLeft1)
		.addTo(controller);
		scene.reverse(0, false);

			// flyLeft (einmalig)
		var flyLeft2 = TweenMax.fromTo(".flyLeft2", 1,
									{
										autoAlpha:0,
										marginLeft: "-200px",
										ease:Sine.easeOut
									},
									{
										autoAlpha:1,
										marginLeft: "0",
										ease:Sine.easeOut
									}
									);
		var scene = new ScrollScene({offset:300})
		.setTween(flyLeft2)
		.addTo(controller);
		scene.reverse(0, false);

		// flyBottom (einmalig)
		var flyBottom = TweenMax.fromTo(".flyBottom", 1,
									{
										autoAlpha:0,
										ease:Sine.easeOut
									},
									{
										autoAlpha:1,
										ease:Sine.easeOut
									}
									);
		var scene = new ScrollScene({offset:300})
		.setTween(flyBottom)
		.addTo(controller);
		scene.reverse(0, false);

	});