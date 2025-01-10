<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Form8 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan_magang');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form8');
        $this->load->view('layanan/footer');
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]|max_length[40]|regex_match[/^[a-zA-Z\s]+$/]');
            $this->form_validation->set_rules('no_induk', 'No Induk', 'required|min_length[3]|max_length[20]');
            $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|min_length[10]|max_length[13]|regex_match[/^[0-9\s]+$/]');
            $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
            $this->form_validation->set_rules('institusi', 'Institusi', 'required');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

            $this->load->library('upload');

            $nama = $this->input->post('nama');

            //pdf 1
            $new_name = "surat_permohonan_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/pengajuan_magang/',
                'allowed_types' => "pdf",
                'max_size' => '20000', // 20mb
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('surat_permohonan')) {
                // Jika upload gagal
                $error = $this->upload->display_errors();
                log_message('error', 'Upload Error: ' . $error);
                $this->session->set_flashdata('msg', 'Upload file gagal: ' . $error);
                redirect('form8', 'refresh');
            } else {
                // Jika upload berhasil
                $surat_permohonan_data = $this->upload->data();
                $surat_permohonan = $surat_permohonan_data["file_name"];
            }

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = 'Proses';

            $data_arr = array(
                'waktu' => $waktu,
                'nama' => $this->input->post('nama'),
                'no_induk' => $this->input->post('no_induk'),
                'no_telp' => $this->input->post('no_telp'),
                'pendidikan' => $this->input->post('pendidikan'),
                'institusi' => $this->input->post('institusi'),
                'jurusan' => $this->input->post('jurusan'),
                'surat_permohonan' => $surat_permohonan,
                'status' => $status,
            );

            $result = $this->m_pengajuan_magang->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status', 'refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form5', 'refresh');
            }
        }
    }
}
