<div class="divider_footer"></div>
<a class="top_btn"></a>
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