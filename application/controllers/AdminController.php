<?php 
	
	class AdminController extends CI_Controller
	{
		
		public function selectUser()
		{
			$this->load->model('AdminModel');
			$data['details']=$this->AdminModel->selectUser();
			$this->load->view('viewUserAdmin',$data);
		}

		public function getUserdata()
		{
			$this->load->model('AdminModel');
			$this->load->library('session');
			$uname=$_SESSION['username'];
			$getData=$this->AdminModel->getUserdataD($uname);
			$data['profile']=$getData;

			$this->load->view('updateUserAdmin',$data);
		}

		public function getUserDetails()
		{
			$uid=$this->input->get('uid');
			$this->load->model('AdminModel');

			$getS=$this->AdminModel->getUserDetail($uid);
				$data['updetails']=$getS;

			$this->load->view('updateUserAdmin',$data);

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

			$this->selectUser();

			echo "<h1>". "Your Profile has been updated."."</h1>";				
		}
		public function deleteUser()
		{
			$uid=$this->input->get('uid');
			$this->load->model('AdminModel');

			$this->AdminModel->deleteUser($uid);
			$this->selectUser();

		}

	}
?>