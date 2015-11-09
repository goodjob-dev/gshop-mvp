$(function(w){
	
	/**
	 * Start app
	*/
	var init = function ()
	{
		$('body').scrollspy
		({
			'target': '.navbar'
		});
		
		startApp();
	},
	
	
	startApp = function()
	{
		/**
		 * Initialize landing page navigation
		*/
		$('.in-page-link, .page-scroll a').bind('click', landingNav);
		
		
		/**
		 * Order button click event
		*/
		$('.phone-submit').on('click', order);
	},
	
	order = function( evt )
	{
		var input  = $('.phone-number'),
			number = input.val();

		if( number == '' )
		{
			input.parent().parent().addClass('has-error');
			
			return false;
		}
		
		var url 	= '/order',
		
			data	= { number: number },
			
			success = function(evt)
			{
				
			};
		
		$.post( url, data, success );
	},
	
	landingNav = function(evt)
	{
		evt.preventDefault();
		
		linkTo( $(this).attr('href') );
	},
	
	/**
	 * Scroll to section
	 *
	*/
	linkTo = function ( href )
	{
		var top = $( href ).offset().top - 60;

		$('html, body').stop().animate(
			{
				scrollTop: top
			}, 
			1000, 
			'easeInOutExpo'
		);
	};
	
	
	init();
	
});