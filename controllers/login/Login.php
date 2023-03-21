<?php

class Login extends Kc_Controller {



	function __construct()

	{

		parent::__construct();

		$this->load->model('users_model', '', TRUE);

	}



	function index()

	{

		$this->load->helper('cookie');

		$this->data['username']=get_cookie('control_username');

		$this->data['u_hash']=get_cookie('control_u');

		$this->data['id']=get_cookie('control_id');

		$this->load->helper(array('form'));

		$this->data['user'] = $this->users_model->get_user_login($this->data['u_hash']);

		if($this->data['user'])

			redirect('http://localhost/kaiac_canoe/home', 'refresh');

		else

		{

			$this->load->view('users/common/head', $this->data);

			$this->load->view('users/common/header', $this->data);

			$this->load->view('users/login/login_view', $this->data);

			$this->load->view('users/common/footer', $this->data);

		}

	}



}

