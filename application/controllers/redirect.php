<?php

	class Redirect extends CI_Controller
	{
		public function homepage()
		{
			$this->load->view('homepage');
		}

		public function services()
		{
			$this->load->view('services');
		}

		public function help()
		{
			$this->load->view();
		}

		public function aboutUs()
		{
			$this->load->view('aboutUs');
		}

		public function contactUs()
		{
			$this->load->view('contactus');
		}

		public function lR()
		{
			$this->load->view('login');
		}

		
		public function registerHere()
		{ 
			$this->load->view('userRegister');
		}
		public function userDashboard()
		{

			$this->load->view('userDashboard');
		}

		public function adminDashboard()
		{

			$this->load->view('adminDashboard');
		}
		
	}

?>