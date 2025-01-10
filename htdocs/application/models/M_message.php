<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_message extends CI_Model {

    function tampil_data(){
		return $this->db->get('message');
	}

    public function save_msg($data)
    {
        $this->db->insert('message', $data);
    }

    public function delete($data){
        $this->db->where('id_message', $data['id_message']);
        $this->db->delete('message', $data);
    }
}

/* End of file M_message.php */


?>