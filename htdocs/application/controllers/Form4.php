<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form4 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_fasilitas_inter_wifi');
        
        
    }
    

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form4');
        $this->load->view('layanan/footer');
    }

    public function upload(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('nip', 'Nip', 'required');
            $this->form_validation->set_rules('opd', 'Opd', 'required');
            $this->form_validation->set_rules('hari', 'Hari', 'required');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
            $this->form_validation->set_rules('jam', 'Jam', 'required');
            $this->form_validation->set_rules('tempat', 'Tempat', 'required');
            $this->form_validation->set_rules('peserta', 'Peserta', 'required');
            $this->form_validation->set_rules('acara', 'Acara', 'required');
            $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');


            $this->load->library('upload');
            $nama = $this->input->post('nama');
            //pdf 1
            $new_name = "surat_permohonan_$nama";
            $config = array (
                'upload_path' => FCPATH . 'assets/fasilitas_internet_wifi/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("surat_permohonan");
            $surat_permohonan_data = $this->upload->data();
            $surat_permohonan = $surat_permohonan_data["file_name"];

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = "Proses";
            $data_arr = array (
                'waktu' => $waktu,
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'nip' => $this->input->post('nip'),
                'opd' => $this->input->post('opd'),
                'hari' => $this->input->post('hari'),
                'tanggal' => $this->input->post('tanggal'),
                'jam' => $this->input->post('jam'),
                'tempat' => $this->input->post('tempat'),
                'peserta' => $this->input->post('peserta'),
                'acara' => $this->input->post('acara'),
                'penyelenggara' => $this->input->post('penyelenggara'),
                'surat_permohonan' => $surat_permohonan,
                'status' => $status
            );

            $result = $this->m_fasilitas_inter_wifi->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status','refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form4','refresh');
            }
        }
    }

}

/* End of file Form4.php */


?>