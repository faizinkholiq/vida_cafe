<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
        $d['highlight_menu'] = "home";
        $d['content_view'] = 'system/index';
        $d['detail'] = $this->home_model->detail(1);
		$this->load->view('system/dashboard', $d);
    }
    
    public function save()
    {
        $nd = $this->get_input();
        $filename = null;
        if(!empty($_FILES)){     
            foreach($_FILES as $key => $value){
                $origin_file = $_FILES[$key];
                $filename = $key; 
                $config['upload_path'] = './assets/images/profile';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|svg';
                $config['file_name'] = $filename;
                $config['overwrite'] = true;
                $config['max_size'] = 2000;      
                
                if(!empty($_FILES[$key]['name'])){
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload($key)) {      
                        print_r($key);
                        print_r($this->upload->display_errors());
                        
                        $data = [
                            'success' => 0,
                            'message' => $this->upload->display_errors(),
                        ];
                    }else{
                        if(!empty($filename)){
                            $arr_filename = explode('.', $origin_file['name']);
                            $nd[$key] = $filename.'.'.$arr_filename[count($arr_filename) - 1];
                        }
                    }

                }
            }   
        }
        
        $detail = $this->home_model->detail($nd['id']);

        if($detail){
            if($this->home_model->edit($nd)){
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
            if($this->home_model->create($nd)){
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
            redirect('admin/home/');
        }else{
            echo json_encode($data);
        }
    }

    public function get_input()
    {
        $nd["id"] = $this->input->post('id');
        $nd["name"] = $this->input->post('name');
        $nd["motto"] = $this->input->post('motto');
        $nd["description"] = $this->input->post('description');
        $nd["story"] = $this->input->post('story');
        $nd["address"] = $this->input->post('address');
        $nd["city"] = $this->input->post('city');
        $nd["state"] = $this->input->post('state');
        $nd["zip"] = $this->input->post('zip');       

        return $nd;
    }
}