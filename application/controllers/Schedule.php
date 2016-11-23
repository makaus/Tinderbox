<?php

class Schedule extends CI_Controller {
	public function index() {
		$this->load->view('schedule');

	}

	public function getSchedule() {

		$this->load->model('schedule_model');

		$this->output
			->set_header('HTTP/1.1 200 OK')
			->set_header('Content-Type: application/json')
			->set_output(json_encode($this->schedule_model->get_schedule()))
			->_display();

			die();
	}
}