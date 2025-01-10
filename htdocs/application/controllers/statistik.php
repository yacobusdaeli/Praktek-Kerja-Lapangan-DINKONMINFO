<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengajuan_magang');
        $this->load->model('M_statistik');
    }

    public function index()
    {

        // Statistik berdasarkan status
        $data['statistikStatus'] = json_encode($this->M_statistik->get_statistik_by_status());

        // Statistik Berdasarkan Bulanan
        $data['statistikBulanan'] = json_encode($this->M_statistik->get_statistik_bulanan());

        // Statistik berdasarkan institusi
        $data['statistikInstitusi'] = json_encode($this->M_statistik->get_statistik_institusi());

        // Statistik berdasarkan jurusan
        $data['statistikJurusan'] = json_encode($this->M_statistik->get_statistik_by_jurusan());

        $data['title'] = 'Statistik';
        $this->load->view('layanan/header');
        $this->load->view('layanan/statistik', $data);
        $this->load->view('layanan/footer');
    }

    public function statistik()
    {

        // Muat view statistik
        $this->load->view('admin/statistik', $data);
    }
}
