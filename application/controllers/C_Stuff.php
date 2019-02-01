<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/09/2019
 * Time: 6:57 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Stuff extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Stuff');
        $this->load->model('M_Dashboard');
    }
    public function add_stuffs($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Add Stuffs | Lost and Found",
                "data_kota" => $this->M_Stuff->get_data_kota(),
                "data_label" => $this->M_Stuff->get_data_label(),
                "notif_new_inbox"=>$this->M_Dashboard->get_new_inbox($id),
            );
            $this->load->view('back/V_Add_stuffs',$data);
        }else{
            redirect('dashboard/'.$id);
        }
    }
    function ambil_data(){

        $modul=$this->input->get('modul');
        $id=$this->input->get('id');

        if($modul=="kota"){
            echo $this->M_Stuff->get_data_univ($id);
        }
    }
    public function add($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $kota   = $this->input->post("kota");
            $univ   = $this->input->post("univ");
            $label  = $this->input->post("label");
            $user   = $id;
            $nama   = $this->input->post("nama");
            $desk   = $this->input->post("textarea-input");
            $tgl    = $this->input->post("date-input");
            $cek    = $this->M_Stuff->cek_label($label);
            if($cek->num_rows() != 0){
                $id_l = $cek->row()->id_label;
                if (!empty($_FILES['foto']['name'])) {
                    $_FILES['file']['name']     = $_FILES['foto']['name'];
                    $_FILES['file']['type']     = $_FILES['foto']['type'];
                    $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
                    $_FILES['file']['error']    = $_FILES['foto']['error'];
                    $_FILES['file']['size']     = $_FILES['foto']['size'];
                    $uploadPath = 'foto_barang/';
                    // File upload configuration
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData['nama_foto'] = $fileData['file_name'];
                        if(!empty($uploadData)){
                            $this->M_Stuff->add_barang($kota,$univ,$id_l,$user,$nama,$uploadData['nama_foto'],$desk,$tgl);
                            $this->session->set_flashdata('result', '<br>Berhasil.');
                            redirect('stuffs/add/'.$id);
                        }else{
                            $this->session->set_flashdata('result', '<br>Gagal.');
                            redirect('stuffs/add/'.$id);
                        }
                    }else{
                        $this->session->set_flashdata('result', '<br>gagal upload foto.');
                        redirect('stuffs/add/'.$id);
                    }
                }else{
                    $this->session->set_flashdata('result', '<br>pilih foto.');
                    redirect('stuffs/add/'.$id);
                }
            }else{
                $this->M_Stuff->add_label($label);
                $cek    = $this->M_Stuff->cek_label($label);
                $id_l   = $cek->row()->id_label;
                if (!empty($_FILES['foto']['name'])) {
                    $_FILES['file']['name']     = $_FILES['foto']['name'];
                    $_FILES['file']['type']     = $_FILES['foto']['type'];
                    $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
                    $_FILES['file']['error']    = $_FILES['foto']['error'];
                    $_FILES['file']['size']     = $_FILES['foto']['size'];
                    $uploadPath = 'foto_barang/';
                    // File upload configuration
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData['nama_foto'] = $fileData['file_name'];
                        if(!empty($uploadData)){
                            $this->M_Stuff->add_barang($kota,$univ,$id_l,$user,$nama,$uploadData['nama_foto'],$desk,$tgl);
                            $this->session->set_flashdata('result', '<br>Berhasil.');
                            redirect('stuffs/add/'.$id);
                        }else{
                            $this->session->set_flashdata('result', '<br>Gagal.');
                            redirect('stuffs/add/'.$id);
                        }
                    }else{
                        $this->session->set_flashdata('result', '<br>gagal upload foto.');
                        redirect('stuffs/add/'.$id);
                    }
                }else{
                    $this->session->set_flashdata('result', '<br>pilih foto.');
                    redirect('stuffs/add/'.$id);
                }
            }
        }else{
            redirect('dashboard/'.$id);
        }
    }
    public function edit_stuffs($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Edit Stuffs | Lost and Found",
                "barang" => $this->M_Stuff->get_data_brg($id),
                "notif_new_inbox"=>$this->M_Dashboard->get_new_inbox($id)
            );
            $this->load->view('back/V_Edit_stuffs',$data);
        }else{
            redirect('dashboard/'.$id);
        }
    }
    function delete_stuffs($id,$id_u){
        $this->M_Stuff->set_delete_brg($id);
        $data = array(
            "title" => "Edit Stuffs | Lost and Found",
        );
        $this->session->set_flashdata("result","<br>successfully delete stuff.");
        redirect('C_Stuff/edit_stuffs/'.$id_u,$data);
    }
    public function update_stuffs($id,$id_u)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Edit Stuffs | Lost and Found",
                "barang" => $this->M_Stuff->get_data_brg_1($id),
                "data_kota" => $this->M_Stuff->get_data_kota(),
                "data_label" => $this->M_Stuff->get_data_label(),
                "notif_new_inbox"=>$this->M_Dashboard->get_new_inbox($id_u)
            );
            $this->load->view('back/V_Update_stuffs',$data);
        }else{
            redirect('dashboard/'.$id);
        }
    }
    public function update_stuffs_auth($id,$user)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $kota   = $this->input->post("kota");
            $univ   = $this->input->post("univ");
            $label  = $this->input->post("label");
            $nama   = $this->input->post("nama");
            $desk   = $this->input->post("textarea-input");
            $tgl    = $this->input->post("date-input");
            $cek    = $this->M_Stuff->cek_label($label);
            if($cek->num_rows() != 0){
                $id_l = $cek->row()->id_label;
                if (!empty($_FILES['foto']['name'])) {
                    $_FILES['file']['name']     = $_FILES['foto']['name'];
                    $_FILES['file']['type']     = $_FILES['foto']['type'];
                    $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
                    $_FILES['file']['error']    = $_FILES['foto']['error'];
                    $_FILES['file']['size']     = $_FILES['foto']['size'];
                    $uploadPath = 'foto_barang/';
                    // File upload configuration
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData['nama_foto'] = $fileData['file_name'];
                        if(!empty($uploadData)){
                            $this->M_Stuff->update_barang_foto($id,$kota,$univ,$id_l,$user,$nama,$uploadData['nama_foto'],$desk,$tgl);
                            $this->session->set_flashdata('result', '<br>Berhasil.');
                            redirect('C_Stuff/update_stuffs/'.$id);
                        }else{
                            $this->session->set_flashdata('result', '<br>Gagal.');
                            redirect('C_Stuff/update_stuffs/'.$id);
                        }
                    }else{
                        $this->session->set_flashdata('result', '<br>gagal upload foto.');
                        redirect('C_Stuff/update_stuffs/'.$id);
                    }
                }else{
                    $this->M_Stuff->update_barang_no_foto($id,$kota,$univ,$id_l,$user,$nama,$desk,$tgl);
                    $this->session->set_flashdata('result', '<br>Berhasil.');
                    redirect('C_Stuff/update_stuffs/'.$id);
                }
            }else{
                $this->M_Stuff->add_label($label);
                $cek    = $this->M_Stuff->cek_label($label);
                $id_l   = $cek->row()->id_label;
                if (!empty($_FILES['foto']['name'])) {
                    $_FILES['file']['name']     = $_FILES['foto']['name'];
                    $_FILES['file']['type']     = $_FILES['foto']['type'];
                    $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
                    $_FILES['file']['error']    = $_FILES['foto']['error'];
                    $_FILES['file']['size']     = $_FILES['foto']['size'];
                    $uploadPath = 'foto_barang/';
                    // File upload configuration
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData['nama_foto'] = $fileData['file_name'];
                        if(!empty($uploadData)){
                            $this->M_Stuff->update_barang_foto($id,$kota,$univ,$id_l,$user,$nama,$uploadData['nama_foto'],$desk,$tgl);
                            $this->session->set_flashdata('result', '<br>Berhasil.');
                            redirect('C_Stuff/update_stuffs/'.$id);
                        }else{
                            $this->session->set_flashdata('result', '<br>Gagal.');
                            redirect('C_Stuff/update_stuffs/'.$id);
                        }
                    }else{
                        $this->session->set_flashdata('result', '<br>gagal upload foto.');
                        redirect('C_Stuff/update_stuffs/'.$id);
                    }
                }else{
                    $this->M_Stuff->update_barang_no_foto($id,$kota,$univ,$id_l,$user,$nama,$desk,$tgl);
                    $this->session->set_flashdata('result', '<br>Berhasil.');
                    redirect('C_Stuff/update_stuffs/'.$id);
                }
            }
        }else{
            redirect('dashboard/'.$id);
        }
    }
}