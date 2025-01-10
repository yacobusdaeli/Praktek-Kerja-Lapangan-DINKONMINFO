<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
        $this->load->model('m_message');
        
	}

    public function index()
    {
            $this->load->view("layanan/header");
            $this->load->view("layanan/layanan");
            $this->load->view("layanan/footer");
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
            $this->session->set_flashdata('dc', 'Login gagal pastikan email dan password benar');
			redirect(base_url("layanan"));
		}
	}

    function logout(){
	    $this->session->sess_destroy();
	    redirect(base_url("layanan"));
    }

    public function save_message(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $data = array (
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'subject' => $subject,
            'message' => $message,
        );

        $this->m_message->save_msg($data);
        
        redirect('layanan');
        
    }

    public function download(){
        $this->load->view('layanan/header');
        $this->load->view('layanan/download');
        $this->load->view('layanan/footer');
    }

    public function about(){
        $this->load->view('layanan/header');
        $this->load->view('layanan/about');
        $this->load->view('layanan/footer');
    }

}

/* End of file Layanan.php */


?>