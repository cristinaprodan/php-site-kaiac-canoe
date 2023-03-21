<?php

class Add_event_model extends CI_Model
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
	function get_events()
	{
		$this->db->select('*');
		$this->db->from('event');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_upcoming_event(){
		$this->db->select('*');
		$this->db->from('event');
		$now = date("Y-m-d");
		$this->db->where('Start_Date >=',$now);
		$query = $this->db->get();
		return $query->result_array();

	}

	function get_past_event(){
		$this->db->select('*');
		$this->db->from('event');
		$now = date("Y-m-d");
		$this->db->where('Start_Date <=',$now);
		$query = $this->db->get();
		return $query->result_array();
	}

	function update($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location,$id_event)
	{
		$data = array(

			'Start_Date'=>$StartDate,
			'End_Date'=>$EndDate,
			'Event'=>$NameEvent,
			'Type_Event'=>$TypeEvent,
			'Location'=>$Location,

		);


		$this->db->where('ID_Event', $id_event);

		$this->db->update('event', $data);

	}

	function delete_event($id_event)
	{
		$this->db->where("ID_Event", $id_event);
		$this->db->delete('event');

	}


	function get_events_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('ID_Event',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function add_startlist($NameAth,$Gender,$Discipline,$Category,$Distance,$id)
   {
		$data=array(
			'ID_Ath'=>$NameAth,
			'ID_Category'=>$Category,
			'ID_Discipline'=>$Discipline,
			'ID_Gender'=>$Gender,
			'Distance'=>$Distance,
			'ID_Event'=>$id,
		);
		$this->db->insert('startlist',$data);
		return $this->db->insert_id();
	}



	function get_register1($id)
	{
		$this->db->select('*');
		$this->db->from('startlist');
		$this->db->join('myteam', 'startlist.ID_Ath = myteam.ID_Ath');
		$this->db->join('category', 'startlist.ID_Category = category.ID_Category');
		$this->db->join('distance', 'startlist.Distance = distance.ID_Distance');
		$this->db->join('event', 'startlist.ID_Event = event.ID_Event');
		$this->db->where('event.ID_Event',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_register()
	{
		$this->db->select('*');
		$this->db->from('startlist');
		$this->db->join('myteam', 'startlist.ID_Ath = myteam.ID_Ath');
		$this->db->join('category', 'startlist.ID_Category = category.ID_Category');
		$this->db->join('distance', 'startlist.Distance = distance.ID_Distance');
		$this->db->join('event', 'startlist.ID_Event = event.ID_Event');

		$query = $this->db->get();
		return $query->result_array();
	}









}
