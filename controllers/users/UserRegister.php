<?php

class UserRegister extends Kc_Controller
{
	function __construct()

	{

		parent::__construct();

		$this->load->model('UserRegister_model', '', TRUE);

	}

	function index()
	{
		if($this->input->post('adduser')=='save')
		{
			$UserName=$this->input->post('email');
			$FirstName=$this->input->post('FirstName');
			$LastName=$this->input->post('LastName');
			$Password=$this->input->post('password');
			$this->UserRegister_model->add_user($UserName,$FirstName,$LastName,$Password);



		}


		$this->common_page('/users/singup/index', $this->data);



	}

}

