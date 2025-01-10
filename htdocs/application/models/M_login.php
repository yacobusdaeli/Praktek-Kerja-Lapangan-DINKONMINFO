<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function cek_login($admin,$where){		
		return $this->db->get_where($admin,$where);
	}	

}

/* End of file M_login.php */


?>