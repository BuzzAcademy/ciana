<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
				parent::__construct();

				$this->load->library(['session', 'admin_auth']);
				$this->check_auth();
		}
		
		private function check_auth()
		{
			$uri = $this->uri->uri_string();
			if (strpos($uri, 'admin') === 0 && strpos($uri, 'admin/login') !== 0 && $this->session->is_admin !== true) {
				$this->load->helper('url');
				redirect('/admin/login');
			}			
		}
}
