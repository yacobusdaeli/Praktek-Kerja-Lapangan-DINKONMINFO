<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas_video_conference extends CI_Model {

    public function upload_db($data_arr){
        $this->db->where("id_fas_video_conference");
        $result = $this->db->insert('fasilitas_video_conference', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function tampil_data(){
		return $this->db->get('fasilitas_video_conference');
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
        return $this->db->get('fasilitas_video_conference', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('fasilitas_video_conference')->num_rows();
    }

    public function download_file($id_fas_video_conference )
    {
        $query = $this->db->get_where('fasilitas_video_conference',array('id_fas_video_conference '=>$id_fas_video_conference ));
        return $query->result();
    }

    public function get_data($id_fas_video_conference)
    {
        $this->db->select('*');
        $this->db->from('fasilitas_video_conference');
        $this->db->where('id_fas_video_conference', $id_fas_video_conference);
        
        return $this->db->get()->row();
    }

    public function delete($data){
        $this->db->where('id_fas_video_conference', $data['id_fas_video_conference']);
        $this->db->delete('fasilitas_video_conference', $data);
    }

    public function edit($data){
        $this->db->where('id_fas_video_conference', $data['id_fas_video_conference']);
        $this->db->update('fasilitas_video_conference', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('fasilitas_video_conference');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_fas_video_conference ', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_fasilitas_video_conference.php */


?>