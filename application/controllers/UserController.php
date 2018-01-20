<?php
	class UserController extends CI_Controller
	{
		public function userLogin()
		{
			$username=$this->input->post('txtUsername');
			$password=$this->input->post('txtPassword');

			$this->load->model('UserModel');
			$ulogin=$this->UserModel->validateUserLogin($username,$password);

			$userdata=array(
			'user_id'=>$ulogin,
			'username'=>$username,
			'logged_in'=>true
			);
			$this->session->set_userdata($userdata);
 
				if ($ulogin) {

					if($ulogin==2){
						$this->load->library('session');
						$this->session->set_userdata('username',$username);
						$this->load->view('userDashboard');

					}

				else{
					$this->load->library('session');
					$this->session->set_userdata('username',$username);
					$this->load->view('adminDashboard');
				}
				
			}
			else{

				$this->load->view('login');
			echo "<h1>"."Invalid Username and Password" ."<h1>";
			
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

		public function updateUserProfile(){
		$uname=$this->input->post('txtUsername');

		$data = array(

				'first_name'=>$this->input->post('txtFname'),
				'last_name'=>$this->input->post('txtLname'),
				'email'=>$this->input->post('txtEmail'),
				'password'=>$this->input->post('txtPassword'),
				'contact_number'=>$this->input->post('txtCNum'),
				'address'=>$this->input->post('txtAddress')
			);

			$this->load->model('UserModel');
			$this->UserModel->UpdateUserDetail($uname,$data);

			$this->getUserdata();

			echo "<h1>". "Your Profile has been updated."."</h1>";				

		}

		public function getUserdata()
		{
			$this->load->model('UserModel');
			$this->load->library('session');
			$uname=$_SESSION['username'];
			$getData=$this->UserModel->getUserdataD($uname);
			$data['profile']=$getData;

			$this->load->view('userUpdates',$data);
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

		public function getUserDetails(){

		$uid=$this->input->get('user_id');
		$this->load->model('UserModel');

		$getS=$this->UserModel->getUserDetail($uid);
		/*$getrouteid=$this->UserModel->getRouteId();
		$getvid=$this->Vehicle_mgmt->getVId();*/

			// $data['rid']=$getrouteid;
			// $data['vid']=$getvid;
			$data['sdetails']=$getS;


		//$this->load->view('update_schedule',$data);
echo "helo";
	}

		public function fetchUserDetail()
		{
			$this->load->model('UserModel');
			$this->load->library('session');

			$data['fetch_data']=$this->UserModel->fetchUserDetail();
			$this->load->view("viewUserAdmin",$data);


		}

		public function deleteUserDe()
		{
			$this->load->model('UserModel');
			$getUser=$this->UserModel->selectUser();
			$data['details']=$getUser;
			

			$this->load->view('deleteUserAdmin',$data);
		}

		public function userDelete()
		{
			$vhid=$this->input->post('txtUsername');
			//$id=$this->input->get('id');
			$this->load->model('UserModel');
			$this->UserModel->deleteUser($vhid);

			
			$this->deleteUserDe();
			echo "<h1>"."User Deleted Successful"."</h1>";

			
		}

	}
	
?>