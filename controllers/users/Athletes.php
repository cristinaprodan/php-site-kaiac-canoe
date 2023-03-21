<?php

class Athletes extends Kc_Controller
{

	function __construct()

	{


		parent::__construct();

		$this->load->model('athletes_model', '', TRUE);
		$this->load->model('admin_model', '', TRUE);

	}

	function index()
	{

		if($this->input->post("cautare") == "cautare"){

			$search = $this->input->post("search");
			$this->data['athletes']=$this->athletes_model->get_athletes_by_name($search);

		}else{
			$this->data['athletes']=$this->athletes_model->get_athletes();
		}
		$this->data['athletesdesc']=$this->admin_model->get_athletes();

		$this->common_page('/users/athletes/index', $this->data);
	}
}
