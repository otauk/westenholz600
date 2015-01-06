<!DOCTYPE html>
<html>
	<head>
		<title>w600 - Development</title>
		<meta charset="utf-8">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<!-- Font -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- Stylesheet -->
		<link href="css/custom-base.css" rel="stylesheet" type="text/css"/>
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js">
		<script type="text/javascript" src="js/scrollTop.js" ></script>
		<script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
		<script>
			var controller;
			$(document).ready(function($) {
				// init controller
				controller = new ScrollMagic();
			});
		</script>
	</head>
	<body>
		<div class="navi_container"></div>
		<div class="wrapper">
			<div class="header"></div>
			<div class="content">
				<div class="container">
					<div class="row">
				<div class="navi">
					<nav>
						<ul>
							<li class = "cat5 shrink">
			                    <a class="navitem" href="#">Kontakt</a>
			                </li>
							<li class = "cat4 shrink">
			                    <a class="navitem"  href="#">Media</a>
			                    <ul class="closer">
			                        <li><a href="#">Webseiten</a></li>
			                        <li><a href="#">Themes & Templates</a></li>
			                        <li><a href="#">Plugins</a></li>
			                    </ul>
			                </li>
							<li class = "cat3 shrink">
			                     <a class="navitem"  href="#">Das Buch</a>
			                     <ul class="closer">
			                         <li><a href="#">Webdesign</a></li>
			                         <li><a href="#">Programmierung</a></li>
			                         <li><a href="#">Online Marketing</a></li>
			                         <li><a href="#">Suchmaschinenoptimierung</a></li>
			                     </ul>
			                </li>
							<li class = "cat2 shrink">
			                    <a class="navitem" href="#">Das Festjahr</a>
			                    <ul class="closer">
			                        <li><a href="#">Festwochenende</a></li>
			                        <li><a href="#">Gewerbetag</a></li>
			                        <li><a href="#">Kirchenjubiläum</a></li>
			                        <li><a href="#">Veranstaltungen</a></li>
			                        <li><a href="#">Projekte</a></li>
			                        <li><a href="#">Arbeitsgruppen</a></li>
			                    </ul>
			                </li>

			                <li class = "cat1 shrink">
			                    <a class="navitem" href="#">Das Dorf</a>
			                </li>
			            </ul>
					</nav>
				</div>
					</div>
				</div>
				<div class="picnav" id="animate2">
					<div class="container">
						<div class="row">
							<div class="col-1_4">
								<div class="view view-first">
									<img src="img/thumbs_head.jpg" alt="thumbs_head">
									<div class="mask">
										<h2>Programm</h2>
										<a href="#" class="info">Infos</a>
									</div>
								</div>
								<div class="picnav_bottom">
									<div class="picnav_date">28. Aug</div>
									<div class="picnav_day">Freitag</div>
									<div class="picnav_event">Festwochenende</div>
									<div class="picnav_link">
										<a href="#">
											mehr erfahren
										</a>
									</div>
								</div>
							</div>
							<div class="col-1_4">
								<div class="view view-first">
									<img src="img/thumbs_head.jpg" alt="thumbs_head">
									<div class="mask">
										<h2>Programm</h2>
										<a href="#" class="info">Infos</a>
									</div>
								</div>
								<div class="picnav_bottom">
							    	<div class="picnav_date">29. Aug</div>
									<div class="picnav_day">Samstag</div>
									<div class="picnav_event">Festwochenende</div>
									<div class="picnav_link">
										<a href="#">
											mehr erfahren
										</a>
									</div>
								</div>
							</div>
							<div class="col-1_4">
								<div class="view view-first">
								    <img src="img/thumbs_head.jpg" alt="thumbs_head">
								    <div class="mask">
								    	<h2>Programm</h2>
										<a href="#" class="info">Infos</a>
								     </div>
								</div>
								<div class="picnav_bottom">
									<div class="picnav_date">30. Aug</div>
									<div class="picnav_day">Sonntag</div>
									<div class="picnav_event">Festwochenende</div>
									<div class="picnav_link">
										<a href="#">
											mehr erfahren
										</a>
									</div>
								</div>
							</div>
							<div class="col-1_4">
								<div class="view view-first">
								    <img src="img/thumbs_head.jpg" alt="thumbs_head">
								    <div class="mask">
								    	<h2>Programm</h2>
										<a href="#" class="info">Infos</a>
								    </div>
								</div>
								<div class="picnav_bottom">
									<div class="picnav_date">17. Mai</div>
									<div class="picnav_day">Freitag</div>
									<div class="picnav_event">Gewerbeschau</div>
									<div class="picnav_link">
										<a href="#">
											mehr erfahren
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="rinde"></div>
			<div class="divider_main"></div>
			<div class="content">
				<div class="main">
					<div class="container flyLeft1">
						<div class="row">
							<div class="col-4_4 ">
								<h1>Das Dorf</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-2_4">
						Westenholz ist mit fast 32 Quadratkilometern und 3.817 Einwohnern der größte
Ortsteil der Stadt Delbrück. Westenholz überzeugt durch ein hohes ehrenamtliches
Engagement, das sich auch durch die Vielzahl der Vereine, mit über 35 an der Zahl,
belegen lässt. Die Liebe zum Ort hat viele Bürgerinnen und Bürger, Vereine und
Institutionen beflügelt, das Dorfjubiläum „600 Jahre Westenholz“ gebührend zu
feiern.
Ehrgeizige Bauprojekte, wie das Sport- und Begegnungszentrum, kennzeichnen das
große gemeinschaftliche Engagement der Bürgerinnen und Bürger. Ein bedeutender
Erfolg dieser Einsatzfreudigkeit war 1985 "Bundesgold" beim Wettbewerb
"Unser Dorf soll schöner werden".
							</div>
							<div class="col-2_4">
Weiterhin sind eine Vielzahl von Gewerbebetrieben in Westenholz Zuhause. Viele
von ihnen haben ihre Betriebe bereits in dritter und vierter Generation und bieten
Arbeits- und Ausbildungsplätze vor Ort.
						<div class="btn">
							<div class="btn label">historie</div>
							<div class="btn bar"></div>
							<div class="btn active"></div>
						</div>
						<div class="btn">
							<div class="btn label">jubiläumslogo</div>
							<div class="btn bar"></div>
							<div class="btn active"></div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="divider_buch"></div>
			<div class="rinde2">
			<div class="content">
					<div class="buch">
					<div class="container flyLeft2">
						<div class="row">
							<div class="col-4_4">
								<h1>Das Buch</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-2_4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
							</div>
							<div class="col-2_4">
								<table class="tbl">
									<th>
										Pressearchiv
									</th>
									<tr>
										<td>Lorem Ipsum 1</td>
									</tr>
									<tr>
										<td>Lorem Ipsum 2</td>
									</tr>
									<tr>
										<td>Lorem Ipsum 3</td>
									</tr>
								</table>

							</div>
						</div>
					</div>
				</div>
					<div class="sponsoren">
						<div class="container">
							<div class="row">
								<div class="col-4_4">
									Sponsoren-Logos
								</div>
							</div>
						</div>
						<div class="btn">
							<div class="btn label">historie</div>
							<div class="btn bar"></div>
							<div class="btn active"></div>
						</div>
					</div>
				</div>
			<div class="divider_footer"></div>
			<div class="footer_bg">
				<div class="content">
					<div class="footer">
						<div class="container flyBottom">
						    <div class="row">
						        <div class="col-1_4 footer_border">
							        <h2>Allgemein</h2>
							        Das Dorf<br/>
									Das Festjahr<br/>
									Das Buch<br/>
									Arbeitsgruppen<br/>
									Presse<br/>
									Downloads<br/>
									Anfahrt<br/>
									Impressum<br/>
							    </div>
						        <div class="col-1_4 footer_border">
							        <h2>Festjahr</h2>
							        Gewerbetag<br/>
									Festwochenende Freitag<br/>
									Festwochenende Samstag<br/>
									Festwochenende Sonntag<br/>
									Busfahrpläne<br/>
									Kirchenjubiläum<br/>
									Deutscher Wandertag<br/>
									Hinweistafeln<br/>
							    </div>
						        <div class="col-1_4 footer_border">
							    	<h2>Suche</h2>
							    	<form>
								        <span>
											<input type="text" class="search" name="search"/>
											<input type="button" class="search-icon"  value=""/>
								        </span>
							    	</form>
						        </div>
						        <div class="col-1_4">
							        <h2>Kontakt</h2>
										<input type="text" name="name" placeholder="Name" />
										<input type="text" name="mail" placeholder="E-Mail" />
										<textarea  type="text" name="comment" rows="5"  placeholder="Kommentar"></textarea>
										<input type="button" value="senden" />
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script>
	$(document).ready(function($) {
		// Navigation

		var navi_container = TweenMax.fromTo($(".navi_container"), 0.2,
								{
									autoAlpha:0
								},
								{
									autoAlpha:0.8
								}
								);
		var scene = new ScrollScene({offset:5})
		.setTween(navi_container)
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
		var animNaviColor = TweenMax.to($("nav ul"), 0.2,
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
</script>

