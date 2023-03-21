<?php

Class Calendar_model extends CI_Model
{
	function add_form($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location)
	{
		$data=array(
			'Start_Date'=>$StartDate,
			'End_Date'=>$EndDate,
			'Event'=>$NameEvent,
			'Type_Event'=>$TypeEvent,
			'Location'=>$Location,
		);
		$this->db->insert('event',$data);
		return $this->db->insert_id();
	}

	function get_event()
	{
		$this->db->select('*');
		$this->db->from('event');
		$query = $this->db->get();
		return $query->result_array();
	}



}
