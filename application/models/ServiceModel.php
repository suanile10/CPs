<?php 
	class ServiceModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getServices($sid)
		{
			$condition = "service_id"='1';
			$this->db->select('service_cost');
			$this->db->from('tblservices');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1)
			{
				return $sql->result();
			} 
			else
			{
				return false;
			}
		}

		// public function fetchServices()
		// {
		// 	return $this->db->get('tblservices')
		// }

		// public function 

	}
?>