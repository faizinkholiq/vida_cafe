<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
        $this->load->model('gallery_model');		
	}
	
	public function index()
	{
        $d['profile'] = $this->home_model->detail(1);
        $d['menu'] = $this->gallery_model->list();		
		$d['highlight_menu'] = 'gallery';
		$d['content_view'] = 'gallery';
		$this->load->view('dashboard', $d);
	}

}
