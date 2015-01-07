/*!
*	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
*	function: scrollTop
*	author: KUATOproject
*	created: 11/2014
*	desc: fades in an "a" with class "top_btn" if user scrolls down 5 pixel
*	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
*/

$( document ).ready(function() {
  $('a.top_btn').on('click', function(e){
    var href = $(this).attr('href');
    $('html, body').animate({
        scrollTop:$(href).offset().top
    },'slow');
    e.preventDefault();
});
});

// Show/Hide Button
$(window).scroll(function() {
    if ($(this).scrollTop() > 5) 
	{$('.top_btn').fadeIn(); }
	else 
	{$('.top_btn').fadeOut();}
});