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


		public function UpdateUserDetail($uname,$data)
		{
			$this->db->where('username',$uname);
			$this->db->update('tblusers',$data);

			return "user updated";
		}
		public function getUserDataD($uname){

				$condition="username =". "'". $uname. "'";
				$this->db->select('*');
				$this->db->from('tblusers');
				$this->db->where($condition);

				$sql= $this->db->get();

				if ($sql->num_rows()== 1) {
					return $sql->result();
				}
				else{
					return false;
				}
		}

		public function getUserDetail($uid)
		{

			$condition = "user_id =" . "'" . $uid . "'";
				$this->db->select('*');
				$this->db->from('tblusers');
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

		public function deleteUser($uid)
		{
			$this->db->where('user_id',$uid);
			$this->db->delete('tblusers');

			return "deleted";
		}
	}
?>