<!DOCTYPE html>
<html>
	<head>
		<title>w600 - Development</title>
		<meta charset="utf-8">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Font -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<!-- Stylesheet -->
		<link href="css/custom-base.css" rel="stylesheet" type="text/css"/>
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/lightbox.js" ></script>
		<script type="text/javascript" src="js/scrollTop.js" ></script>
		<script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
		<script type="text/javascript" src="js/animation.js"></script>
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