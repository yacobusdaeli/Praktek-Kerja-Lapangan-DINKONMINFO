<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_hak_akses_web extends CI_Model {

    public function upload_db($data_arr)
    {
        $this->db->where("id_hak_akses_web");
        $result = $this->db->insert('hak_akses_website', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('hak_akses_website');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('opd_desa', $keyword);
            $this->db->or_like('url', $keyword);
            $this->db->or_like('alasan', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('surat_permohonan', $keyword);
            $this->db->or_like('sk', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('hak_akses_website', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('hak_akses_website')->num_rows();
    }

    public function download_file($id_hak_akses_web )
    {
        $query = $this->db->get_where('hak_akses_website',array('id_hak_akses_web '=>$id_hak_akses_web ));
        return $query->result();
    }

    public function get_data($id_hak_akses_web)
    {
        $this->db->select('*');
        $this->db->from('hak_akses_website');
        $this->db->where('id_hak_akses_web', $id_hak_akses_web);
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_hak_akses_web', $data['id_hak_akses_web']);
        $this->db->delete('hak_akses_website', $data);
    }

    public function edit($data){
        $this->db->where('id_hak_akses_web', $data['id_hak_akses_web']);
        $this->db->update('hak_akses_website', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('hak_akses_website');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_hak_akses_web ', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_hak_akse_web.php */


?>