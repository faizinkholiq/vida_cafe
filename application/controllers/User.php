<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
    }

    function login(){
		if ($this->session->userdata('sess_data') == TRUE) {
            redirect('vessel');
        }else{
            $nd['username'] = $this->input->post('username');
            $nd['password'] = $this->input->post('password');
            
            if($check = $this->user_model->check_user($nd)){
                $data = [
                    'success' => 1,
                    'message' => 'Login success',
                ];
    
                $data_session = array(
                    'id_user' => $check,
                    'login' => true
                );
    
                $this->session->set_userdata('sess_data', $data_session);
    
            }else{
                $data = [
                    'success' => 0,
                    'message' => 'Login failed',
                ];
            }
    
            echo json_encode($data);
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