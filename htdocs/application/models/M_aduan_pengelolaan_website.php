<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_aduan_pengelolaan_website extends CI_Model {

    public function upload_db($data_arr){
        $this->db->where("id_aduan_web");
        $result = $this->db->insert('aduan_pengelolaan_website', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('aduan_pengelolaan_website');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('opd', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('url', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('alasan', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('riwayat', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('aduan_pengelolaan_website', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('aduan_pengelolaan_website')->num_rows();
    }

    public function get_data($id_aduan_web )
    {
        $this->db->select('*');
        $this->db->from('aduan_pengelolaan_website');
        $this->db->where('id_aduan_web ', $id_aduan_web );
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_aduan_web', $data['id_aduan_web']);
        $this->db->delete('aduan_pengelolaan_website', $data);
    }

    public function edit($data){
        $this->db->where('id_aduan_web', $data['id_aduan_web']);
        $this->db->update('aduan_pengelolaan_website', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('aduan_pengelolaan_website');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_aduan_web  ', 'ASC');
        return $this->db->get();
    }

}

/* End of file M_aduan_pengelolaan_website.php */


?>