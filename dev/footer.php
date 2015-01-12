<div class="divider_footer"></div>
			<div class="footer_bg">
				<div class="content">
					<div class="footer">
						<div class="container flyBottom">
						    <div class="row">
						        <div class="col-1_4 footer_border">
							        <h2>Allgemein</h2>
							        <a href="das-dorf.php">Das Dorf</a><br/>
									<a href="festwochenende.php">Das Festjahr</a><br/>
									<a href="buch.php">Das Buch</a><br/>
									Arbeitsgruppen<br/>
									<a href="media.php">Presse</a><br/>
									<a href="media.php">Downloads</a><br/>
									<a href="kontakt.php">Anfahrt</a><br/>
									<a href="impressum.php">Impressum</a><br/>
							    </div>
						        <div class="col-1_4 footer_border">
							        <h2>Festjahr</h2>
							        <a href="gewerbeschau.php">Gewerbeschau</a><br/>
									<a href="festwochenende.php#freitag">Festwochenende Freitag</a><br/>
									<a href="festwochenende.php#samstag">Festwochenende Samstag</a><br/>
									<a href="festwochenende.php#sonntag">Festwochenende Sonntag</a><br/>
									<a href="festwochenende.php#plan">Busfahrpläne</a><br/>
									<a href="kirchenjubilaeum.php">Kirchenjubiläum</a><br/>
									<a href="veranstaltungen.php">Deutscher Wandertag</a><br/>
									<a href="projekte.php">Hinweistafeln</a><br/>
							    </div>
						        <div class="col-1_4 footer_border">
							    	<h2>Suche</h2>
							    	<form action="suche.php">
										<input type="text" name="q" id="tipue_search_input" autocomplete="off" disabled="disabled">
									</form>
						        </div>
						        <div class="col-1_4">
							        <h2>Kontakt</h2>
							        	<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="contact" onsubmit=" alert('Vielen Dank für Ihre Mitteilung.');" >
											<input type="text" id="name" name="name" placeholder="Name" />
											<input type="text" id="mail" name="mail" placeholder="E-Mail" />
											<textarea  type="text" id="comment" name="comment" rows="5"  placeholder="Kommentar"></textarea>
											<input type="submit" value="senden" id="submitbutton"/>
							        	</form>
							        	<?php
								        	if ($fehler == 0){
// ##################### Mail-Versand #####################

$absender = "kuato@gmx.de";
$sender            = "Westenholz 600 - Dorf erleben";
$sendermail        = "$absender";
$subject         = "Ihre Mitteilung";
$header = 'Content-type: text/html; charset=utf-8' . "\r\n";
$header .= "From: $sender <$sendermail>\r\n";
$header .= "BCC: $absender\r\n";
$header .= "Reply-to: <$sendermail>\r\n";
$header .= "Return-path: <$sendermail>\r\n";
$text = "
<p>
Sehr geehrte/r Herr/Frau $name,
</p>
<p>
vielen Dank für Ihre Mail.
</p>
<p>
###########################
</p>
<p>
Ihr Name: $name<br/>
Ihre E-Mail: $mail
</p>
Ihr Kommentar <br/>
$comment
<p>
###########################
</p>
<p>
Mit freundlichen Grüßen
</p>
<p>
Ihr Organisationskomitee von Westenholz 600 - Dorf <span style='color:red;'>er</span>leben
</p>
";

mail($mail, $subject, $text, $header);

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
	// Form validation
$(document).ready(function (){
    validate();
    $('#name, #mail, #comment').change(validate);
});

function validate(){
    if ($('#name').val().length   >   0   &&
        $('#mail').val().length  >   0   &&
        $('#comment').val().length    >   0) {
        $("input[type=submit]").prop("disabled", false);
    }
    else {
        $("input[type=submit]").prop("disabled", true);
    }
}
</script>
  <script>
// Slider
    $(function() {
      $('#slides').slidesjs({
        height: 700,
        play: {
          active: true,
          auto: true,
          interval: 8000,
          swap: true
        }
      });
    });
  </script>