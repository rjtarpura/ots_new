<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	
	public function index()
	{
		$this->data['child']	=	'page-blank';
		$this->load->view('layout/parent',$this->data);
	}
}
