<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/09/2019
 * Time: 7:00 PM
 */
class M_Stuff extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function add($data)
    {
        $this->db->insert('t_barang',$data);
    }
    function get_data_brg($id){
        $this->db->select("*");
        $this->db->from("t_barang b");
        $this->db->join('t_label l', 'l.id_label = b.id_label','inner');
        $this->db->join('t_kota k', 'k.id_kota = b.id_kota','inner');
        $this->db->join('t_univ u', 'u.id_univ = b.id_univ','inner');
        $this->db->where("b.id_user",$id);
        $this->db->where("b.status_barang",TRUE);
        $get = $this->db->get();
        return $get->result();
    }
    function set_delete_brg($id){
        $data = array(
            'status_barang'=>0
        );
        $this->db->where('id_barang',$id);
        $this->db->update('t_barang',$data);
    }
    function get_data_kota(){
        $this->db->select("*");
        $this->db->from("t_kota");
        $get = $this->db->get();
        return $get->result();
    }
    function get_data_label(){
        $this->db->select("*");
        $this->db->from("t_label");
        $get = $this->db->get();
        return $get->result();
    }
    function get_data_univ($id){
        $univ="<option value='0'> - Choose - </option>";
        $this->db->order_by('nama_univ','ASC');
        $n= $this->db->get_where('t_univ',array('id_kota'=>$id));
        foreach ($n->result_array() as $data ){
            $univ.= "<option value='$data[id_univ]' label='$data[nama_univ]'></option>";
        }
        return $univ;
    }
    function cek_label($label){
        $tbl = "t_label";
        $this->db->select("id_label");
        $this->db->from($tbl);
        $this->db->where("nama_label",$label);
        return $this->db->get();
    }
    function add_barang($kota,$univ,$label,$user,$nama,$foto,$desk,$tgl){
        $data = array(
            'id_barang'     =>'',
            'id_kota'       =>$kota,
            'id_univ'       =>$univ,
            'id_label'      =>$label,
            'id_user'       =>$user,
            'nama_barang'   =>$nama,
            'foto_barang'   =>$foto,
            'deskripsi'     =>$desk,
            'status_barang' =>TRUE,
            'tanggal_upload'=>$tgl,
        );
        $this->db->insert('t_barang',$data);
    }
    function add_label($label){
        $data = array(
            'id_label'     =>'',
            'nama_label'       =>$label
            );
        $this->db->insert('t_label',$data);
    }
    function get_data_brg_1($id){
        $this->db->select("*");
        $this->db->from("t_barang b");
        $this->db->join('t_label l', 'l.id_label = b.id_label','inner');
        $this->db->join('t_kota k', 'k.id_kota = b.id_kota','inner');
        $this->db->join('t_univ u', 'u.id_univ = b.id_univ','inner');
        $this->db->where("b.id_barang",$id);
        $this->db->where("b.status_barang",TRUE);
        $get = $this->db->get();
        return $get;
    }
    public function update_barang_foto($id,$kota,$univ,$label,$user,$nama,$foto,$desk,$tgl)
    {
        $data = array(
            'id_kota'       =>$kota,
            'id_univ'       =>$univ,
            'id_label'      =>$label,
            'id_user'       =>$user,
            'nama_barang'   =>$nama,
            'foto_barang'   =>$foto,
            'deskripsi'     =>$desk,
            'status_barang' =>TRUE,
            'tanggal_upload'=>$tgl,
        );
        $this->db->where('id_barang', $id);
        return $this->db->update('t_barang', $data);;
    }
    public function update_barang_no_foto($id,$kota,$univ,$label,$user,$nama,$desk,$tgl)
    {
        $data = array(
            'id_kota'       =>$kota,
            'id_univ'       =>$univ,
            'id_label'      =>$label,
            'id_user'       =>$user,
            'nama_barang'   =>$nama,
            'deskripsi'     =>$desk,
            'status_barang' =>TRUE,
            'tanggal_upload'=>$tgl,
        );
        $this->db->where('id_barang', $id);
        return $this->db->update('t_barang', $data);;
    }
}