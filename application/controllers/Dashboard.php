<?php

class Dashboard extends CI_Controller {

        public function index()
        {
                $this->load->view('dashboard');

	            // Sets an variable with a array to be passed into the session
	            $userdata   = array(
					'username' => 'johndoe',
					'email' => 'whatever',
					'teamid' => 1
				);

	            // Puts the array into session
				$this->session->set_userdata($userdata);
        }
}