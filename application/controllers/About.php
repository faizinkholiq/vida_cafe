<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');	
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);		
		$d['highlight_menu'] = 'about';
		$d['content_view'] = 'about';
		$this->load->view('dashboard', $d);
	}
}
