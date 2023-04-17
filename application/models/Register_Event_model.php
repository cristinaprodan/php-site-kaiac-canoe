<?php

class Register_Event_model extends CI_Model
{
	function get_event($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('ID_Event',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

}
