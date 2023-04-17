<?php

class Add_ath_model extends CI_Model
{
	function add_ath($id_user,$FirstName,$LastName,$Date_birth,$Gender,$SSN,$Discipline,$url_img)
	{
		$data = array(
			'first_name' => $FirstName,
			'last_name' => $LastName,
			'date_birth' => $Date_birth,
			'ID_Gender' => $Gender,
			'SSN' => $SSN,
			'ID_Discipline' => $Discipline,
			'URL_Img' => $url_img,
			'ID_Team'=>$id_user,


		);
		$this->db->insert('myteam', $data);
		return $this->db->insert_id();
	}
	function get_ath()
	{
		$this->db->select('*');
		$this->db->from('myteam');
		$this->db->join('users', 'myteam.ID_Team=users.ID_Team');
		$query = $this->db->get();
		return $query->result_array();
	}

	function update_ath_category($id_Category,$id_ath)
	{
		$data=array(
			'ID_Category' => $id_Category,
		);

		$this->db->where('ID_Ath', $id_ath);

		$this->db->update('myteam',$data);

	}

	function get_ath_by_user($id)
	{
		$this->db->select('*');
		$this->db->from('myteam');
		$this->db->join('users', 'myteam.ID_Team=users.ID_Team');
		$this->db->where('myteam.ID_Team',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
}
