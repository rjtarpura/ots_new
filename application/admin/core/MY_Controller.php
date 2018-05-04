<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function __construct(){
		parent :: __construct();
		
		$this->data['public_assets']	=	$this->config->item('base_url')."design/dist/";
		// echo $this->data['public_assets'];exit;
		
		$this->data['title']			=	'Materialize - Material Design Admin Template';
		
	}
	
	public function index()
	{
		
	}
}
