<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Model untuk pengajuan magang

// Start of file M_pengajuan_magang.php
class M_pengajuan_magang extends CI_Model
{
    // Section Upload DB
    public function upload_db($data_arr)
    {
        $this->db->where("id_pengajuan_magang");
        $result = $this->db->insert('pengajuan_magang', $data_arr);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    // Section View Data
    public function tampil_data()
    {
        return $this->db->get('pengajuan_magang');
    }

    // Section Tampil Page
    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->like('no_induk', $keyword);
            $this->db->like('no_telp', $keyword);
            $this->db->like('pendidikan', $keyword);
            $this->db->like('institusi', $keyword);
            $this->db->like('jurusan', $keyword);
            $this->db->or_like('surat_permohonan', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('pengajuan_magang', $limit, $start)->result_array();
    }

    // Section Count All
    public function countAll()
    {
        return $this->db->get('pengajuan_magang')->num_rows();
    }

    // Section Download File
    public function download_file($id_pengajuan_magang)
    {
        $query = $this->db->get_where('pengajuan_magang', array('id_pengajuan_magang' => $id_pengajuan_magang));
        return $query->result();
    }

    // Section Get Data
    public function get_data($id_pengajuan_magang)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_magang');
        $this->db->where('id_pengajuan_magang', $id_pengajuan_magang);

        return $this->db->get()->row();
    }

    // Section Delete Data
    public function delete($data)
    {
        $this->db->where('id_pengajuan_magang', $data['id_pengajuan_magang']);
        $this->db->delete('pengajuan_magang', $data);
    }

    // Section Edit Data
    public function edit($data)
    {
        $this->db->where('id_pengajuan_magang', $data['id_pengajuan_magang']);
        $this->db->update('pengajuan_magang', $data);
    }

    // Section Search Data
    public function search($query)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_magang');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_pengajuan_magang', 'ASC');
        return $this->db->get();
    }
}

// End of file M_pengajuan_magang.php
