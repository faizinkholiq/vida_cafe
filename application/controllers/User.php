<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('home_model');
    }

    function login(){
		if ($this->session->userdata('sess_data') == TRUE) {
            redirect('admin/home');
        }else{
            $nd['username'] = $this->input->post('username');
            $nd['password'] = $this->input->post('password');

            if(!empty($nd['username']) && !empty($nd['password'])){
                if($check = $this->user_model->check_user($nd)){
                    $data_session = $this->user_model->detail($check);
                    $this->session->set_userdata('sess_data', $data_session);

                    redirect('admin/home');
        
                }else{
                    $this->session->set_flashdata('msg', 'Username / Password is wrong');
                    redirect('user/login');
                }
        
                echo json_encode($data);
            }else{
                $d['profile'] = $this->home_model->detail(1);
                $this->load->view('system/login', $d);
            }
            
        }
    }

    public function logout()
	{
		if ($this->session->userdata('sess_data') == TRUE) {
            $this->session->sess_destroy();
        }

        redirect('user/login');
	}
    
}