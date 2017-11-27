<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function index()
	{
		unset($_SESSION['is_admin']);
		$this->load->helper('url');
		redirect('/admin/login');
	}

}
