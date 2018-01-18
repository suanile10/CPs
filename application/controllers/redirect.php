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
		
		public function userUpdate()
		{
			$this->load->view('userUpdate');
		}

		public function userUpdateCancel()
		{
			$this->load->view('userDashboard');
		}

		public function updateName()
		{
			$this->load->view('updateName');
		}

		public function updatePassword()
		{
			$this->load->view('updatePassword');
		}

		public function updateNumber()
		{
			$this->load->view('updateNumber');
		}

		public function deleteUserAdmin()
		{
			$this->load->view('deleteUserAdmin');
		}
		
		public function registerService()
		{
			$this->load->view('registerService');
		}

		public function notRegisterService()
		{
			$this->load->view('notRegisterService');
		}

		public function registerContactus()
		{
			$this->load->view('registerContactus');
		}

		public function notregisterContactus()
		{
			$this->load->view('notregisterContactus');
		}

		public function updateHealth()
		{
			$this->load->view('updateHealth');
		}

		public function updateTraining()
		{
			$this->load->view('updateTraining');
		}

		public function updateUserAdmin()
		{
			$this->load->view('updateUserAdmin');
		}

		public function viewServices()
		{
			$this->load->view('viewServices');
		}

		public function updateWalking()
		{
			$this->load->view('updateWalking');
		}

		public function viewUserAdmin()
		{
			$this->load->view('viewUserAdmin');
		}

		public function userViewServices()
		{
			$this->load->view('userViewServices');
		}

		public function userUpdates()
		{
			$this->load->view('userUpdates');
		}









	}

?>