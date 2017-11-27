<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Func1 extends MY_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Func1',
            'content' => 'This is an example.',
        ];
        $this->load->view('admin/common/message', $data);
    }

    public function page1()
    {
        $this->load->view('admin/func1/page1');
    }
    
    public function page2()
    {
        $this->load->view('admin/func1/page2');
    }
}
