<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inbox_model');
    }

	public function index()
	{
        $d['highlight_menu'] = "inbox";
        $d['content_view'] = 'system/inbox';
        $d['modal_view'] = 'system/modal/modal_inbox';
        $d['data'] = $this->inbox_model->list();
 		$this->load->view('system/dashboard', $d);
    }
}