<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reservation_model');
    }

	public function index()
	{
        if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "reservation";
            $d['content_view'] = 'system/reservation';
            $d['data'] = $this->reservation_model->list();
             
            $this->load->view('system/dashboard', $d);
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function send()
    {
        $nd = $this->get_input();

        if($this->reservation_model->create($nd)){
            $data = [
                'success' => 1,
                'message' => 'Create data success ',
            ];
        }else{
            $data = [
                'success' => 0,
                'message' => 'Create data failed ',
            ];
        }

        if($data['success'] === 1){
            redirect('reservation/');
        }else{
            echo json_encode($data);
        }
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["contact"] = $this->input->post('contact');     
        $nd["people"] = $this->input->post('people');  
        $nd["time"] = !empty($this->input->post('time'))? date_create($this->input->post('time'))->format('Y-m-d H:i:s') : null;  

        return $nd;
    }
}