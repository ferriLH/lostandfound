<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/03/2019
 * Time: 11:01 PM
 */
class M_Home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_label()
    {
        $this->db->select('*');
        $this->db->from('t_label');
        $this->db->limit(5);
        $this->db->order_by('nama_label','desc');
        return $this->db->get()->result();
    }
}
