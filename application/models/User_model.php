<?php

class User_model extends CI_Model {

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

