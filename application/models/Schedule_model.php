<?php

class Schedule_model extends CI_Model {
	private $schedules = [];

	public function __construct() {


		// Set this with session
		$teamid = $_SESSION['teamid'];

		$result = $this->db->query(sprintf('SELECT `date`, starttime, task, location 
			FROM schedule
			WHERE teamid = "%d" '
			, $teamid));

		$this->schedules = $result->result();
	}

	public function get_schedule() {
		return $this->schedules;
	}
}