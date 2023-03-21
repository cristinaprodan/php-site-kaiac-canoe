<?php

class Myteam_model extends CI_Model
{
	function add_ath($FirstName,$LastName,$Date_birth,$Gender,$SSN,$Discipline)
	{
		$data=array(
			'first_name'=>$FirstName,
			'last_name'=>$LastName,
			'date_birth'=>$Date_birth,
			'gender'=>$Gender,
			'SSN'=>$SSN,
			'Discipline'=>$Discipline,


		);
		$this->db->insert('myteam',$data);
		return $this->db->insert_id();
	}
	function get_ath()
	{
		$this->db->select('*');
		$this->db->from('myteam');
		$query = $this->db->get();
		return $query->result_array();
	}

}
