<?php

class Personalsettings extends CI_Controller {

        public function index()
        {
            $this->load->model('user_model');
            $this->load->view('personalsettings');
        }

        public function update_button() {
        	$this->load->model('user_model');
        	$this->session->set_flashdata('flashSuccess', 'Your details have been successfully changed');
            $data = array
            (
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
			);
			$this->user_model->update_user($data);
				if($this->user_model->update_user($data) == true ) 
				{
					$_SESSION['email']		  = (string)$data['email'];
					$_SESSION['mobile']		  = (string)$data['mobile'];
					$_SESSION['username']     = (string)$data['username'];
					$this->load->view('personalsettings');
				}

        }
}