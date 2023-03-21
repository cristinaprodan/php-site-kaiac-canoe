<?php

class Users_model extends CI_Model
{

	public function get_user_login($hash)

	{

		$this->db->select('*');

		$this->db->from('Users');

		$this->db->where('md5(CONCAT(`ID_User`,`Password`,`Salt`))', $hash);

		$query = $this->db->get();

		return $query->result_array();

	}
	public function get_cart_data($year)

	{

		$this->db->select('Medals');

		$this->db->from('statistics');

		$this->db->where('Year',$year);

		$query = $this->db->get();

		$ret = $query->row();

		if($query->num_rows() > 0) {
			return $ret->Medals;
		}else{
			return 0;
		}

	}

}
