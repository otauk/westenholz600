<!DOCTYPE html>
<html>
	<head>
		<title>KUATOplate</title>
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
		<ul class="navigation">
			<li class="nav-item"><a href="#">Home</a></li>
			<li class="nav-item"><a href="#">Portfolio</a></li>
			<li class="nav-item"><a href="#">About</a></li>
			<li class="nav-item"><a href="#">Blog</a></li>
			<li class="nav-item"><a href="#">Contact</a></li>
		</ul>
		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label for="nav-trigger"></label>
		<div class="site-wrap">
			<div class="mobile_nav"></div>
			<div class="header"></div>
			<div id="trigger1"></div>
			<div id="trigger2"></div>
			<div class="navi" id="animate1">
				<nav>
					<ul>
						<li class = "cat5 shrink">
		                    <a class="navitem" href="#">Kontakt</a>
		                    <ul>
		                        <li><a href="#">Deutschland</a></li>
		                        <li><a href="#">Amerika</a></li>
		                        <li><a href="#">Spanien</a></li>
		                    </ul>
		                </li>
						<li class = "cat4 shrink">
		                    <a class="navitem"  href="#">Media</a>
		                    <ul>
		                        <li><a href="#">Webseiten</a></li>
		                        <li><a href="#">Themes & Templates</a></li>
		                        <li><a href="#">Plugins</a></li>
		                    </ul>
		                </li>
						<li class = "cat3 shrink">
		                     <a class="navitem"  href="#">Das Buch</a>
		                     <ul>
		                         <li><a href="#">Webdesign</a></li>
		                         <li><a href="#">Programmierung</a></li>
		                         <li><a href="#">Online Marketing</a></li>
		                         <li><a href="#">Suchmaschinenoptimierung</a></li>
		                     </ul>
		                </li>
						<li class = "cat2 shrink">
		                    <a class="navitem" href="#">Das Festjahr</a>
		                    <ul>
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
			<div class="picnav" id="animate2">
				<div class="picnav_content">
					<div class="picnav_img">
					<div class="view view-first">
					     <img src="img/image.jpeg" />
					     <div class="mask">
					     <h2>Programm</h2>
					         <a href="#" class="info">Infos</a>
					     </div>
					</div>
					<div class="picnav_bottom">
						     ztrztr
					</div>
				</div>
					<div class="picnav_img">
					<div class="view view-first">
					     <img src="img/image.jpeg" />
					     <div class="mask">
					     <h2>Programm</h2>
					         <a href="#" class="info">Infos</a>
					     </div>
					</div>
					<div class="picnav_bottom">
						     ztrztr
					</div>
				</div>
					<div class="picnav_img">
					<div class="view view-first">
					     <img src="img/image.jpeg" />
					     <div class="mask">
					     <h2>Programm</h2>
					         <a href="#" class="info">Infos</a>
					     </div>
					</div>
					<div class="picnav_bottom">
						     ztrztr
					</div>
				</div>
					<div class="picnav_img">
					<div class="view view-first">
					     <img src="img/image.jpeg" />
					     <div class="mask">
					     <h2>Programm</h2>
					         <a href="#" class="info">Infos</a>
					     </div>
					</div>
					<div class="picnav_bottom">
						     ztrztr
					</div>
				</div>
				</div>
			</div>

			<div class="divider_main">Divider Main</div>
			<div class="main">
				<h1>Das Dorf</h1>
				<div class=" left">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
				</div>
				<div class=" right">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
				</div>
			</div>
			<div class="divider_buch">Divider Buch</div>
			<div class="buch">
				<h1>Das Buch</h1>
				<div class=" left">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
				</div>
				<div class=" right">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
				</div>
			</div>
			<div class="sponsoren">
					<div class="btn">
						<div class="btn label">historie</div>
						<div class="btn bar"></div>
						<div class="btn active"></div>
					</div>
			</div>
			<div class="divider_footer">Divider Footer</div>
			<div class="footer">
			<div class="container">
				    <div class="row">
				        <div class="col-1"></div>
				        <div class="col-1">
					        <h3>Allgemein</h3>
					        Das Dorf<br/>
							Das Festjahr<br/>
							Das Buch<br/>
							Arbeitsgruppen<br/>
							Presse<br/>
							Downloads<br/>
							Anfahrt<br/>
							Impressum<br/>
					    </div>
				        <div class="col-1">
					        <h3>Festjahr</h3>
					        Gewerbetag<br/>
							Festwochenende Freitag<br/>
							Festwochenende Samstag<br/>
							Festwochenende Sonntag<br/>
							Busfahrpläne<br/>
							Kirchenjubiläum<br/>
							Deutscher Wandertag<br/>
							Hinweistafeln<br/>
					    </div>
				        <div class="col-1">
					    	<h3>Suche</h3>
					    	<form>
						        <span>
									<input type="text" class="search" name="search"/>
									<input type="button" class="search-icon"  value=""/>
						        </span>
					    	</form>
				        </div>
				        <div class="col-1">
					        <h3>Kontakt</h3>
								<input type="text" name="name" placeholder="Name" />
								<input type="text" name="mail" placeholder="E-Mail" />
								<textarea  type="text" name="comment" rows="5"  placeholder="Kommentar"></textarea>
								<input type="button" value="senden" />
				        </div>
				        <div class="col-1"></div>
				    </div>
			</div>
		</div>
		</div>
	</body>
</html>

<script>
	$(document).ready(function($) {
		// Navigation
		var animNavi = TweenMax.to("#animate1", 0.5,
								{
									width:"100%",
									left: "0",
									margin: "0"
								});
		var scene = new ScrollScene({triggerElement: "#trigger1"})
		.setTween(animNavi)
		.addTo(controller);

		// Navigation Li
		var animNaviLi = TweenMax.to($(".shrink"), 0.5,
								{
									padding: "0 15px"
								});
		var scene = new ScrollScene({triggerElement: "#trigger1"})
		.setTween(animNaviLi)
		.addTo(controller);

		// Picnav (einmalig)
		var animPicnav = TweenMax.fromTo("#animate2", 0.5,
									{
										autoAlpha:0,
										width: "0"
									},
									{
										autoAlpha:1,
										width:"100%"
									}
									);
		var scene = new ScrollScene({triggerElement: "#trigger2"})
		.setTween(animPicnav)
		.addTo(controller);
		scene.reverse(0, false);
	});
</script>

