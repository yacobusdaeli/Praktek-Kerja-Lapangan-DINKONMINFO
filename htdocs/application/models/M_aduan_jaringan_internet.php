<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_aduan_jaringan_internet extends CI_Model {

    public function upload_db($data_arr){
        $this->db->where("id_aduan_jar_inter");
        $result = $this->db->insert('aduan_infrastruktur_jaringan_inter', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('aduan_infrastruktur_jaringan_inter');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('opd', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('alasan', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('riwayat', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('aduan_infrastruktur_jaringan_inter', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('aduan_infrastruktur_jaringan_inter')->num_rows();
    }

    public function get_data($id_aduan_jar_inter)
    {
        $this->db->select('*');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        $this->db->where('id_aduan_jar_inter', $id_aduan_jar_inter );
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_aduan_jar_inter', $data['id_aduan_jar_inter']);
        $this->db->delete('aduan_infrastruktur_jaringan_inter', $data);
    }

    public function edit($data){
        $this->db->where('id_aduan_jar_inter', $data['id_aduan_jar_inter']);
        $this->db->update('aduan_infrastruktur_jaringan_inter', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_aduan_jar_inter', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_aduan_jaringan_internet.php */


?>