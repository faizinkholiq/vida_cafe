<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('home_model');
    }

	public function index()
	{
        $d['highlight_menu'] = "user";
        $d['content_view'] = 'system/user';
 		$this->load->view('system/dashboard', $d);
    }
}