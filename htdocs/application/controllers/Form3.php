<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form3 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_hak_akses_matur_bupati');
        
    }
    

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form3');
        $this->load->view('layanan/footer');
    }

    public function upload(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
            $this->form_validation->set_rules('opd', 'Opd', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');


            $this->load->library('upload');
            $nama = $this->input->post('nama');
            //pdf 1
            $new_name = "surat_permohonan_$nama";
            $config = array (
                'upload_path' => FCPATH . 'assets/hak_akses_matur_bupati/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("surat_permohonan");
            $surat_permohonan_data = $this->upload->data();
            $surat_permohonan = $surat_permohonan_data["file_name"];

            //pdf 2
            $new_name = "sk_$nama";
            $config = array (
                'upload_path' => FCPATH . 'assets/hak_akses_matur_bupati/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("sk");
            $sk_data = $this->upload->data();
            $sk = $sk_data["file_name"];

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = "Proses";
            $data_arr = array (
                'waktu' => $waktu,
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'opd' => $this->input->post('opd'),
                'alasan' => implode(',', $this->input->post('alasan')),
                'keterangan' => $this->input->post('keterangan'),
                'surat_permohonan' => $surat_permohonan,
                'sk' => $sk,
                'status' => $status
            );

            $result = $this->m_hak_akses_matur_bupati->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status','refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form3','refresh');
            }
        }
    }

}

/* End of file Form3.php */


?>