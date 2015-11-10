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
		
		(new Tracker).start();
		
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
			
			success = function(response)
			{
				if( response )
				{
					alert('Sent!!!');
				}
				else 
				{
					alert('Error sending your e-mail');
				}
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
	
	
	
	var Tracker = function()
	{
		var self = this;
		
		self.start = function()
		{
			$('.track-object').on('click', track);
		};
		
		var track = function( evt )
		{
			var track_id = $(this).data('track'),
			
				url		 = '/track',
				
				data	 = 
				{
					track_id: track_id
				};
				
			$.post( url, data );
		};
	};
	
	
	
	
	init();
	
});

