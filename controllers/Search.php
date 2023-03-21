<?php

class Search extends Kc_Controller
{
	function __construct()

	{


		parent::__construct();

		$this->load->model('athletes_model','', TRUE);

	}

	function athlet($name="")

	{
		$this->data['athletes']=$this->athletes_model->get_athletes_by_name($name);

		$this->common_page('/users/athletes/index', $this->data);
	}

	function get_data($race=0)
	{
		$this->data['athletes']=$this->athletes_model->get_athlete_by($race[0],$race[1],$race[2]);

		echo '
		<select name="eth">';
		foreach ($this->data['athletes'] as $ath){
			echo '<option value="'.$ath['ID_Ath'].'">'.$ath['first_name'].'</option>';
		}
		echo '
		</select>
		';

	}
}
