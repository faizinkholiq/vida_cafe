<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

	public function index()
	{ 
        if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "category";
            $d['content_view'] = 'system/category';
            $d['modal_view'] = 'system/modal/modal_category';
            $d['data'] = $this->category_model->list();

            $this->load->view('system/dashboard', $d);
            
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function save()
    {
        $nd = $this->get_input();
        $detail = $this->category_model->detail($nd['id']);
        
        if($detail){
            if($this->category_model->edit($nd)){
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
            if($this->category_model->create($nd)){
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
        redirect('admin/category/');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $detail = $this->category_model->detail($id);

        if(!empty($id) && $detail){
            if($this->category_model->delete($id)){
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
        redirect('admin/category/');
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["bgcolor"] = !empty($this->input->post('bgcolor'))? $this->input->post('bgcolor') : '#ffffff';     
        $nd["fgcolor"] = !empty($this->input->post('fgcolor'))? $this->input->post('fgcolor') : '#000000';     

        return $nd;
    }
}