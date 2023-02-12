<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

	public function index()
	{    
         if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "menu";
            $d['content_view'] = 'system/menu';
            $d['modal_view'] = 'system/modal/modal_menu';
            $d['list_category'] = $this->menu_model->list_category();
            $d['data'] = $this->menu_model->list();

            $this->load->view('system/dashboard', $d);
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function list()
    {
        $list = $this->menu_model->list();

        echo json_encode($list);
    } 

    public function save()
    {
        $nd = $this->get_input();
        $filename = null;
        if($_FILES['file']['error'] == 0){        
            $origin_file = $_FILES['file'];
            $arr_filename = explode('.', $origin_file['name']);
            $filename = date('YmdHis').'.'.$arr_filename[count($arr_filename) - 1];

            $config['upload_path'] = './assets/images/menu';
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
                redirect('admin/menu/');   
                return;
            }
        }
        $detail = $this->menu_model->detail($nd['id']);
        
        if(!empty($filename)){
            $nd['photo'] = $filename;
        }    

        if($detail){
            if($this->menu_model->edit($nd)){
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
            if($this->menu_model->create($nd)){
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
        redirect('admin/menu/');
    }

    public function create()
    {
        $nd = $this->get_input();
     
        $origin_file = $_FILES['file'];
        $filename = $origin_file['name']; 
        $config['upload_path'] = './assets/images/menu';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $filename;
        $config['overwrite'] = true;
        $config['max_size'] = 2000;
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo')) {
            $data = [
                'success' => 0,
                'message' => $this->upload->display_errors(),
            ];
        } else { 
            $nd['photo'] = $filename;
            if($this->menu_model->create($nd)){
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

        echo json_encode($data);
    }

    public function update()
    {
        $nd = $this->get_input();
     
        $origin_file = $_FILES['file'];
        $filename = $origin_file['name']; 
        $config['upload_path'] = './assets/images/menu';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $filename;
        $config['overwrite'] = true;
        $config['max_size'] = 2000;
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo')) {
            $data = [
                'success' => 0,
                'message' => $this->upload->display_errors(),
            ];
        } else { 
            $detail = $this->menu_model->detail($nd['id']);
            $nd['photo'] = $filename;
            if($detail){
                if($this->menu_model->edit($nd)){
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
                $data = [
                    'success' => 0,
                    'message' => 'Invalid ID',
                ];
            }
        }

        echo json_encode($data);
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $detail = $this->menu_model->detail($id);

        if(!empty($id) && $detail){
            if($this->menu_model->delete($id)){
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
        redirect('admin/menu/');
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["category"] = $this->input->post('category');     
        $nd["price"] = $this->input->post('price');     
        $nd["description"] = $this->input->post('description');     

        return $nd;
    }

    public function action($field, $id)
    {
        $detail = $this->menu_model->detail($id);

        if($detail){
            $nd['id'] = $id;
            $nd[$field] = $detail[$field] == 0? 1 : 0;

            if($this->menu_model->edit($nd)){
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
            $data = [
                'success' => 0,
                'message' => 'Invalid ID',
            ];
        }

        echo json_encode($data);
        redirect('admin/menu/');
    }
}