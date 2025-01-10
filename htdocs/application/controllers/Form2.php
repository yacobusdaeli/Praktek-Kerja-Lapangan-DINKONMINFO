<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form2 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_hak_akses_web');
        
    }
    

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form2');
        $this->load->view('layanan/footer');
    }

    public function upload() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('opd_desa', 'Opd_desa', 'required');
            $this->form_validation->set_rules('url', 'Url', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            
            
            // $config['upload_path'] = FCPATH . 'assets/hak_akses_web/';
            // $config['allowed_types'] = 'pdf';
            // $config['max_size']  = '20000';
            
            $this->load->library('upload');
            $nama = $this->input->post('nama');
            //pdf 1
            $new_name = "surat_permohonan_$nama";
            $config = array (
                'upload_path' => FCPATH . 'assets/hak_akses_web/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("surat_permohonan");
            $surat_permohonan_data = $this->upload->data();
            $surat_permohonan = $surat_permohonan_data["file_name"];
            
            // //file 1
            // if (!empty($_FILES['surat_permohonan'])){
            //     $this->upload->do_upload('surat_permohonan');
            //     $data1 = $this->upload->data();
            //     $surat_permohonan = $data1["file_name"];
            // }

            //pdf 2
            $new_name = "sk_$nama";
            $config = array (
                'upload_path' => FCPATH . 'assets/hak_akses_web/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("sk");
            $sk_data = $this->upload->data();
            $sk = $sk_data["file_name"];


            // //file 2
            // if (!empty($_FILES['sk'])){
            //     $this->upload->do_upload('sk');
            //     $data2 = $this->upload->data();
            //     $sk = $data2["file_name"];
            // }

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = 'Proses';
            $data_arr = array (
                'waktu' => $waktu,
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'opd_desa' => $this->input->post('opd_desa'),
                'url' => $this->input->post('url'),
                'alasan' => implode(',', $this->input->post('alasan')),
                'keterangan' => $this->input->post('keterangan'),
                'surat_permohonan' => $surat_permohonan,
                'sk' => $sk,
                'status' => $status
            );

            $result = $this->M_hak_akses_web->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status','refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form2','refresh');
            }

            // if ($this->form_validation->run()) {
            //     $nama = $this->input->post('nama', TRUE);
            //     $jabatan = $this->input->post('jabatan', TRUE);
            //     $no_telp = $this->input->post('no_telp', TRUE);
            //     $email = $this->input->post('email', TRUE);
            //     $opd_desa = $this->input->post('opd_desa', TRUE);
            //     $url = $this->input->post('url', TRUE);
            //     $alasan = $this->input->post('alasan', TRUE);
            //     $keterangan = $this->input->post('keterangan', TRUE);

            //     $data = [
            //         'nama' => $nama,
            //         'jabatan' => $jabatan,
            //         'no_telp' => $no_telp,
            //         'email' => $email,
            //         'opd_desa' => $opd_desa,
            //         'url' => $url,
            //         'alasan' => $alasan,
            //         'keterangan' => $keterangan,
            //         'surat_permohonan' => $surat_permohonan,
            //         'sk' => $sk
            //     ];

            //     $insert = $this->db->insert('hak_akses_website', $data);

            //     if ($insert) {
            //         echo 'Berhasil';
            //     }

            // } else {
            //     $this->index();
            // }
            
            
        }

        // else {
        //     $this->index();
        // }
    }

}

/* End of file Form2.php */


?>