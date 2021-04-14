<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->model('reservation_model');		
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);	
		$d['highlight_menu'] = 'reservation';
		$d['content_view'] = 'reservation';
		$this->load->view('dashboard', $d);
	}
}
