<?php

class AddAthletes extends Kc_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('add_ath_model','',TRUE);
	}

	function index()
	{

		if($this->input->post('submit')){

			for($x=0; $x<1; $x++)
			{
				//configure upload parameters
				$config['upload_path'] = './assets/img/athletes/';
				$config['allowed_types'] = '*';
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
						$profile_photo_url = 'http://localhost/kaiac_canoe/assets/img/athletes/' . $this->upload->data('file_name');
					}
				}
			}
			$FirstName=$this->input->post('first_name');
			$LastName=$this->input->post('last_name');
			$Date_birth=$this->input->post('date_birth');
			$Gender=$this->input->post('gender');
			$SSN=$this->input->post('SSN');
			$Discipline=$this->input->post('Discipline');
			$this->add_ath_model->add_ath($this->id_user,$FirstName,$LastName,$Date_birth,$Gender,$SSN,$Discipline,$profile_photo_url);
		}

		$this->data['myteam']=$this->add_ath_model->get_ath();
		$this->data['myteam']=$this->add_ath_model->get_ath_by_user($this->id_user);
		$this->common_page('/coach/home/index', $this->data);
	}

}
