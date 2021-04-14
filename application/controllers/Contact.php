<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->model('contact_model');		
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);		
		$d['highlight_menu'] = 'contact';
		$d['content_view'] = 'contact';
		$this->load->view('dashboard', $d);
	}

}
