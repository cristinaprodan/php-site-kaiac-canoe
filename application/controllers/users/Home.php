<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Kc_Controller

{
	function __construct()

	{

		parent::__construct();
		$this->load->model('calendar_model', '' , TRUE);
		$this->load->model('admin_model', '' , TRUE);

	}


	function index()

	{
		if($this->id_user != 0){

			if($this->user_type==1){
				redirect('http://localhost/kaiac_canoe/admin', 'refresh');
			}else{
				redirect('http://localhost/kaiac_canoe/event', 'refresh');
			}

		}
		else
		{

			$this->data['descriptionhome']=$this->admin_model->get_description_home();

			$this->home_page('/users/home/index', $this->data);


		}

	}
}
