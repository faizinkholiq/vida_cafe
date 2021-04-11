<?php defined('BASEPATH') OR exit('No direct script access allowed');


 class Vessel_model extends CI_Model {
 
    public function check_user($data)
    {   
        $check = $this->db->get_where('user', "username = '{$data['username']}' AND password= '{$data['password']}'");

        if($check->num_rows() > 0){
            return $check->row_array()['id'];
        }else{
            return false;
        }
    }

}