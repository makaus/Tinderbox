<?php

class Personalsettings extends CI_Controller {

        public function index()
        {
        	if (!$_SESSION['logged_in'] === true) {
        		redirect('/');
        	}
            $this->load->model('user_model');
            $this->load->view('personalsettings');
        }

        public function update() {
        	$this->load->model('user_model');
        	$this->session->set_flashdata('flashSuccess', 'Your details have been successfully changed');
            $data = array
            (
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
			);

            // Validate
            if (empty($data['username']) || empty($data['email']) || empty($data['mobile'])) {
                $this->session->set_flashdata('flashSuccess', 'One or more fields are empty');
                redirect('personalsettings');
                return false;
            }

            if (!preg_match('/^[a-zA-Z0-9_-]{3,20}$/', $data['username'])) {
                $this->session->set_flashdata('flashSuccess', 'Use a valid name');
                redirect('personalsettings');
                return false;
            }

            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('flashSuccess', 'Use a valid email');
                redirect('personalsettings');
                return false;
            }

            if (!preg_match('/^\d+$/', $data['mobile'])) {
                $this->session->set_flashdata('flashSuccess', 'Use a valid phone number');
                redirect('personalsettings');
                return false;
            }

            // Sanitize
            $data['username'] = trim(strip_tags($data['username']));
            $data['email'] = trim(strip_tags($data['email']));
            $data['mobile'] = trim(strip_tags($data['mobile']));


            // Escape
            $data['username'] = $this->db->escape_str((string)$data['username']);
            $data['email'] = $this->db->escape_str((string)$data['email']);
            $data['mobile'] = $this->db->escape_str((string)$data['mobile']);


			$this->user_model->update_user($data);
				if($this->user_model->update_user($data) == true ) 
				{
					$_SESSION['email']		  = (string)$data['email'];
					$_SESSION['mobile']		  = (string)$data['mobile'];
					$_SESSION['username']     = (string)$data['username'];
					redirect('personalsettings');
				}

        }
}