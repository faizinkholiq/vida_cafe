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

        if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "inbox";
            $d['content_view'] = 'system/inbox';
            $d['modal_view'] = 'system/modal/modal_inbox';
            $d['data'] = $this->inbox_model->list();
            
            $this->load->view('system/dashboard', $d);
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function send()
    {
        $nd = $this->get_input();
        if($this->inbox_model->create($nd)){
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
            redirect('contact/');
        }else{
            echo json_encode($data);
        }
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["email"] = $this->input->post('email');     
        $nd["message"] = $this->input->post('message');  
        $nd['time'] = date('Y-m-d H:i:s');

        return $nd;
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $detail = $this->inbox_model->detail($id);

        if(!empty($id) && $detail){
            if($this->inbox_model->delete($id)){
                $data = [
                    'success' => 1,
                    'message' => 'Delete data success ',
                ];
            }else{
                $data = [
                    'success' => 0,
                    'message' => 'Delete data failed ',
                ];
            }
        }else{
            $data = [
                'success' => 0,
                'message' => 'id not found ',
            ];
        }

        $this->session->set_flashdata('msg', $data);
        redirect('admin/inbox/');
    }
}