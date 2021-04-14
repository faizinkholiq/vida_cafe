<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->model('menu_model');		
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);
        $d['menu'] = $this->menu_model->list();		
		$d['highlight_menu'] = 'menu';
		$d['content_view'] = 'menu';
		$this->load->view('dashboard', $d);
	}
}
