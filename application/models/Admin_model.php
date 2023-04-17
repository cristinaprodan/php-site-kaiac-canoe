<?php

class Admin_model extends CI_Model
{
	function add_team($TeamName,$TeamType){
		$data=array(
			'Name_Team'=>$TeamName,
			'Team_Type'=>$TeamType,

		);

		$this->db->insert('teams', $data);
		return $this->db->insert_id();
	}


	function update_team($TeamName,$TeamType,$id_team)
	{
		$data=array(
			'Name_Team'=>$TeamName,
			'Team_Type'=>$TeamType,


		);

		$this->db->where('ID_Team', $id_team);

		$this->db->update('teams', $data);


	}

	function delete_team($id_team)
	{
		$this->db->where("ID_Team", $id_team);
		$this->db->delete('teams');

	}


	function get_team_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('teams');
		$this->db->where('ID_Team',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_team()
	{
		$this->db->select('*');
		$this->db->from('teams');
		$query = $this->db->get();
		return $query->result_array();
	}


	function add_event($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location)
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

	function update_events($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location,$id_event)
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

	function delete_events($id_event)
	{
		$this->db->where("ID_Event", $id_event);
		$this->db->delete('event');

	}


	function get_events_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('ID_event',$id);
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

	function add_description($Year,$Description,$id_ath)
	{
		$data=array(
			'Year'=>$Year,
			'Description'=>$Description,
			'ID_Athletes'=>$id_ath,

		);

		$this->db->insert('descriptionath', $data);

		return $this->db->insert_id();


	}

	function get_athletes()
	{
		$this->db->select('*');
		$this->db->from('athletes');
		$this->db->join('descriptionath', 'athletes.ID_Athletes=descriptionath.ID_Athletes');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_athletesdesc()
	{
		$this->db->select('*');
		$this->db->from('athletes');
		$query = $this->db->get();
		return $query->result_array();
	}

	function description_home($Title,$Descriptionh,$Img)
	{
		$data = array(
			'title' => $Title,
			'descriptionh' => $Descriptionh,
			'img' => $Img,

		);
		$this->db->insert('descriptionhome', $data);
		return $this->db->insert_id();
	}

	function get_description_home()
	{
		$this->db->select('*');
		$this->db->from('descriptionhome');
		$query = $this->db->get();
		return $query->result_array();


	}

	function add_statistics($Medals,$Year)
	{
		$data = array(
			'Medals' => $Medals,
			'Year' => $Year,

		);
		$this->db->insert('statistics', $data);
		return $this->db->insert_id();
	}




}
