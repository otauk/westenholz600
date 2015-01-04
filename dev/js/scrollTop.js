
$( document ).ready(function() {
  $('a[href^=#]').on('click', function(e){
    var href = $(this).attr('href');
    $('html, body').animate({
        scrollTop:$(href).offset().top
    },'slow');
    e.preventDefault();
});
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 5)
		{
		$('.top_btn').fadeIn();
		$('.navi').css(
			{
				"width":"100%",
				"margin": "0",
				"left":"0%",
				"transition" : "all 0.1s ease-in-out"
			}
		);
		$(".navi li").css(
			{
				"padding":"0px",
				"transition" : "all 0.1s ease-in-out"
			}
		);
		$(".navi li ul").css(
			{
				"margin-top":"5px"
			}
		);
	}
	else
	{
		$('.top_btn').fadeOut();
		$('.navi').css(
			{
				"width":"50%",
				"margin": "0 0 0 -25%",
				"left":"50%",
				"transition" : "all 0.1s ease-in-out"
			}
		);
		$(".navi li").css(
			{
				"padding":"15px 0px",
				"transition" : "all 0.1s ease-in-out",
			}
		);
		$(".navi li ul li").css (
			{
				"padding":"0"
			}
		);
		$(".navi li ul").css(
			{
				"margin-top":"20px"
			}
		);
	}
});