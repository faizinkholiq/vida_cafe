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

	public function print($id)
    {
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [220, 140]]);
        $d['profile'] = $this->home_model->detail(1);	
		$d['detail'] = $this->reservation_model->detail($id);
        $html = $this->load->view('print/booking',$d,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // buka dengan browser
        //$mpdf->Output('aliakbar_MPDF.pdf','D'); // ini akan mendownload file dengan nama alaiakbar_mPD
    }
}
