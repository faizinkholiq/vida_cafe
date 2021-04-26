<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Reservation_model extends CI_Model {
    
    public function list()
    {
        return $this->db->select()->from('reservation')->order_by('id', 'desc')->get()->result_array();
    }

    public function detail($id)
    {
        $this->db->select([
            '*',
            "CONCAT('BOOK-', DATE_FORMAT(book_date, '%Y%M%D'), 'id') `code`", 
            "DATE_FORMAT(`time`, '%W %h:%i%p, %e %M %Y') `time`", 
            "DATE_FORMAT(book_date, '%W %h:%i%p, %e %M %Y') book_date"
        ]);
        return $this->db->get_where('reservation', ['id'=>$id])->row_array();
    }

    public function create($data)
    {
        $this->db->insert('reservation', $data);

        return ($this->db->affected_rows()>0) ? true : false;
    }

    public function edit($data)
    {   
        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->update('reservation', $data);
        $this->db->trans_complete();

        return ($this->db->trans_status() == FALSE) ? false : true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('reservation');
        
        return ($this->db->affected_rows() > 0) ? true : false ;
    }

}