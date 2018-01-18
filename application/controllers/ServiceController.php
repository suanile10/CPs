<?php 
	class ServiceController extends CI_Controller
	{
		public function getServices()
		{
			$this->load->model('ServiceModel');
			
			$data['sid']=$getserviceid;
			$this->load->view('registerService',$data);
			$getserviceid=$this->ServiceModel->getServiceID();

		}
	}
?>