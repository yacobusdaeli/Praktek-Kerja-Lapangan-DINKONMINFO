<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_website_desa');

    }

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form1');
        $this->load->view('layanan/footer');
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->load->library('upload');
            $nama = $this->input->post('nama');
            //pdf 1
            $new_name = "SK_Pengangkatan_Kades_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("SK_Pengangkatan_Kades");
            $SK_Pengangkatan_Kades_data = $this->upload->data();
            $SK_Pengangkatan_Kades = $SK_Pengangkatan_Kades_data["file_name"];

            //pdf 2
            $new_name = "SK_Pengangkatan_Perangkat_Desa_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("SK_Pengangkatan_Perangkat_Desa");
            $SK_Pengangkatan_Perangkat_Desa_data = $this->upload->data();
            $SK_Pengangkatan_Perangkat_Desa = $SK_Pengangkatan_Perangkat_Desa_data["file_name"];

            //pdf 3
            $new_name = "Surat_Kuasa_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("Surat_Kuasa");
            $Surat_Kuasa_data = $this->upload->data();
            $Surat_Kuasa = $Surat_Kuasa_data["file_name"];

            //pdf 4
            $new_name = "Surat_Permohonan_Domain_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("Surat_Permohonan_Domain");
            $Surat_Permohonan_Domain_data = $this->upload->data();
            $Surat_Permohonan_Domain = $Surat_Permohonan_Domain_data["file_name"];

            //pdf 5
            $new_name = "Surat_Permohonan_Hosting_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "pdf",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("Surat_Permohonan_Hosting");
            $Surat_Permohonan_Hosting_data = $this->upload->data();
            $Surat_Permohonan_Hosting = $Surat_Permohonan_Hosting_data["file_name"];

            //pdf 6
            $new_name = "KTP_$nama";
            $config = array(
                'upload_path' => FCPATH . 'assets/website_desa/',
                'allowed_types' => "jpg|png",
                'max_size' => '20000',
                'file_name' => $new_name,
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("KTP");
            $KTP_data = $this->upload->data();
            $KTP = $KTP_data["file_name"];

            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $status = 'Proses';
            $data_arr = array(
                "waktu" => $waktu,
                "nama" => $this->input->post('nama'),
                "SK_Pengangkatan_Kades" => $SK_Pengangkatan_Kades,
                "SK_Pengangkatan_Perangkat_Desa" => $SK_Pengangkatan_Perangkat_Desa,
                "Surat_Kuasa" => $Surat_Kuasa,
                "Surat_Permohonan_Domain" => $Surat_Permohonan_Domain,
                "Surat_Permohonan_Hosting" => $Surat_Permohonan_Hosting,
                "KTP" => $KTP,
                "status" => $status,
            );

            $result = $this->m_website_desa->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status', 'refresh');
            } else {
                $this->session->set_flashdata('dc', 'Gagal Mengirim Data');
                redirect('form1', 'refresh');
            }

        }
    }

    // public function save_data()
    // {
    //     $this->load->library('upload');
    //     $config['upload_path'] = '.assets/website_desa/';
    //     $config['allowed_types'] = 'pdf';
    //     $config['overwrite'] = FALSE;
    //     $config['max_size'] = 5000;
    //     $media = $this->upload->data();
    //     $inputFileName = '.assets/website_desa/'.$media['file_name'];
    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);
    //     if (!$this->upload->do_upload('SK_Pengangkatan_Kades')) {
    //         $this->session->flashdata('Gagal');
    //         redirect('layanan');
    //     } else if {
    //         $config['upload_path'] = '.assets/website_desa/';
    //         $config['allowed_types'] = 'pdf';
    //         $config['overwrite'] = FALSE;
    //         $config['max_size'] = 5000;
    //         $media1 = $this->upload->data();
    //         $inputFileName = '.assets/website_desa/'.$media1['file_name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('SK_Pengangkatan_Perangkat_Desa')) {
    //             $this->session->flashdata('Gagal');
    //             redirect('form1');
    //         }
    //     } else if {
    //         $config['upload_path'] = '.assets/website_desa/';
    //         $config['allowed_types'] = 'pdf';
    //         $config['overwrite'] = FALSE;
    //         $config['max_size'] = 5000;
    //         $media2 = $this->upload->data();
    //         $inputFileName = '.assets/website_desa/'.$media2['file_name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('Surat_Kuasa')) {
    //             $this->session->flashdata('Gagal');
    //             redirect('form1');
    //         }
    //     } else if {
    //         $config['upload_path'] = '.assets/website_desa/';
    //         $config['allowed_types'] = 'pdf';
    //         $config['overwrite'] = FALSE;
    //         $config['max_size'] = 5000;
    //         $media3 = $this->upload->data();
    //         $inputFileName = '.assets/website_desa/'.$media3['file_name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('Surat_Permohonan_Domain')) {
    //             $this->session->flashdata('Gagal');
    //             redirect('form1');
    //         }
    //     } else if {
    //         $config['upload_path'] = '.assets/website_desa/';
    //         $config['allowed_types'] = 'pdf';
    //         $config['overwrite'] = FALSE;
    //         $config['max_size'] = 5000;
    //         $media4 = $this->upload->data();
    //         $inputFileName = '.assets/website_desa/'.$media4['file_name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('Surat_Permohonan_Hosting')) {
    //             $this->session->flashdata('Gagal');
    //             redirect('form1');
    //         }
    //     } else if {
    //         $config['upload_path'] = '.assets/website_desa/';
    //         $config['allowed_types'] = 'jpg|png';
    //         $config['overwrite'] = FALSE;
    //         $config['max_size'] = 5000;
    //         $media5 = $this->upload->data();
    //         $inputFileName = '.assets/website_desa/'.$media5['file_name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if (!$this->upload->do_upload('KTP')) {
    //             $this->session->flashdata('Gagal');
    //             redirect('form1');
    //         }
    //     }
    //     else {
    //         $data = array (
    //             'SK_Pengangkatan_Kades' => $media['file_name'],
    //             'SK_Pengangkatan_Perangkat_Desa' => $media1['file_name'],
    //             'Surat_Kuasa' => $media2['file_name'],
    //             'Surat_Permohonan_Domain' => $media3['file_name'],
    //             'Surat_Permohonan_Hosting' => $media4['file_name'],
    //             'KTP' => $media5['file_name']
    //         );

    //         $res = $this->m_website_desa->do_simpan($data);
    //         if ($res>0) {
    //             echo "Berhasil";
    //         } else {
    //             echo "Gagal";
    //         }
    //     }
    // }
}

/* End of file Form1.php */
