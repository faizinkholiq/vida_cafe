<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Menu_model extends CI_Model {
    
    public function list($p = [])
    {
        $q = $this->db
        ->select([
            'menu.*',
            'category.name category_name',
            'category.fgcolor',
            'category.bgcolor',
        ])
        ->from('menu')
        ->join('category', 'menu.category = category.id', 'left')
        ->order_by('id', 'desc')
        ;
        
        if(!empty($p)){
            if(!empty($p['special'])){
                $this->db->where('special', '1');
            }

            if(!empty($p['favorite'])){
                $this->db->where('favorite', '1');
            }

            if(!empty($p['limit'])){
                $this->db->limit($p['limit']);
            }
        }

        return $q->get()->result_array();
         
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

    public function list_category()
    {
        $q = $this->db
        ->select()->from('category')
        ->order_by('id', 'asc');

        return $q->get()->result_array();
    }

}