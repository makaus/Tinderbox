<?php

class Notification extends CI_Controller {

        public function index()
        {
        	$this->load->helper('date');
			$this->load->model('notification_model');

			$notifications = $this->notification_model->get_notifications();
			
			foreach ($notifications as $value)
			{
					$value->datetime = self::calculate_time_span($value->datetime, 'Y-m-d H:i:s');
			}
			
	        $this->load->view('notification', [
	            'notifications' => $notifications
	        ]);

        }

        public function calculate_time_span($date)
        {
	    	$seconds  = strtotime(date('Y-m-d H:i:s')) - strtotime($date);

	        $months = floor($seconds / (3600*24*30));
	        $day = floor($seconds / (3600*24));
	        $hours = floor($seconds / 3600);
	        $mins = floor(($seconds - ($hours*3600)) / 60);
	        $secs = floor($seconds % 60);

	        if($seconds < 60)
	            $time = $secs." seconds ago";
	        else if($seconds < 60*60 )
	        	if ($mins == 1) {
	            	$time = $mins." minute ago";
	        	}
	        	else
	        	{
	            	$time = $mins." minutes ago";
	        	}
	        else if($seconds < 24*60*60)
				if ($hours == 1) {
	            	$time = $hours." hour ago";
	        	}
	        	else
	        	{
	            	$time = $hours." hours ago";
	        	}

	        else if($seconds < 24*60*60*30)
				if ($day == 1) {
	            	$time = $day." day ago";
	        	}
	        	else
	        	{
	            	$time = $day." days ago";
	        	}

	        else
	        {
				if ($months == 1) {
	            	$time = $months." month ago";
	        	}
	        	else
	        	{
	            	$time = $months." months ago";
	        	}
			}

	        return $time;
		}
}