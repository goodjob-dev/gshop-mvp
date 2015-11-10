<?php 

	class OrderController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model('order');
		}
		
		public function index()
		{	
			echo $this->order->send( $this->input->post('number') );
		}
	}

?>