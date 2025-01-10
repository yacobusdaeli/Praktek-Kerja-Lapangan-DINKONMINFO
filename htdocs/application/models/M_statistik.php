<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_statistik extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengajuan_magang');
    }

    public function get_statistik_by_status()
    {
        // Delegasikan fungsi ke M_pengajuan_magang
        $all_data = $this->M_pengajuan_magang->tampil_data()->result_array();

        // Buat logika statistik berdasarkan status
        $result = [];

        foreach ($all_data as $data) {
            $status = $data['status'];

            if (!isset($result[$status])) {
                $result[$status] = 0;
            }

            $result[$status]++;
        }

        // Formatkan hasil sebagai array
        $formatted_result = [];

        foreach ($result as $status => $total) {
            $formatted_result[] = ['status' => $status,
                'total' => $total,
            ];
        }

        return $formatted_result;
    }

    public function get_statistik_bulanan()
    {
        // Ambil data dari M_pengajuan_magang
        $all_data = $this->M_pengajuan_magang->tampil_data()->result_array();

        // Inisialisasi array untuk hasil
        $result = [];

        foreach ($all_data as $data) {

            // Pastikan field `tanggal_pengajuan` ada dan valid
            if (!empty($data['waktu'])) {
                // Ekstrak bulan dari tanggal_pengajuan
                $bulan = date('n', strtotime($data['waktu'])); // 'n' mengembalikan angka bulan tanpa leading zero

                if (!isset($result[$bulan])) {
                    $result[$bulan] = 0;
                }

                // Tambahkan jumlah untuk bulan yang sesuai
                $result[$bulan]++;
            }
        }

        // Formatkan hasil sebagai array
        $formatted_result = [];

        for ($i = 1; $i <= 12; $i++) {
            $formatted_result[] = ['month' => $i,
                // Bulan dalam angka
                'total' => isset($result[$i]) ? $result[$i] : 0, // Jika tidak ada data, set ke 0
            ];
        }

        return $formatted_result;
    }

    public function get_statistik_institusi()
    {

        // Ambil data dari M_pengajuan_magang
        $all_data = $this->M_pengajuan_magang->tampil_data()->result_array();

        // Inisialisasi hasil
        $result = [];

        foreach ($all_data as $data) {
            $institusi = $data['institusi']; // Pastikan kolom institusi ada dalam tabel

            if (!isset($result[$institusi])) {
                $result[$institusi] = 0;
            }

            $result[$institusi]++;
        }

        // Formatkan hasil sebagai array
        $formatted_result = [];
        foreach ($result as $institusi => $total) {
            $formatted_result[] = [
                'institusi' => $institusi,
                'total' => $total,
            ];
        }

        return $formatted_result;
    }

    public function get_statistik_by_jurusan()
    {
        // Ambil data pengajuan magang
        $all_data = $this->M_pengajuan_magang->tampil_data()->result_array();

        // Inisialisasi array untuk hasil
        $result = [];

        foreach ($all_data as $data) {
            $jurusan = $data['jurusan']; // Pastikan field 'jurusan' ada di tabel

            if (!isset($result[$jurusan])) {
                $result[$jurusan] = 0;
            }

            $result[$jurusan]++;
        }

        // Formatkan hasil sebagai array
        $formatted_result = [];

        foreach ($result as $jurusan => $total) {
            $formatted_result[] = [
                'jurusan' => $jurusan,
                'total' => $total,
            ];
        }

        return $formatted_result;
    }

}
