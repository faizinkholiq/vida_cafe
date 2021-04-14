<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->model('menu_model');		
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);
        $d['menu'] = $this->menu_model->list([
			"special" => true,
			"limit" => 4,
		]);		
		$d['highlight_menu'] = 'home';
		$d['content_view'] = 'index';
		$this->load->view('dashboard', $d);
	}
}
