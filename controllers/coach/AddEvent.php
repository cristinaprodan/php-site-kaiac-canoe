<?php

class AddEvent extends Kc_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Add_event_model','',TRUE);
	}

	function index()
	{

		if ($this->user_type == 2) {


			if ($this->input->post('add_event') == 'add') {

				$StartDate = $this->input->post('start_date');
				$EndDate = $this->input->post('end_date');
				$NameEvent = $this->input->post('name_event');
				$TypeEvent = $this->input->post('type_event');
				$Location = $this->input->post('location');
				$this->Add_event_model->add_form($StartDate, $EndDate, $NameEvent, $TypeEvent, $Location);

			}


			$this->data['event'] = $this->Add_event_model->get_events();

			$this->data['eventes'] = $this->Add_event_model->get_upcoming_event();


			$this->data['eve'] = $this->Add_event_model->get_past_event();


			$this->common_page('/coach/Event/index', $this->data);
		} else {
			redirect('http://localhost/kaiac_canoe/home', 'refresh');
		}
	}

	function update($id_event=0)

	{
		if ($this->user_type == 2) {

		if($this->input->post('save_event')=='save')
		{

			$StartDate=$this->input->post('start_date');
			$EndDate=$this->input->post('end_date');
			$NameEvent=$this->input->post('name_event');
			$TypeEvent=$this->input->post('type_event');
			$Location=$this->input->post('location');
			$this->Add_event_model->update($StartDate,$EndDate,$NameEvent,$TypeEvent,$Location, $id_event);


			redirect('http://localhost/kaiac_canoe/event');

		}
   //pastram datele de event intr -un array pt a predefinii inputurile din view-ul de update

		$this->data['event'] = $this->Add_event_model->get_events_by_id($id_event);


		$this->common_page('/coach/Event/update', $this->data);
		} else {
			redirect('http://localhost/kaiac_canoe/home', 'refresh');
		}
	}


  //delete event
	function delete_event($id_event=0)
	{

			$this->Add_event_model->delete_event($id_event);

			redirect('http://localhost/kaiac_canoe/event');
	}






}
