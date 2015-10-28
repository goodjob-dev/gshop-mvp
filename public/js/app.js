$(function()
{
	
	$('body').scrollspy
	({
		'target': '.navbar'
	});
	
	/**
	 * Initialize landing page navigation
	*/
	$('.in-page-link, .page-scroll a').bind('click', landingNav);

	$('.know-more').click(knowMore);
	
	function knowMore( evt )
	{
		$('#order-modal').modal('hide');

		linkTo( $(this).attr('href') );
	}

	function landingNav(evt)
	{
		evt.preventDefault();
		
		linkTo( $(this).attr('href') );
	}

	function linkTo( href )
	{
		var top = $( href ).offset().top - 60;

		$('html, body').stop().animate(
			{
				scrollTop: top
			}, 
			1000, 
			'easeInOutExpo'
		);
	}
});