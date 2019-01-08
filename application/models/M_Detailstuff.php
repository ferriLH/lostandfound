<?php

/**
 * 
 */
class M_Detailstuff extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get_detail($id)
	{
		$this->db->select('*');
		$this->db->from('t_label');
		$this->db->join('t_barang','t_barang.id_label=t_label.id_label');
        $this->db->join('t_kota','t_barang.id_kota=t_kota.id_kota');
        $this->db->join('t_user','t_barang.id_user=t_user.id_user');
        $this->db->join('t_univ','t_barang.id_univ=t_univ.id_univ');
        $this->db->where('id_barang=',$id);
        return $this->db->get()->result();
	}
}

?>