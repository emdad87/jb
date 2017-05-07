<?php
	class Test_controller extends CI_Controller 
	{

		public function index()
		{
			// echo "Public Function - Default";
			$this->load->view('test_view');
		}

		public function hello()
		{
			echo "Public Function - Hello!";
		}
	}
?>