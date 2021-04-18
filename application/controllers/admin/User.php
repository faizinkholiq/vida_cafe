<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index()
	{ 
        if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "user";
            $d['content_view'] = 'system/user';
            $d['modal_view'] = 'system/modal/modal_user';
            $d['data'] = $this->user_model->list();

            $this->load->view('system/dashboard', $d);
            
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function save()
    {
        $nd = $this->get_input();
        $filename = null;

        if($_FILES['file']['error'] == 0){
            $origin_file = $_FILES['file'];
            $arr_filename = explode('.', $origin_file['name']);
            $filename = date('YmdHis').'.'.$arr_filename[count($arr_filename) - 1];

            $config['upload_path'] = './assets/images/avatar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|svg';
            $config['file_name'] = $filename;
            $config['overwrite'] = true;
            $config['max_size'] = 2000;
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'success' => 0,
                    'message' => $this->upload->display_errors(),
                ];

                $this->session->set_flashdata('msg', $data);
                redirect('admin/user/');   
                return;
            }
        }
        $detail = $this->user_model->detail($nd['id']);
        
        if(!empty($filename)){
            $nd['avatar'] = $filename;
        }

        if($detail){
            if($this->user_model->edit($nd)){
                $data = [
                    'success' => 1,
                    'message' => 'Update data success ',
                ];
            }else{
                $data = [
                    'success' => 0,
                    'message' => 'Update data failed ',
                ];
            }
        }else{
            if($this->user_model->create($nd)){
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
        }

        $this->session->set_flashdata('msg', $data);
        redirect('admin/user/');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $detail = $this->user_model->detail($id);

        if(!empty($id) && $detail){
            if($this->user_model->delete($id)){
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
        redirect('admin/user/');
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["username"] = $this->input->post('username');     
        $nd["password"] = $this->input->post('password');     
        $nd["role"] = $this->input->post('role');     
        $nd["active"] = !empty($this->input->post('active'))? $this->input->post('active') : 0;     

        return $nd;
    }
}