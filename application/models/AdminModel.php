<?php
	class AdminModel extends CI_Model
	{
		function __construct()
{
    parent::__construct();
}

	public function selectUser()
		{
			$this->db->select('*');
			$this->db->from('tblusers');
			
			$query=$this->db->get();
			return $query->result();		
		}

		public function getUserData()
		{

			$this->db->select('*');
			$this->db->from('tblusers');
			
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
	}
?>