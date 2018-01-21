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
			$this->ServiceModel->insertService($uname,$sid);
				
			$this->load->view('viewServices');
				
		}

		public function adminService()
		{
			$this->load->model("ServiceModel");
			$data['services']=$this->ServiceModel->selectService();
			$this->load->view('viewServices',$data);
		}
		
		public function getServiceDetails()
		{
			$sid=$this->input->get('sid');
			$this->load->model('ServiceModel');

			$getS=$this->ServiceModel->getServiceDetails($sid);
				$data['details']=$getS;

			$this->load->view('updateService',$data);

		}

		public function updateService()
		{
			$sid=$this->input->post('service_id');
			//$cost=$this->input->post('txtCost');

			$cost = array(
				'service_cost'=>$this->input->post('txtCost')
			);

			$this->load->model('ServiceModel');
			$this->ServiceModel->updateServiceDetail($sid,$cost);

			$this->adminService();

		}

		
	}
?>