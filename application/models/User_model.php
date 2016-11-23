<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create_user($username, $email, $password, $mobile, $department, $period) {
		
		$data = array(
			'username'   => $username,
			'email'      => $email,
			'password'   => $this->hash_password($password),
			'created_at' => date('Y-m-j H:i:s'),
			'mobile' => $mobile,
			'department' => $department,
			'period' => $period,
		);
		return $this->db->insert('users', $data);
	}
	

	public function resolve_user_login($username, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		return $this->verify_password_hash($password, $hash);
		
	}
	
	
	public function get_user_id_from_username($username) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);
		return $this->db->get()->row('id');
	}
	
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * hash_password function.
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
	/*
	* Dashboard
	*/
	public function get_users($teamid = null) 
	{
		// Validate
		if (!preg_match('/^[0-9]+$/', $teamid)) {
			return false;
		}

		// Sanitize
		$teamid = trim(strip_tags($teamid));

		// Escape
		$safe_teamid = $this->db->escape_str((int)$teamid);

		$query = sprintf('SELECT * FROM users 
			WHERE teamid = "%d" '
			, $safe_teamid);

		$result = $this->db->query($query);
		return $result->result();
	}  

}
