<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kc_Controller extends CI_Controller

{
	protected $data = array();
	function __construct()

	{

		parent::__construct();

		$this->load->helper('cookie');

		$this->load->library('session');

		$this->load->helper('url');

		$this->load->helper('form');

		$this->load->model('users_model','',TRUE);
		$this->data['u_hash']=get_cookie('control_u');
		$this->data['user']=$this->users_model->get_user_login($this->data['u_hash']);
		if($this->data['user']){
			$this->id_user=$this->data['user'][0]['ID_User'];
			$this->FirstName=$this->data['user'][0]['FirstName'];
			$this->LastName=$this->data['user'][0]['LastName'];
			$this->user_type=$this->data['user'][0]['User_Type'];
		}else{
			$this->id_user=0;
		}
	}
	function home_page($view)

	{

		if($this->data['user']){

			$this->data['id_user']=$this->id_user;
			$this->data['FirstName']=$this->FirstName;
			$this->data['LastName']=$this->LastName;

			$this->load->view('users/common/head', $this->data);

			$this->load->view('coach/common/header', $this->data);

			$this->load->view($view, $this->data);
		}
		else
		{
			$this->data['id_user']=0;

			$this->load->view('users/common/head', $this->data);

			$this->load->view('users/common/header', $this->data);

			$this->load->view('/users/home/index', $this->data);

			$this->load->view('users/common/footer', $this->data);
		}


	}
	function common_page($view)

	{

		if($this->data['user']){

			$this->data['id_user']=$this->id_user;
			$this->data['FirstName']=$this->FirstName;
			$this->data['LastName']=$this->LastName;

			$this->load->view('users/common/head', $this->data);

			$this->load->view('coach/common/header', $this->data);

			$this->load->view($view, $this->data);
		}
		else
		{
			$this->data['id_user']=0;

			for($i=2012;$i<=2022;$i++) {
				$this->data['statistics'.$i] = $this->users_model->get_cart_data($i);
			}
			$this->load->view('users/common/head', $this->data);

			$this->load->view('users/common/header', $this->data);

			$this->load->view($view, $this->data);

			$this->load->view('users/common/footer', $this->data);
		}


	}

	function admin_page($view)

	{

		if($this->data['user']){

			$this->data['id_user']=$this->id_user;
			$this->data['FirstName']=$this->FirstName;
			$this->data['LastName']=$this->LastName;

			$this->load->view('users/common/head', $this->data);

			$this->load->view('admin/common/header', $this->data);

			$this->load->view($view, $this->data);
		}
		else
		{
			$this->data['id_user']=0;

			$this->load->view('users/common/head', $this->data);

			$this->load->view('users/common/header', $this->data);

			$this->load->view($view, $this->data);

			$this->load->view('users/common/footer', $this->data);
		}


	}

}
