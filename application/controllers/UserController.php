<?php
	class UserController extends CI_Controller
	{
		public function userLogin()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load('redirect/lR');				
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = $this->input->post('password');

				// Login user
				$user_id = $this->UserModel->login($username, $password);
				// $this->load->model('UserModel');
				// $user_id = $this->UserModel->login($username, $password);
			
				echo $user_id;
			}
		}

		public function userRegister()
		{
			$data = array(
						'first_name'  =>$this->input->post('txtFname'),
						'last_name'   =>$this->input->post('txtLname'),
						'username' 	  =>$this->input->post('txtUsername'),
						'email' 	  =>$this->input->post('txtEmail'),
						'password' 	  =>$this->input->post('txtPassword'),
						'contact_number' =>$this->input->post('txtCNum'),
						'address' =>$this->input->post('txtAddress'),
						'user_type_id'=>$this->input->post('user_type_id')
						);


				$this->load->model('UserModel');
				$this->UserModel->userRegister($data);
				
				$this->load->view('userRegister');
				echo "<h1>"."User Sucessfully Registered, Now go to Login Page from 'Login Here' Option. "."</h1>";

			}
		}
?>