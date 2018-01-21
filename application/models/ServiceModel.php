<?php 
	class ServiceModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function selectService()
		{
			$this->db->select('*');
			$this->db->from('tblservices');
			
			$query=$this->db->get();
			return $query->result();		
		}

		public function insertService($uname,$sid)
		{	
			
			$this->db->set('service_id',$sid);
			$this->db->where('username',$uname);
			$this->db->update('tblusers');
		}
		
		public function updateServiceDetail($sid,$cost)
		{
			$this->db->where('service_id',$sid);
			$this->db->update('tblservices',$cost);

			return "user updated";
		}

		public function getServiceDetails($sid){

				$condition="service_id =". "'". $sid. "'";
				$this->db->select('*');
				$this->db->from('tblservices');
				$this->db->where($condition);

				$sql= $this->db->get();

				if ($sql->num_rows()== 1) {
					return $sql->result();
				}
				else{
					return false;
				}
		}

		
	}
?>