<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));

		$this->load->model('user_model');
		
	}
	
	public function index() {
		
		
		
	}
	
	public function register() {
		
		// create the data object
		$data = new stdClass();
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile Number ', 'trim|numeric|required|regex_match[/^[0-9]{8}$/]'); //{8} for 8 digits number 
		$this->form_validation->set_rules('department','Choose Department','required');
		$this->form_validation->set_rules('period','Choose Period','required');
		if ($this->form_validation->run() === false) 
		{
			$this->load->view('sign-up', $data);
		} 
		else 
		{
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$mobile = $this->input->post('mobile');
			$department = $this->input->post('department');
			$period = $this->input->post('period');
			if ($this->user_model->create_user($username, $email, $password, $mobile, $department, $period)) {
				
				// user creation ok
				// keep the session
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				$_SESSION['teamid']		  = (int)$user->teamid;
				$_SESSION['image']		  = (string)$user->image;
				$_SESSION['email']		  = (string)$user->email;
				$_SESSION['mobile']		  = (string)$user->mobile;
				$this->load->view('dashboard', $data);
			} 
			else 
			{
				
				$data->error = 'There was a problem creating your new account. Please try again.';
				$this->load->view('sign-up', $data);
			}
		}
		
	}
		
	public function login() {
		// create the data object
		$data = new stdClass();
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == false) 
		{
			
			$this->load->view('index');
			
		} else 

		{
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				$_SESSION['teamid']		  = (int)$user->teamid;
				$_SESSION['image']		  = (string)$user->image;
				$_SESSION['email']		  = (string)$user->email;
				$_SESSION['mobile']		  = (string)$user->mobile;		
				$this->load->view('dashboard', $data);
				
			} 
			else 
			{
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('index', $data);
				
			}
			
		}
		
	}
	
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			redirect('/');
		}
	}
	
}
