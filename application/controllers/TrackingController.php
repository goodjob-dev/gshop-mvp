<?php 

	class TrackingController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model('track');
		}
		
		public function index()
		{
			$id = $this->input->post('track_id');
			
			if( null !== $id )
			{
				echo $this->track->apply( $id );
			}
		}
	}

?>