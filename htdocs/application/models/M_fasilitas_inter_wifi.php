<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas_inter_wifi extends CI_Model {

    public function upload_db($data_arr){
        $this->db->where("id_fas_inter_wifi");
        $result = $this->db->insert('fasilitas_inter_wifi', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('fasilitas_inter_wifi');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('nip', $keyword);
            $this->db->or_like('opd', $keyword);
            $this->db->or_like('hari', $keyword);
            $this->db->or_like('tanggal', $keyword);
            $this->db->or_like('jam', $keyword);
            $this->db->or_like('tempat', $keyword);
            $this->db->or_like('peserta', $keyword);
            $this->db->or_like('acara', $keyword);
            $this->db->or_like('penyelenggara', $keyword);
            $this->db->or_like('surat_permohonan', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('fasilitas_inter_wifi', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('fasilitas_inter_wifi')->num_rows();
    }

    public function download_file($id_fas_inter_wifi )
    {
        $query = $this->db->get_where('fasilitas_inter_wifi',array('id_fas_inter_wifi '=>$id_fas_inter_wifi ));
        return $query->result();
    }

    public function get_data($id_fas_inter_wifi)
    {
        $this->db->select('*');
        $this->db->from('fasilitas_inter_wifi');
        $this->db->where('id_fas_inter_wifi', $id_fas_inter_wifi);
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_fas_inter_wifi', $data['id_fas_inter_wifi']);
        $this->db->delete('fasilitas_inter_wifi', $data);
    }

    public function edit($data){
        $this->db->where('id_fas_inter_wifi', $data['id_fas_inter_wifi']);
        $this->db->update('fasilitas_inter_wifi', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('fasilitas_inter_wifi');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_fas_inter_wifi ', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_fasilitas_inter_wifi.php */


?>