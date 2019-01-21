<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 01/09/2019
 * Time: 3:47 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Profile extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Profile');
    }
    public function index()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $data = array(
                "title" => "Profile | Lost and Found"
            );
            $this->load->view('back/V_Profile',$data);

        }else{
            redirect('dashboard');
        }
    }
    public function delete($id)
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->M_Profile->delete($id);
            $this->session->sess_destroy();
            $this->session->set_flashdata('success', '<br>Your account has been deleted!');
            redirect('login');
        }else{
            redirect('dashboard');
        }
    }
    public function update_nik($id)
    {
        $nik  = $this->input->post('nik');
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->M_Profile->update_nik($id,$nik);
            $this->session->set_flashdata('success', '<br>Your NIK has been changed!');
            $get = $this->M_Profile->get_account($id);
            foreach ($get->result() as $dat){
                $sess_data['isLogin']       = TRUE;
                $sess_data['id_user']       = $dat->id_user;
                $sess_data['nik']           = $dat->nik;
                $sess_data['nama']          = $dat->nama;
                $sess_data['email']         = $dat->email;
                $sess_data['password']      = $dat->password;
                $sess_data['alamat']        = $dat->alamat;
                $sess_data['status']        = $dat->status;
                $sess_data['file_foto']     = $dat->file_foto;
                $this->session->set_userdata($sess_data);
            }
            redirect('profile');
        }else{
            redirect('dashboard');
        }
    }
    public function update_nama($id)
    {
        $name  = $this->input->post('name');
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->M_Profile->update_nama($id,$name);
            $this->session->set_flashdata('success', '<br>Your name has been changed!');
            $get = $this->M_Profile->get_account($id);
            foreach ($get->result() as $dat){
                $sess_data['isLogin']       = TRUE;
                $sess_data['id_user']       = $dat->id_user;
                $sess_data['nik']           = $dat->nik;
                $sess_data['nama']          = $dat->nama;
                $sess_data['email']         = $dat->email;
                $sess_data['password']      = $dat->password;
                $sess_data['alamat']        = $dat->alamat;
                $sess_data['status']        = $dat->status;
                $sess_data['file_foto']     = $dat->file_foto;
                $this->session->set_userdata($sess_data);
            }
            redirect('profile');
        }else{
            redirect('dashboard');
        }
    }
    public function update_email($id)
    {
        $email  = $this->input->post('email');
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->M_Profile->update_email($id,$email);
            $this->session->set_flashdata('success', '<br>Your email has been changed!');
            $get = $this->M_Profile->get_account($id);
            foreach ($get->result() as $dat){
                $sess_data['isLogin']       = TRUE;
                $sess_data['id_user']       = $dat->id_user;
                $sess_data['nik']           = $dat->nik;
                $sess_data['nama']          = $dat->nama;
                $sess_data['email']         = $dat->email;
                $sess_data['password']      = $dat->password;
                $sess_data['alamat']        = $dat->alamat;
                $sess_data['status']        = $dat->status;
                $sess_data['file_foto']     = $dat->file_foto;
                $this->session->set_userdata($sess_data);
            }
            redirect('profile');
        }else{
            redirect('dashboard');
        }
    }
    public function update_address($id)
    {
        $alamat  = $this->input->post('address');
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->M_Profile->update_address($id,$alamat);
            $this->session->set_flashdata('success', '<br>Your address has been changed!');
            $get = $this->M_Profile->get_account($id);
            foreach ($get->result() as $dat){
                $sess_data['isLogin']       = TRUE;
                $sess_data['id_user']       = $dat->id_user;
                $sess_data['nik']           = $dat->nik;
                $sess_data['nama']          = $dat->nama;
                $sess_data['email']         = $dat->email;
                $sess_data['password']      = $dat->password;
                $sess_data['alamat']        = $dat->alamat;
                $sess_data['status']        = $dat->status;
                $sess_data['file_foto']     = $dat->file_foto;
                $this->session->set_userdata($sess_data);
            }
            redirect('profile');
        }else{
            redirect('dashboard');
        }
    }
    public function update_password($id)
    {
        $current    = $this->input->post('current');
        $new        = $this->input->post('new');
        $confirm    = $this->input->post('confirm');
        if ($this->session->userdata('isLogin') == TRUE) {
            if ($new != $confirm){
                $this->session->set_flashdata('failed', '<br>Your new password and confirm password does not match!');
                redirect('profile');
            }else{
                $cek = $this->M_Profile->cek(sha1($current));
                if ($cek->num_rows() != 0) {
                    $this->M_Profile->update_password($id,sha1($confirm));
                    $this->session->set_flashdata('success', '<br>Your password has been changed!');
                    $get = $this->M_Profile->get_account($id);
                    foreach ($get->result() as $dat){
                        $sess_data['isLogin']       = TRUE;
                        $sess_data['id_user']       = $dat->id_user;
                        $sess_data['nik']           = $dat->nik;
                        $sess_data['nama']          = $dat->nama;
                        $sess_data['email']         = $dat->email;
                        $sess_data['password']      = $dat->password;
                        $sess_data['alamat']        = $dat->alamat;
                        $sess_data['status']        = $dat->status;
                        $sess_data['file_foto']     = $dat->file_foto;
                        $this->session->set_userdata($sess_data);
                    }
                    redirect('profile');
                }else{
                    $this->session->set_flashdata('failed', '<br>Your current password is wrong!');
                    redirect('profile');
                }
            }
        }else{
            redirect('dashboard');
        }
    }
    public function update_photo($id){
        if ($this->session->userdata('isLogin') == TRUE) {
            if (!empty($_FILES['foto']['name'])) {
                $_FILES['file']['name']     = $_FILES['foto']['name'];
                $_FILES['file']['type']     = $_FILES['foto']['type'];
                $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
                $_FILES['file']['error']    = $_FILES['foto']['error'];
                $_FILES['file']['size']     = $_FILES['foto']['size'];
                $uploadPath = 'foto_user/';
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
                        $this->M_Profile->update_photo($id,$uploadData['nama_foto']);
                        $this->session->set_flashdata('success', '<br>Your photo has been changed!');
                        $get = $this->M_Profile->get_account($id);
                        foreach ($get->result() as $dat){
                            $sess_data['isLogin']       = TRUE;
                            $sess_data['id_user']       = $dat->id_user;
                            $sess_data['nik']           = $dat->nik;
                            $sess_data['nama']          = $dat->nama;
                            $sess_data['email']         = $dat->email;
                            $sess_data['password']      = $dat->password;
                            $sess_data['alamat']        = $dat->alamat;
                            $sess_data['status']        = $dat->status;
                            $sess_data['file_foto']     = $dat->file_foto;
                            $this->session->set_userdata($sess_data);
                        }
                        redirect('profile');
                    }else{
                        $this->session->set_flashdata('failed', '<br>Failed');
                        redirect('profile');
                    }
                }else{
                    $this->session->set_flashdata('failed', '<br>Failed Upload Photo.');
                    redirect('profile');
                }
            }else{
                $this->session->set_flashdata('failed', '<br>Select Photo.');
                redirect('profile');
            }
        }else{
            redirect('dashboard');
        }
    }
}
