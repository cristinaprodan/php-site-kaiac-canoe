<?php

class Team extends Kc_Controller
{
	function index(){
		$this->common_page('users/team/index',$this->data);
	}
}
