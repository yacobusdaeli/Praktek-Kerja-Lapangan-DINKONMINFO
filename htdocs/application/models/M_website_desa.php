<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_website_desa extends CI_Model {

    public function upload_db($data_arr)
    {
        $this->db->where("id_web_desa");
        $result = $this->db->insert('website_desa', $data_arr);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
        
        
    }

    public function tampil_data(){
		return $this->db->get('website_desa');
	}

    public function tampil_page($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('SK_Pengangkatan_Kades', $keyword);
            $this->db->or_like('SK_Pengangkatan_Perangkat_Desa', $keyword);
            $this->db->or_like('Surat_Kuasa', $keyword);
            $this->db->or_like('Surat_Permohonan_Domain', $keyword);
            $this->db->or_like('Surat_Permohonan_Hosting', $keyword);
            $this->db->or_like('KTP', $keyword);
            $this->db->or_like('waktu', $keyword);
            $this->db->or_like('status', $keyword);
        }
        return $this->db->get('website_desa', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('website_desa')->num_rows();
    }

    public function get_data($id_web_desa)
    {
        $this->db->select('*');
        $this->db->from('website_desa');
        $this->db->where('id_web_desa', $id_web_desa);
        
        return $this->db->get()->row();
    }

    public function download_file($id_web_desa)
    {
        $query = $this->db->get_where('website_desa',array('id_web_desa'=>$id_web_desa));
        return $query->result();
    }

    public function delete($data){
        $this->db->where('id_web_desa', $data['id_web_desa']);
        $this->db->delete('website_desa', $data);
    }

    public function edit($data){
        $this->db->where('id_web_desa', $data['id_web_desa']);
        $this->db->update('website_desa', $data);
    }

    function search($query){
        $this->db->select('*');
        $this->db->from('website_desa');
        if ($query != '') {
            $this->db->like('nama', $query);
        }
        $this->db->order_by('id_web_desa ', 'ASC');
        return $this->db->get();
    }
}

/* End of file M_website_desa.php */


?>