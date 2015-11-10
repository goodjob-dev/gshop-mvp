<?php 
	
	class Track extends Gs_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function apply( $id )
		{
			return $this->db->insert('track', array('track_id' => $id));
		}
	}
	
?>