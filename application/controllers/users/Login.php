<?php

class Login extends Kc_Controller
{
	function index(){

		$this->common_page('/users/login/index', $this->data);
	}

}
