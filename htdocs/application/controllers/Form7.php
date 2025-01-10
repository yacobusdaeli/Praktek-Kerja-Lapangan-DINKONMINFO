<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form7 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aduan_jaringan_internet');
        
    }
    

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form7');
        $this->load->view('layanan/footer');
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('opd', 'Opd', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
            $this->form_validation->set_rules('riwayat', 'Riwayat', 'required');

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = "Proses";
            $data_arr = array (
                'waktu' => $waktu,
                'nama' => $this->input->post('nama'),
                'opd' => $this->input->post('opd'),
                'jabatan' => $this->input->post('jabatan'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'alasan' => implode(',', $this->input->post('alasan')),
                'keterangan' => $this->input->post('keterangan'),
                'riwayat' => $this->input->post('riwayat'),
                'status' => $status
            );

            $result = $this->m_aduan_jaringan_internet->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status','refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form7','refresh');
            }
        }
    }

}

/* End of file Form7.php */


?>