<?php

class Myteam extends CI_Controller {

    public function index()
    {
        	if (!$_SESSION['logged_in'] === true) {
        		redirect('/');
        	}
    	// Getting the teamid from the session
    	$teamid = $this->session->userdata('teamid');

    	// Validate - Checking if teamid is a number
		if (!preg_match('/^[0-9]+$/', $teamid)) {
			// If not: runs the view with the data containing an error
			$data['r'] = 'Error';
			$this->load->view('myteam', $data);
			return false;
		}

		// Sanitize - Stripping HTML tags and trims
		$teamid = trim(strip_tags($teamid));

		// Escape - Makes sure teamid is integer
		$safe_teamid = (int)$teamid;

		//Loads the model
		$this->load->model('user_model');

		// Runs the method in the model with the safe teamid
		$result = $this->user_model->get_users($safe_teamid);

		// Preps the result to be passed to the view
		$data['r'] = $result;

		// Runs the view with the data passed on.
        $this->load->view('myteam', $data);
    }
}