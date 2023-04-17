<?php

class Admin extends Kc_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('admin_model', '', TRUE);
	}

	function index()
	{

		if ($this->user_type == 1) {

			if ($this->input->post('submit') == 'add') {

				$TeamName = $this->input->post('team_name');

				$TeamType = $this->input->post('team_type');

				$this->admin_model->add_team($TeamName, $TeamType);
			}

			$this->data['teams'] = $this->admin_model->get_team();

			$this->admin_page('/admin/home/index', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/admin', 'refresh');
		}
	}


	function update_team($id_team = 0)

	{
		if ($this->user_type == 1) {

			if ($this->input->post('save_team') == 'save') {

				$TeamName = $this->input->post('team_name');

				$TeamType = $this->input->post('team_type');

				$this->admin_model->update_team($TeamName, $TeamType, $id_team);


				redirect('http://localhost/kaiac_canoe/admin');


			}


			$this->data['teams'] = $this->admin_model->get_team_by_id($id_team);


			$this->admin_page('admin/home/updateclub', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/admin', 'refresh');
		}
	}


	function delete_team($id_team = 0)
	{
		if ($this->user_type == 1) {


			$this->admin_model->delete_team($id_team);

			redirect('http://localhost/kaiac_canoe/admin');


			$this->admin_page('http://localhost/kaiac_canoe/delteam', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/eventscomeing', 'refresh');
		}


	}


	function add_event()
	{
		if($this->user_type == 1) {


			if ($this->input->post('add_event') == 'add') {
				$StartDate = $this->input->post('start_date');
				$EndDate = $this->input->post('end_date');
				$NameEvent = $this->input->post('name_event');
				$TypeEvent = $this->input->post('type_event');
				$Location = $this->input->post('location');
				$this->admin_model->add_event($StartDate, $EndDate, $NameEvent, $TypeEvent, $Location);

			}

			$this->data['event'] = $this->admin_model->get_events();

			$this->data['eventes'] = $this->admin_model->get_upcoming_event();


			$this->data['eve'] = $this->admin_model->get_past_event();


			$this->admin_page('/admin/event/index', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/home', 'refresh');
		}


	}

	function update_events($id_event = 0)

	{
		if ($this->user_type == 1) {

			if ($this->input->post('save_events') == 'save') {

				$StartDate = $this->input->post('start_date');
				$EndDate = $this->input->post('end_date');
				$NameEvent = $this->input->post('name_event');
				$TypeEvent = $this->input->post('type_event');
				$Location = $this->input->post('location');
				$this->admin_model->update_events($StartDate, $EndDate, $NameEvent, $TypeEvent, $Location, $id_event);


				redirect('http://localhost/kaiac_canoe/eventscomeing');

			}
			//pastram datele de uitilizatori intr -un array pt a predefinii inputurile din view-ul de update

			$this->data['event'] = $this->admin_model->get_events_by_id($id_event);


			$this->admin_page('/admin/event/eventupdate', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/eventscomeing', 'refresh');
		}
	}


	//delete event
	function delete_events($id_event = 0)
	{



			$this->admin_model->delete_events($id_event);


			redirect('http://localhost/kaiac_canoe/event', 'refresh');

	}

	function get_upcoming_event()
	{

		if ($this->user_type == 1) {

			$this->data['eventes'] = $this->admin_model->get_upcoming_event();


			$this->data['eve'] = $this->admin_model->get_past_event();


			$this->admin_page('/admin/event/index', $this->data);

		} else {
			redirect('http://localhost/kaiac_canoe/eventscomeing', 'refresh');
		}
	}


	function add_description()
	{

		if ($this->user_type == 1) {

			if ($this->input->post('add_description') == 'add') {

				$Year = $this->input->post('Year');
				$Description = $this->input->post('Description');
				$id_ath = $this->input->post('atheletes');
				$this->admin_model->add_description($Year, $Description, $id_ath);


			}
			//$this->data['athdescription'] = $this->admin_model->get_ath_description();

			$this->data['athletes'] = $this->admin_model->get_athletesdesc();

			//var_dump($this->data['athletes']);

			$this->admin_page('/admin/athdescription/index', $this->data);


		} else {
			redirect('http://localhost/kaiac_canoe/eventscomeing', 'refresh');
		}

	}

	function description_home()

	{
		if ($this->user_type == 1) {

			if ($this->input->post('submit')) {

				for ($x = 0; $x < 1; $x++) {
					//configure upload parameters
					$config['upload_path'] = './assets/img/home/';
					$config['allowed_types'] = 'gif|jpeg|jpg|png|pdf|doc|docx';
					$config['max_size'] = 510000;
					$config['max_width'] = 500024;
					$config['max_height'] = 500768;

					$this->load->library('upload', $config);

					$files = $_FILES;
					$cpt = count($_FILES['userfile' . $x]['name']);
					for ($i = 0; $i < $cpt; $i++) {
						$_FILES['userfile']['name'] = $files['userfile' . $x]['name'][$i];
						$_FILES['userfile']['type'] = $files['userfile' . $x]['type'][$i];
						$_FILES['userfile']['tmp_name'] = $files['userfile' . $x]['tmp_name'][$i];
						$_FILES['userfile']['error'] = $files['userfile' . $x]['error'][$i];
						$_FILES['userfile']['size'] = $files['userfile' . $x]['size'][$i];


						$this->upload->initialize($config);

						if ($this->upload->do_upload()) {
							$profile_photo_url = 'http://localhost/kaiac_canoe/assets/img/home/' . $this->upload->data('file_name');

						}else{
							$profile_photo_url="";
						}


					}


				}

				$Title = $this->input->post('title');
				$Descriptionh = $this->input->post('description');

				$this->admin_model->description_home($Title, $Descriptionh, $profile_photo_url);
			}
			//$this->data['descriptionhome'] = $this->admin_model->get_description_home();
			$this->admin_page('/admin/homedescription/index', $this->data);
		} else {
			redirect('http://localhost/kaiac_canoe/admin', 'refresh');
		}
	}

	function add_statistics()
	{

		if ($this->user_type == 1) {

			if ($this->input->post('add_statistics') == 'add') {

				$Medals = $this->input->post('Medals');
				$Year = $this->input->post('Year');

				$this->admin_model->add_statistics($Medals,$Year);


			}


			$this->admin_page('/admin/statistics/index', $this->data);


		} else {
			redirect('http://localhost/kaiac_canoe/eventscomeing', 'refresh');
		}

	}






}












