<?php

class Gs_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function render( $view, $params, $type = 'layer' )
	{
		$this->layout->render( $type . '/'. $type .'/' . $view, $params, FALSE );
	}
	
	public function renderPortal( $view, $params, $type = 'layer' )
	{
		$this->layout->render( $type . 'portal-/'. $type .'/' . $view, $params, FALSE );
	}
}

?>