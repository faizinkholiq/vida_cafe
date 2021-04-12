<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Inbox_model extends CI_Model {
    
    public function list()
    {
        return $this->db->select()->from('inbox')->order_by('id', 'desc')->get()->result_array();
    }

    public function detail($id)
    {
        return $this->db->get_where('inbox', ['id'=>$id])->row_array();
    }

    public function create($data)
    {
        $this->db->insert('inbox', $data);

        return ($this->db->affected_rows()>0) ? true : false;
    }

    public function edit($data)
    {   
        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update('inbox', $data);
        $this->db->trans_complete();

        return ($this->db->trans_status() == FALSE) ? false : true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('inbox');
        
        return ($this->db->affected_rows() > 0) ? true : false ;
    }

}