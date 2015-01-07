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
	<body>
		<div class="navi_container"></div>
		<div class="wrapper">
			<div class="header"></div>
			<div class="content">
				<div class="logo"></div>
				<div class="container">
					<div class="row">
						<div class="navi">
							<ul class="nav clean">
								<li><a href="#">Kontakt</a></li>
								<li class="navi_border"><a href="#">Media</a></li>
								<li class="navi_border"><a href="#">Das Buch</a></li>
								<li class="dropdown navi_border"> <a href="#">Festjahr</a>
									<ul>
										<li class="dropdown"> <a href="#">Festwochenende</a>
											<ul>
												<li><a href="#">Freitag</a></li>
												<li><a href="#">Samstag</a></li>
												<li><a href="#">Sonntag</a></li>
												<li><a href="#">Lageplan</a></li>
												<li><a href="#">Busfahrplan</a></li>
											</ul>
										</li>
										<li><a href="#">Gewerbetag</a></li>
										<li><a href="#">Kirchenjubiläum</a></li>
				                        <li><a href="#">Veranstaltungen</a></li>
				                        <li><a href="#">Projekte</a></li>
				                        <li><a href="#">Arbeitsgruppen</a></li>
									</ul>
								</li>
								<li class="navi_border"><a href="#">Das Dorf</a></li>
							</ul>
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
										<td>
											<a href="#">
												Lorem Ipsum 1
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">
												Lorem Ipsum 2
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">
												Lorem Ipsum 3
											</a>
										</td>
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
							    	<form action="suche.php">
										<input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
									</form>
						        </div>
						        <div class="col-1_4">
							        <h2>Kontakt</h2>
							        	<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="contact">
											<input type="text" name="name" placeholder="Name" />
											<input type="text" name="mail" placeholder="E-Mail" />
											<textarea  type="text" name="comment" rows="5"  placeholder="Kommentar"></textarea>
											<input type="submit" value="senden" />
							        	</form>
							        	<?php
								        	if ($fehler == 0){
									        	echo "
									        	Vielen Dank für Ihre Mitteilung. <br/>Sie erhalten eine Kopie an '$mail'.
									        	";
								        	}
								        	?>
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
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch({
          'mode': 'live'
     });
});
</script>