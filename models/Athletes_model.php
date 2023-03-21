<?php

class Athletes_model extends CI_Model
{

	function get_athletes()
	{
		$this->db->select('*');
		$this->db->from('athletes');
		$this->db->join('discipline', 'discipline.ID_Discipline=athletes.ID_Discipline');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_athletes_by_name($name)
	{
		$this->db->select('*');
		$this->db->from('athletes');
		$this->db->join('discipline', 'discipline.ID_Discipline=athletes.ID_Discipline');
		$this->db->like('athletes.Name_Ath', $name);
		$query = $this->db->get();
		return $query->result_array();


	}


	function get_athlete_by($race=0,$categ=0,$gender=0)
	{
		$this->db->select('*');
		$this->db->from('myteam');
		if($categ!=0){
			$this->db->where('ID_Category', $categ);
		}
		if($race!=0){
			$this->db->where('ID_Discipline', $race);
		}
		if($gender!=0){
			$this->db->where('ID_Gender', $gender);
		}
		$query = $this->db->get();
		return $query->result_array();


	}
}
