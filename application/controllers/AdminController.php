<?php 
	
	class AdminController extends CI_Controller
	{
		
		public function selectUser()
		{
			$this->load->model('AdminModel');
			$data['details']=$this->AdminModel->selectUser();
			$this->load->view('viewUserAdmin',$data);
		}
		public function getUserdata()
		{
			$this->load->model('AdminModel');
			$this->load->library('session');
			$uname=$_SESSION['username'];
			$getData=$this->AdminModel->getUserData();
			$data['profile']=$getData;

			$this->load->view('viewUserAdmin',$data);
		}
	}
?>