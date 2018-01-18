<?php
	class UserController extends CI_Controller
	{
		public function userLogin()
		{
			

			$this->form_validation->set_rules('txtUsername', 'Username', 'required');
			$this->form_validation->set_rules('txtPassword', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				echo "Invalid username or password.";

			} else {
				
				// Get username
				$username = $this->input->post('txtUsername');
				// Get and encrypt the password
				$password = $this->input->post('txtPassword');

				// Login user
				$user_id = $this->UserModel->login($username, $password);
			
				if($user_id == TRUE){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					$this->load->view('userDashboard',$username);
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					//redirect('posts');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					echo "<h1>"."Invalid username or password."."</h1";
					$this->load->view('login');
					
				}	
			}
		}

		public function userRegister()
		{
			$this->form_validation->set_rules('txtUsername', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('txtEmail', 'Email', 'required|callback_check_email_exists');
			

			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('userRegister');
			}else
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
				
				$this->load->view('login');
				echo "<h1>"."User Sucessfully Registered, Now go to Login Page from 'Login Here' Option. "."</h1>";
			}
			
		}	
			// Log user out
		public function logout()
		{
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			$this->load->view('login');
		}

			// Check if username exists
		public function check_username_exists($username)
		{
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->UserModel->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email)
		{
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->UserModel->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}

		public function updateName()
		{

		}

		public function updateNumber()
		{

		}

		public function updatePassword($user_data)
		{
			if(!$this->session->userdata('logged_in')){
				redirect('login');
			}else{
				$hello = $this->UserModel->updatePassword($user_data);
				echo $hello;
			}
			// $this->getUserdata($uid, $data);
			// echo "<h1>"."Your Profile has been updated."."</h1>";
		}
	}
	
?>