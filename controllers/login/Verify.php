<?php


class Verify extends Kc_Controller {


	function __construct()

	{

		parent::__construct();

		$this->load->model('control_login','',TRUE);

	}



	function index()

	{



		//This method will have the credentials validation

		$this->load->library('form_validation');


		$this->form_validation->set_rules('username', 'Username', 'trim|required');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');



		if($this->form_validation->run() == FALSE)

		{

			//Field validation failed.  User redirected to login page

			$this->load->view('users/common/head', $this->data);

			$this->load->view('users/login/login_view', $this->data);

		}

		else

		{

				redirect('http://localhost/kaiac_canoe/home', 'refresh');

		}



	}



	function check_database($password)

	{

		//Field validation succeeded.  Validate against database

		$username = $this->input->post('username');


		//query the database

		$result = $this->control_login->verifica_login($username, $password);

		$this->load->helper('cookie');

		if($result)

		{

			$sess_array = array();

			foreach($result as $row)

			{



				$cookie = array(

					'name'   => 'u',

					'value'  => md5($row->ID_User.$row->Password.$row->Salt),

					'expire' => time()+86500,

					'domain' => '',

					'path'   => '/',

					'prefix' => 'control_',

				);

				set_cookie($cookie);


			}

			return TRUE;

		}

		else

		{

			$this->form_validation->set_message('check_database', 'Invalid username or password');

			return false;

		}

	}

}

?>
