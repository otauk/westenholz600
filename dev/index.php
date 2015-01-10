<?php include("header.php");?>
<?php
	// Variablen einsammeln
	$name = $_POST["name"];
	$mail = $_POST["mail"];
	$comment = $_POST["comment"];
	if (empty($name)) {$fehler = 1;}
	else if (empty($mail)) {$fehler = 2;}
	else if (empty($comment)) {$fehler = 3;}
	else $fehler  = 0;
?>
			<div class="header index"></div>
			<div class="content">
				<div class="logo"></div>
				<div class="picnav" id="animate2">
					<div class="container">
						<div class="row">
							<div class="col-1_4">
								<div class="view view-first">
									<img src="img/festwochenende_freitag.jpg" alt="thumbs_head">
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
									<img src="img/festwochenende_samstag.jpg" alt="thumbs_head">
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
								    <img src="img/festwochenende_sonntag.jpg" alt="thumbs_head">
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
								    <img src="img/gewerbeschau_westenholz.jpg" alt="thumbs_head">
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
			<div class="placer rinde"></div>
			<div class="divider_1"></div>
			<div class="content">
				<div class="container flyLeft1">
					<div class="row">
						<div class="col-4_4 ">
							<h1>Das Dorf</h1>
						</div>
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
			<div class="divider_2"></div>
			<div class="rinde">
				<div class="content">
					<div class="container flyLeft2">
						<div class="row">
							<div class="col-4_4">
								<h1>Das Buch</h1>
							</div>
							<div class="col-2_4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Some text in a paragraph
							</div>
							<div class="col-2_4">
<img src="img/buch/buch_mockup.png" alt="buch_mockup" width="312" height="300" />
							</div>
						</div>
					</div>
				</div>
			</div>
					<div class="sponsoren">
						<div class="container">
							<div class="row">
								<div class="col-4_4">
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
									<span class="sponsoren">Sponsoren-Logos</span>
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
									<span class="sponsoren">
										<img src="img/w600_logo_klein.png" alt="w600_logo_klein" width="175" height="90" />
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php include ("footer.php");?>