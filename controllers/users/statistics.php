<?php

class statistics extends Kc_Controller
{
	function __construct()

	{

		parent::__construct();



	}

	function index()
	{


		$this->common_page('/users/statistics/index', $this->data);
	}



}
