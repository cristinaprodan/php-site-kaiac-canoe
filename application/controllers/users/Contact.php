<?php

class Contact extends Kc_Controller
{
	function index(){
		$this->common_page('users/contact/index',$this->data);
	}

}
