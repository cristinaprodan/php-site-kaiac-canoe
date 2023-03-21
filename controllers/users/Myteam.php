<?php

class Myteam extends Kc_Controller

{
	function __construct()

	{

		parent::__construct();
		$this->load->model('myteam_model', '' , TRUE);

	}


	function index()

	{
		if($this->input->post('submit')=='submit'){

			$FirstName=$this->input->post('first_name');
			$LastName=$this->input->post('last_name');
			$Date_birth=$this->input->post('date_birth');
			$Gender=$this->input->post('gender');
			$SSN=$this->input->post('SSN');
			$Discipline=$this->input->post('Discipline');
			$this->myteam_model->add_ath($FirstName,$LastName,$Date_birth,$Gender,$SSN,$Discipline);

		}
		$this->data['myteam']=$this->myteam_model->get_ath();

		$this->common_page('/users/myteam/index', $this->data);


	}
}
