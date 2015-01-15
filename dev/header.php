<!DOCTYPE html>
<html>
	<head>
		<title>Westenholz 600 | Dorf erleben</title>
		<meta charset="utf-8">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
         <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
		<!-- Font -->
		<link type="text/css" rel="stylesheet" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css"  />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" >
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/custom-base.css"  />
		<!-- jScript -->
		<script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script>
		<script type="text/javascript" src="js/TweenMax.min.js" ></script>
		<script type="text/javascript" src="js/lightbox.min.js" ></script>
		<script type="text/javascript" src="js/scrollTop.min.js" ></script>
		<script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
		<script type="text/javascript" src="js/animation.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>
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
	</head>
	<body>
		<a id="top-link"></a>
		<a href="#top-link" class="top_btn"></a>
		<div class="navi_container"></div>
		<div class="wrapper">
			<?php include("navi-dropdown.php");?>