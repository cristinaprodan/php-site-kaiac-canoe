<?php

Class About_model extends CI_Model
{
	function add_form($firstname,$lastname,$country,$subject)
	{
	$data=array(
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'country'=>$country,
		'subject'=>$subject,
	);

	$this->db->insert('form',$data);
	return $this->db->insert_id();
	}
}
