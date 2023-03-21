<?php

class UserRegister_model extends CI_Model
{
	function add_user($UserName,$FirstName,$LastName,$Password)
	{
		$data=array(

			'Username'=>$UserName,
			'FirstName'=>$FirstName,
			'LastName'=>$LastName,
			'Password'=>md5($Password),
			'User_Type'=>'2',
			'Salt'=>'1',

		);

		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}






}
