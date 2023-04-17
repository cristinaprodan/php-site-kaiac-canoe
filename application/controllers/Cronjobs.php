<?php

class Cronjobs extends Kc_Controller
{
	function __construct()

	{


		parent::__construct();
		$this->load->model('add_ath_model', '' , TRUE);

	}

	function update_ath_category()
	{
		$this->data['myteam']=$this->add_ath_model->get_ath();

			//var_dump($this->data['myteam']);
		foreach($this->data['myteam']as $allath) {

			$today = date("Y-m-d");
			$date2 = date("Y-m-d", strtotime($allath['date_birth']));
			$age = abs(strtotime($today) - strtotime($date2));
			$years = floor($age / (365 * 60 * 60 * 24));
			echo "  " . $years;

			if ($years < 13) {
				$id_Category = '1';
			}
			if ($years > 12 and $years < 15) {
				$id_Category = '2';
			}
			if ($years > 14 and $years < 17) {
				$id_Category = '3';
			}
			if ($years > 15 and $years < 18) {
				$id_Category = '4';

			}
			if ($years > 17 and $years < 24) {
				$id_Category = '5';

			}
			if ($years > 23) {
				$id_Category = '6';

			}

			$this->add_ath_model->update_ath_category($id_Category, $allath['ID_Ath']);


		}

	}



}
