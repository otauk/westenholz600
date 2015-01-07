<!DOCTYPE html>
<html>
	<head>
		<title>w600 - Development</title>
		<meta charset="utf-8">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<!-- Font -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<!-- Stylesheet -->
		<link href="css/custom-base.css" rel="stylesheet" type="text/css"/>
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js">
		<script type="text/javascript" src="js/scrollTop.js" ></script>
		<script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
		<script type="text/javascript" src="js/animation.js"></script>
		<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
		<script type="text/javascript">
$(function() {
    $('#slideshow').cycle({
        fx:       'fade',
        speed:   2000,
        after:     onAfter
    });
});

function onAfter(curr,next,opts) {
	var caption = 'Bild ' + (opts.currSlide + 1) + ' von ' + opts.slideCount;
	$('#caption').html(caption);
}
</script>
	</head>
