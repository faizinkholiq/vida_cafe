<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gallery_model');
    }

	public function index()
	{
        if($this->session->userdata('sess_data')){
            $d['user'] = $this->session->userdata('sess_data');
            $d['highlight_menu'] = "gallery";
            $d['content_view'] = 'system/gallery';
            $d['modal_view'] = 'system/modal/modal_gallery';
            $d['data'] = $this->gallery_model->list();

            $this->load->view('system/dashboard', $d);
        }else{
            $this->session->set_flashdata('msg', 'Session expired');
            redirect('user/login');
        }
    }

    public function create()
    {
        $nd = [];
        
        if($_FILES['file']['error'] == 0){        
            $origin_file = $_FILES['file'];
            $arr_filename = explode('.', $origin_file['name']);
            $filename = date('YmdHis').'.'.$arr_filename[count($arr_filename) - 1];
            
            $config['upload_path'] = './assets/images/gallery';
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
            } else { 
                $nd['source'] = $filename;
                if($this->gallery_model->create($nd)){
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
        }else{
            $data = [
                'success' => 0,
                'message' => 'No file Uploaded ',
            ];
        }

        $this->session->set_flashdata('msg', $data);
        redirect('admin/gallery/');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $detail = $this->gallery_model->detail($id);

        if(!empty($id) && $detail){
            if($this->gallery_model->delete($id)){
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
        redirect('admin/gallery/');
    }
}