<?php

class Notification_model extends CI_model
{
	private $notifications = [];

	public function __construct()
	{
		$this->load->database();
		$teamid = $_SESSION['teamid'];
		$result = $this->db->query(sprintf('SELECT DISTINCT notifications.content, notifications.`datetime`, supervisor.name, supervisor.image
                FROM notifications
                JOIN supervisor ON notifications.SupervisorID = supervisor.SupervisorID
                JOIN teamsupervisor ON supervisor.SupervisorID = teamsupervisor.supervisorid
                WHERE notifications.TeamID = "%d"
                ORDER BY notifications.`datetime` DESC', $teamid));


		$this->notifications = $result->result();
	}

	public function get_notifications()
	{
		return $this->notifications;

	}
}