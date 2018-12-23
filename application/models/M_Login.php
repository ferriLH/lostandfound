<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/24/2018
 * Time: 2:31 AM
 */
class M_Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        return $this->db->get('user');
    }
}

