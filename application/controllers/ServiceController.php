<?php 
	class ServiceController extends CI_Controller
	{
		public function selectService()
		{
			$this->load->model('ServiceModel');
			$data['records']=$this->ServiceModel->selectService();
			$this->load->view('registerService',$data);
		}

		public function insertService()
		{
			$uname = $this->input->post('cmbService');
			$sid =  $this->input->post('cmbService');
			$this->load->model('ServiceModel');
				$this->UserModel->userRegister($uname,$sid);
				
				$this->load->view('viewServices');
				
		}

	}
?>