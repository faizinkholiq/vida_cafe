<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function check_permission()
{
    if($this->session->userdata('login')){
        return true;
    }else{
        return false;
    }
}