<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index()
	{
		$email = $this->input->post('email');
		if ($email !== null) {
			$_SESSION['is_admin'] = true;
			$_SESSION['user'] = $email;
			$_SESSION['nick_name'] = substr($email, 0, strpos($email, '@'));
			$_SESSION['picture'] = $this->get_gravatar_url($email);
			
			$this->load->helper('url');
			redirect('/admin');
		}
		$this->load->view('layout/admin/login');
	}

	private function get_gravatar_url($email) {
		$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=160";
		return $grav_url;
	}

}
