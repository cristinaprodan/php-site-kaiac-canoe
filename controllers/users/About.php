<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Kc_Controller

{
	function __construct()

	{


		parent::__construct();
		$this->load->model('about_model', '' , TRUE);

	}


	function index()

	{
		if($this->input->post('contact')=='Submit'){
			$FirstName=$this->input->post('firstname');
			$LastName=$this->input->post('lastname');
			$Country=$this->input->post('country');
			$Subject=$this->input->post('subject');
			$this->about_model->add_form($FirstName,$LastName,$Country,$Subject);


		}

		$this->common_page('/users/about/index', $this->data);


	}
}
