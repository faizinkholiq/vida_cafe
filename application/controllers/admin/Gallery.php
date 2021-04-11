<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('home_model');
    }

	public function index()
	{
        $d['highlight_menu'] = "gallery";
        $d['content_view'] = 'system/gallery';
 		$this->load->view('system/dashboard', $d);
    }
}