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
        $d['highlight_menu'] = "menu";
        $d['content_view'] = 'system/menu';
        $d['modal_view'] = 'system/modal/modal_menu';
        $d['data'] = $this->menu_model->list();

 		$this->load->view('system/dashboard', $d);
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
        if(!empty($_FILES)){
            $origin_file = $_FILES['file'];
            $filename = $origin_file['name']; 
            $config['upload_path'] = './assets/images/menu';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $filename;
            $config['overwrite'] = true;
            $config['max_size'] = 2000;
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = [
                    'success' => 0,
                    'message' => $this->upload->display_errors(),
                ];

                echo json_encode($data);
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

        if($data['success'] === 1){
            redirect('admin/menu/');
        }else{
            echo json_encode($data);
        }
    }

    public function create()
    {
        $nd = $this->get_input();
     
        $origin_file = $_FILES['file'];
        $filename = $origin_file['name']; 
        $config['upload_path'] = './assets/images/profile';
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
        $config['upload_path'] = './assets/images/profile';
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

        if($data['success'] === 1){
            redirect('admin/menu/');
        }else{
            echo json_encode($data);
        }
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');     
        $nd["price"] = $this->input->post('price');     

        return $nd;
    }
}