<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller{

	public  function __construct(){
		parent:: __construct();
	}

	public function index(){
		$this->load->view('index');
	}

	public function login(){
	
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');

			if($this->form_validation->run() == TRUE) {

				$username=$_POST['username'];
				$password=md5($_POST['password']);
				//Check user in database

				 $this->db->select('*');
				 $this->db->from('users');
				 $this->db->where(array('username'=> $username,'password'=> $password));
				 $query=$this->db->get();
				 $user = $query->row();
				//if user exists
				if($user->email){
					//temporary message
					$this->session->set_flashdata("Success", "You are logged in");

					//set session variables

					$_SESSION['user_logged'] = TRUE;
					$_SESSION['username'] = $user->username;

					//redirect to profile page
					redirect("user/profile","refresh");
				}else{
					$this->session->set_flashdata("error", "No such account exist in database");
					redirect("user/login","refresh");

				}
			}
		
		$this->load->view('login');

	}

	public function register(){

		 if(isset($_POST['register'])){
		 
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('fname','First name','required');
			$this->form_validation->set_rules('lname','Last name','required');
			$this->form_validation->set_rules('dob','Date of birth','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password2','Password','required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone','Phone','required');
			//if form validation true
			if($this->form_validation->run() == TRUE) {
				//Add user in database
				$data = array(
					'username'=>$_POST['username'],
					'fname'=>$_POST['fname'],
					'lname'=>$_POST['lname'],
					'email'=>$_POST['email'],
					'password'=>md5($_POST['password']),
					'dob'=>$_POST['dob'],
					'phone'=>$_POST['phone']
				);
				$this->db->insert('users',$data);

				$this->session->set_flashdata("success", "Your account has been registered. You can login now");
				redirect("user/register","refresh");
			}
		}

		//load  view

		$this->load->view('register');
	}


	public function profile(){
		$this->load->model('User_model');
		$records= $this->User_model->getRecords();
		$this->load->view('profile',['records'=>$records]);
	}

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("user/login","refresh");
	}

	public function create(){

			if(isset($_POST['create'])){
 	
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('fname','First name','required');
			$this->form_validation->set_rules('lname','Last name','required');
			$this->form_validation->set_rules('dob','Date of birth','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('phone','Phone','required');
			//if form validation true
			if($this->form_validation->run()==TRUE) {
				$data = array(
					'username'=>$_POST['username'],
					'fname'=>$_POST['fname'],
					'lname'=>$_POST['lname'],
					'email'=>$_POST['email'],
					'password'=>md5($_POST['password']),
					'dob'=>$_POST['dob'],
					'phone'=>$_POST['phone']
				);
				$this->db->insert('users',$data);
				redirect("user/profile","refresh");
				// $this->session->set_flashdata("success", "Your account has been registered.");
			}
		}
		$this->load->view('create'); 
	}
	
		public function edit($id){

			$this->load->model('User_model');

			if(isset($_POST['update'])){
				if($this->User_model->updateUser($id)){
					$this->session->set_flashdata("success", "User updated successfully.");
					redirect('user/profile','refresh');
				}else{
					$this->session->set_flashdata("error", "Failed to update... error!!.");
					redirect('user/edit'.$id,'refresh');
				}
			}
			$data['user'] = $this->User_model->getRecord($id);
			$this->load->view('update', $data);

		}

		public function delete( $id ){
			$this->load->model("User_model");
			$this->User_model->deleteUser($id);
			$this->session->set_flashdata("success", "Deleted successfully.");
			redirect('user/profile','refresh');

		}
}

?>