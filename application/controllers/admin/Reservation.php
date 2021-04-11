<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('home_model');
    }

	public function index()
	{
        $d['highlight_menu'] = "reservation";
        $d['content_view'] = 'system/reservation';
 		$this->load->view('system/dashboard', $d);
    }
}