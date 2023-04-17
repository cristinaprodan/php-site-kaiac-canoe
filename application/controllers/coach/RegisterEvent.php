<?php

class RegisterEvent extends Kc_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_Event_model','',TRUE);
		$this->load->model('Add_event_model','',TRUE);
	}

	function index($id=0)
	{

		$this->data['event']=$this->Register_Event_model->get_event($id);

		if($this->input->post('submit')=='submit')
		{

			$NameAth=$this->input->post('eth');
			$Gender=$this->input->post('gender');
			$Discipline=$this->input->post('race');
			$Category=$this->input->post('category');
			$Distance=$this->input->post('distance');
			$this->Add_event_model->add_startlist($NameAth,$Gender,$Discipline,$Category,$Distance,$id);

		}


		$this->data['startlist'] = $this->Add_event_model->get_register();


		$this->common_page('/coach/registerevent/index', $this->data);
	}

	function register_eve($id=0)
	{

		if($this->input->post('submit')=='submit')
		{

			$NameAth=$this->input->post('first_name');
			$Gender=$this->input->post('gender');
			$Discipline=$this->input->post('race');
			$Category=$this->input->post('category');
			$Distance=$this->input->post('distance');
			$this->Add_event_model->add_startlist($NameAth,$Gender,$Discipline,$Category,$Distance,$id);

		}


		$this->data['startlist'] = $this->Add_event_model->get_register();


		$this->common_page('/coach/registervent/index', $this->data);

	}

	function startlist($id=0)
	{
		$this->data['startlist'] = $this->Add_event_model->get_register1($id);


		$this->common_page('/coach/registerevent/startlist', $this->data);
	}

}
