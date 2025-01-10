<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    // Section Acc
    public function acc_webdes()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('website_desa');
    }

    public function acc_hakaksesweb()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('hak_akses_website');
    }

    public function acc_maturbup()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('hak_akses_matur_bupati');
    }

    public function acc_fasinter()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('fasilitas_inter_wifi');
    }

    public function acc_fasvid()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('fasilitas_video_conference');
    }

    public function acc_aduanweb()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('aduan_pengelolaan_website');
    }

    public function acc_aduaninter()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('aduan_infrastruktur_jaringan_inter');
    }
    public function acc_pengajuan_magang()
    {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('pengajuan_magang');
    }

    // End Section Acc

    // Section Proses
    public function proses_webdes()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('website_desa');
    }

    public function proses_hakaksesweb()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('hak_akses_website');
    }

    public function proses_maturbup()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('hak_akses_matur_bupati');
    }

    public function proses_fasinter()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('fasilitas_inter_wifi');
    }

    public function proses_fasvid()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('fasilitas_video_conference');
    }

    public function proses_aduanweb()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('aduan_pengelolaan_website');
    }

    public function proses_aduaninter()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('aduan_infrastruktur_jaringan_inter');
    }

    public function proses_pengajuan_magang()
    {
        $this->db->where('status', 'Proses');
        return $this->db->count_all_results('pengajuan_magang');
    }
    // End Section Proses

    // Section Rejected
    public function dc_webdes()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('website_desa');
    }

    public function dc_hakaksesweb()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('hak_akses_website');
    }

    public function dc_maturbup()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('hak_akses_matur_bupati');
    }

    public function dc_fasinter()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('fasilitas_inter_wifi');
    }

    public function dc_fasvid()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('fasilitas_video_conference');
    }

    public function dc_aduanweb()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('aduan_pengelolaan_website');
    }

    public function dc_aduaninter()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('aduan_infrastruktur_jaringan_inter');
    }

    public function dc_pengajuan_magang()
    {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('pengajuan_magang');
    }
    // End Section Rejected

    // Section Total
    public function all_webdes()
    {
        return $this->db->count_all_results('website_desa');
    }

    public function all_hakaksesweb()
    {
        return $this->db->count_all_results('hak_akses_website');
    }

    public function all_maturbup()
    {
        return $this->db->count_all_results('hak_akses_matur_bupati');
    }

    public function all_fasinter()
    {
        return $this->db->count_all_results('fasilitas_inter_wifi');
    }

    public function all_fasvid()
    {
        return $this->db->count_all_results('fasilitas_video_conference');
    }

    public function all_aduanweb()
    {
        return $this->db->count_all_results('aduan_pengelolaan_website');
    }

    public function all_aduaninter()
    {
        return $this->db->count_all_results('aduan_infrastruktur_jaringan_inter');
    }

    public function all_pengajuan_magang()
    {
        return $this->db->count_all_results('pengajuan_magang');
    }
    // End Section Total

}
