<?php
	class UserModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function userRegister()
		{
			$data = array(
				'first_name ' => $this->input->post('txtFname'),
				'last_name' => $this->input->post('txtLname'),                
				'username' => $this->input->post('txtUsername'),
				'email' => $this->input->post('txtEmail'),      
				'password' => $this->input->post('txtPassword'),
				'contact_number' => $this->input->post('txtCNum'),
				'address' => $this->input->post('txtAddress'),
				'user_type_id'=>$this->input->post('user_type_id')
			);

			// Insert user
			return $this->db->insert('tblusers', $data);

		}

		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('tblusers');

			if($result->num_rows() == 1){
				return $result->row(1)->user_id;
			} else {
				return false;
			}
		}		
	}
?>
