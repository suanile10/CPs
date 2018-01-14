<?php

	class Redirect extends CI_Controller
	{
		public function lR()
		{echo "sss";
			
			/*$this->load->view('login');*/
		}

		public function contactUs()
		{
			$this->load->view('contactus');
		}
	}

?>