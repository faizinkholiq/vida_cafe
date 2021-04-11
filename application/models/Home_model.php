<?php defined('BASEPATH') OR exit('No direct script access allowed');


 class Home_model extends CI_Model {
 
    public function detail($id)
    {
        return $this->db->get_where('profile', ['id'=>$id])->row_array();
    }

    public function create($data)
    {
        $this->db->insert('profile', $data);

        return ($this->db->affected_rows()>0) ? true : false;
    }

    public function edit($data)
    {   
        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update('profile', $data);
        $this->db->trans_complete();

        return ($this->db->trans_status() == FALSE) ? false : true;
    }

}