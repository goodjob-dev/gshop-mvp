<?php 

	class HomeController extends Gs_Controller
	{
		public function index()
		{
			$this->layout->render( 
				'layer/landing', 
				[
					'title' => 'gShop'
				], 
				FALSE, 
				FALSE 
			);
		}	
	}
	
?>