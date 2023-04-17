<?php


Class Control_login extends CI_Model

{

	function verifica_login($username, $password)

	{

		$this -> db -> select('ID_User, Username, Password, Salt');

		$this -> db -> from('Users');

		$this -> db -> where('Username', $username);

		$this -> db -> where('Password', MD5($password));

		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)

		{

			return $query->result();

		}

		else

		{

			return false;

		}

	}


}

?>
