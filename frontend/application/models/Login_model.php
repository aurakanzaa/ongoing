<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($no_rekamedis, $password)
	{
		$this->db->where('no_rekamedis', $no_rekamedis);
		$this->db->where('password',$password);
		$query = $this->db->get('tbl_pasien');
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */