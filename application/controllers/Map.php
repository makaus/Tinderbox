<?php

class Map extends CI_controller {

	public function index() {
		//Google maps library
		$this->load->library('googlemaps');

		// Map Options
		$config = array();
			// $config['map_height'] = '100%'; ##REMINDER##
			$config['center'] = '55.382136, 10.341608';
			$config['zoom'] = '16';
			$config['class'] = 'map_wrap';
			$config['disableDefaultUI'] = true; //Removes defult zoom options
			$config['apiKey'] = 'AIzaSyAlAYGcLXj0Zob6yoTnU0iDcH9_mDf5CYo';
			$this->googlemaps->initialize($config);
		// $disableDefaultUI = true;

		// Tinderbox Map Overlay
		$groundOverlay = array();
			$groundOverlay['image'] = base_url ('/public/img/tb-map-overlay.svg');
			$groundOverlay['positionSW'] = '55.378357, 10.336244';
			$groundOverlay['positionNE'] = '55.385963, 10.346116';
			$this->googlemaps->add_ground_overlay($groundOverlay);

		// MarkersNE
			//Tinderbox 
			$marker = array();
			$marker['position'] = '55.380779, 10.345300';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Tinderbox</div>';
			$this->googlemaps->add_marker($marker);

			//Restroom  
			$marker = array();
			$marker['position'] = '55.384603, 10.345526';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';	
			$this->googlemaps->add_marker($marker);

			//Water 
			$marker = array();
			$marker['position'] = '55.384695, 10.345311';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			//Bar1
			$marker = array();
			$marker['position'] = '55.384963, 10.345118';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Bar2 
			$marker = array();
			$marker['position'] = '55.384378, 10.344667';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Recykling
			$marker = array();
			$marker['position'] = '55.384317, 10.344581';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Recykling</div>';
			$this->googlemaps->add_marker($marker);

			//MAGICBOX
			$marker = array();
			$marker['position'] = '55.384498, 10.345077';
			$marker['infowindow_content'] = '<div class="marker-infowindow">MAGICBOX</div>';
			$this->googlemaps->add_marker($marker);

			//Coffee
			$marker = array();
			$marker['position'] = '55.384973, 10.344562';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Coffee</div>';
			$this->googlemaps->add_marker($marker);

			//Resturant
			$marker = array();
			$marker['position'] = '55.384985, 10.344326';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Resturant</div>';
			$this->googlemaps->add_marker($marker);

			//Resturant
			$marker = array();
			$marker['position'] = '55.385022, 10.344175';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Resturant</div>';
			$this->googlemaps->add_marker($marker);

			//Bar4
			$marker = array();
			$marker['position'] = '55.384754, 10.344240';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Bar5
			$marker = array();
			$marker['position'] = '55.384120, 10.343789';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

	//Marker Middle
			//Bar5
			$marker = array();
			$marker['position'] = '55.382669, 10.344175';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

		// Create Map
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('map', $data);
	}
}
