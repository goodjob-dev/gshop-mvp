$(function()
{
	
	$('body').scrollspy
	({
		'target': '.navbar'
	});
	
	/**
	 * Initialize landing page navigation
	*/
	$('.navbar-brand, .page-scroll a').bind('click', landingNav);
	
	function landingNav(evt)
	{
		evt.preventDefault();
		
		var scrollTop = $( $(this).attr('href') ).offset().top;
		
		$('html, body').stop().animate(
			{
				scrollTop: scrollTop
			}, 
			1500, 
			'easeInOutExpo'
		);
	}
});