<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends MY_Controller {

	public function index()
	{
		$data = [
			'title' => 'Example',
			'content' => 'This is an example.',
		];
		$this->load->view('admin/common/message', $data);
	}

	public function example1()
	{
		$data = [
			'title' => 'Example 1',
			'content' => 'This is example 1.',
		];
		$this->load->view('admin/common/message', $data);
	}

	public function example2()
	{
		$data = [
			'title' => 'Example 2',
			'content' => 'This is example 2.',
		];
		$this->load->view('admin/common/message', $data);
	}

}
