<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Menu_model extends CI_Model {
    
    public function list()
    {
        return $this->db->get('menu')->result_array();
    }

    public function detail($id)
    {
        return $this->db->get_where('menu', ['id'=>$id])->row_array();
    }

    public function create($data)
    {
        $this->db->insert('menu', $data);

        return ($this->db->affected_rows()>0) ? true : false;
    }

    public function edit($data)
    {   
        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update('menu', $data);
        $this->db->trans_complete();

        return ($this->db->trans_status() == FALSE) ? false : true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu');
        
        return ($this->db->affected_rows() > 0) ? true : false ;
    }

}