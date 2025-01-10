<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_hak_akses_matur_bupati extends CI_Model {   
    
    public function upload_db($data_arr){
        $this->db->where("id_hak_akses_maturbup");
        $result = $this->db->insert('hak_akses_matur_bupati', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('hak_akses_matur_bupati');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('opd', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('alasan', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('surat_permohonan', $keyword);
            $this->db->or_like('sk', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('hak_akses_matur_bupati', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('hak_akses_matur_bupati')->num_rows();
    }

    public function download_file($id_hak_akses_maturbup )
    {
        $query = $this->db->get_where('hak_akses_matur_bupati',array('id_hak_akses_maturbup '=>$id_hak_akses_maturbup ));
        return $query->result();
    }

    public function get_data($id_hak_akses_maturbup)
    {
        $this->db->select('*');
        $this->db->from('hak_akses_matur_bupati');
        $this->db->where('id_hak_akses_maturbup', $id_hak_akses_maturbup);
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_hak_akses_maturbup', $data['id_hak_akses_maturbup']);
        $this->db->delete('hak_akses_matur_bupati', $data);
    }

    public function edit($data){
        $this->db->where('id_hak_akses_maturbup', $data['id_hak_akses_maturbup']);
        $this->db->update('hak_akses_matur_bupati', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('hak_akses_matur_bupati');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_hak_akses_maturbup ', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_hak_akses_matur_bupati.php */


?>