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
	
	}
?>