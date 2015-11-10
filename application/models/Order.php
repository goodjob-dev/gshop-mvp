<?php 

	class Order extends Gs_Model
	{
		private $_number = '';
		
		
		private $_email  = '';
		
		public function __construct()
		{
			parent::__construct();
		
			$this->load->database();
		}
		
		public function send( $number )
		{
			$this->_number = $number;
			
			if( $this->email() )
			{
				return $this->insert();
			}
		}
		
		private function email()
		{
			$this->load->library('email');
			
			/**
			 * From:
			*/
			$this->email->from('');
			
			/**
			 * To:
			*/
			$this->email->to( $this->_email ); 
			
			/**
			 * Subject:
			*/
			$this->email->subject( 'New order' );
			
			
			/**
			 * Message:
			*/
			$this->email->message('Phone number - ' . $this->_number);

			
			return $this->email->send();
			
		}
		private function insert()
		{
			return $this->db->insert('orders', array('phone_number' => $this->_number) );
		}
	}

?>