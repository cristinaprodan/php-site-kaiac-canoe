<?php

class Calendar extends Kc_Controller
{
	function __construct()

	{


		parent::__construct();
		$this->load->model('calendar_model', '' , TRUE);

	}


	function index()
	{
		if($this->input->post('submit')=='submit'){
			$StartDate=$this->input->post('start_date');
			$EndDate=$this->input->post('end_date');
			$NameEvent=$this->input->post('name_event');
			$TypeEvent=$this->input->post('type_event');
			$Location=$this->input->post('location');
			$this->calendar_model->add_form($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location);

		}

		$this->data['events']=$this->calendar_model->get_event();



		$this->common_page('/users/calendar/index', $this->data);
	}



}
