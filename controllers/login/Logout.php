<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logout extends Kc_Controller {



	function __construct()

	{

		parent::__construct();

	}



	function index()

	{



		$this->load->helper('cookie');

		$cookie = array(

			'name'   => 'u',

			'value'  => '',

			'expire' => '0',

			'domain' => '',

			'prefix' => 'control_'

		);

		delete_cookie($cookie);


		redirect('http://localhost/kaiac_canoe/home', 'refresh');


	}

}

?>
