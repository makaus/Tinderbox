<?php

class Notification_model extends CI_model
{
	private $notifications = [];

	public function __construct()
	{
		$this->load->database();

		// $this->session->userdata("user_teamID")
		$result = $this->db->query('SELECT n.`datetime`, n.content, n.supervisorID, s.name, s.image
			FROM notifications n, supervisor s
			WHERE n.teamID = 12
            GROUP BY n.NotificationID
			ORDER BY n.`datetime` DESC');

		$this->notifications = $result->result();
	}

	public function get_notifications()
	{
		return $this->notifications;

	}
}