<?php

class Map extends CI_controller {

	public function index() {
		//Google maps library
		$this->load->library('googlemaps');

		// Map Options
		$config = array();
			$config['map_height'] = '100vh'; ##REMINDER##
			$config['center'] = '55.382136, 10.341608';
			$config['zoom'] = '16';
			$config['class'] = 'map_wrap';
			$config['disableDefaultUI'] = true; //Removes defult zoom options
			$config['apiKey'] = 'AIzaSyAlAYGcLXj0Zob6yoTnU0iDcH9_mDf5CYo';
			$config['styles'] = array(
				  array("name"=>"Black Roads", "definition"=>array(
				    array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-90"))),
				    array("featureType"=>"road.arterial", "elementType"=>"geometry", "stylers"=>array(array("hue"=>"#000000")))
				  ))
				);
			$config['stylesAsMapTypes'] = true;
			$config['stylesAsMapTypesDefault'] = "Black Roads"; 
			$this->googlemaps->initialize($config);
			
		// $disableDefaultUI = true;

		// Tinderbox Map Overlay
		$groundOverlay = array();
			$groundOverlay['image'] = base_url ('/public/img/tb-map-overlay.svg');
			$groundOverlay['positionSW'] = '55.378357, 10.336244';
			$groundOverlay['positionNE'] = '55.385963, 10.346116';
			$this->googlemaps->add_ground_overlay($groundOverlay);

####### SVG Not rendering correctly. will use .png for now!!!#######
		// MarkersNE
// TESTING
$marker = array();
			$marker['position'] = '55.382660, 10.344179';
			$marker['draggable'] = true;
			$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

			$this->googlemaps->add_marker($marker);

			//Tinderbox 
			$marker = array();
			$marker['position'] = '55.380779, 10.345300';
			$marker['icon'] = base_url ('/public/img/tinderbox.png');
			$marker['icon_scaledSize'] = '35, 40';	
			$marker['infowindow_content'] = '<div class="marker-infowindow">Tinderbox festival</div>';
			$this->googlemaps->add_marker($marker);

			//Restroom  
			$marker = array();
			$marker['position'] = '55.384603, 10.345526';
			$marker['icon'] = base_url ('/public/img/mapIcon/wc-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';	
			$this->googlemaps->add_marker($marker);

			//Water 
			$marker = array();
			$marker['position'] = '55.384695, 10.345311';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			//Bar1
			$marker = array();
			$marker['position'] = '55.384963, 10.345118';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Bar2 
			$marker = array();
			$marker['position'] = '55.384378, 10.344667';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Recykling
			$marker = array();
			$marker['position'] = '55.384317, 10.344581';
			$marker['icon'] = base_url ('/public/img/mapIcon/rec-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Recykling</div>';
			$this->googlemaps->add_marker($marker);

			//MAGICBOX
			$marker = array();
			$marker['position'] = '55.384498, 10.345077';
			$marker['icon'] = base_url ('/public/img/mapIcon/volt-map-icon.png');
			$marker['icon_scaledSize'] = '40, 40';
			$marker['infowindow_content'] = '<div class="marker-infowindow">MAGICBOX</div>';
			$this->googlemaps->add_marker($marker);

			//Coffee
			$marker = array();
			$marker['position'] = '55.384973, 10.344562';
			$marker['icon'] = base_url ('/public/img/mapIcon/coffee-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Coffee</div>';
			$this->googlemaps->add_marker($marker);

			//Resturant
			$marker = array();
			$marker['position'] = '55.384985, 10.344326';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Resturant</div>';
			$this->googlemaps->add_marker($marker);

			//Resturant
			$marker = array();
			$marker['position'] = '55.385022, 10.344175';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Resturant</div>';
			$this->googlemaps->add_marker($marker);

			//Bar4
			$marker = array();
			$marker['position'] = '55.384754, 10.344240';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			//Bar5
			$marker = array();
			$marker['position'] = '55.384120, 10.343789';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

	//Marker Middle
			//WC
			$marker = array();
			$marker['position'] = '55.382669, 10.344175';
			$marker['icon'] = base_url ('/public/img/mapIcon/wc-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';
			$this->googlemaps->add_marker($marker);

			// Bar
			$marker = array();
			$marker['position'] = '55.382440, 10.344372';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			// RESTROOM
			$marker = array();
			$marker['position'] = '55.38238572517971, 10.343760575393617';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';
			$this->googlemaps->add_marker($marker);

			// Service
			$marker = array();
			$marker['position'] = '55.38239791521212, 10.343630488256395';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38240553398046, 10.343563433031022';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38240020084278, 10.34338640723604';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38239943896589, 10.343277777770936';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38239791521209, 10.343153055051744';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38239791521209, 10.343077953199327';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38239182019638, 10.342930431703508';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38238343954823, 10.342789615730226';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38237963016211, 10.342385943273484';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38237353514354, 10.342284019330918';
			$marker['icon'] = base_url ('/public/img/mapIcon/battery-map-icon.png');
			$marker['icon_scaledSize'] = '40, 40';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Volt phone charging</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38237353514354, 10.342144544462144';
			$marker['icon'] = base_url ('/public/img/mapIcon/smoke-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Smoking area</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38235829759308, 10.342047984937608';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Service stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.382318679934365, 10.34176367078203';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.382266872166916, 10.341667111257493';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38223944449787, 10.341624195913255';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38219982672008, 10.341581280569017';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.382166303954044, 10.341527636388719';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38205049781643, 10.341457898954332';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38196821430204, 10.341431076864183';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38193773888292, 10.341414983610093';
			$marker['icon'] = base_url ('/public/img/mapIcon/coffee-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Coffee</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38187983552186, 10.341431076864183';
			$marker['icon'] = base_url ('/public/img/mapIcon/smoke-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Smoking area</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38178840898973, 10.341377432683885';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38170307736906, 10.341468627790391';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381651268795245, 10.341533000806749';
			$marker['icon'] = base_url ('/public/img/mapIcon/service-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Food stalls</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381504985397044, 10.342144544462144';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38151412812529, 10.342192824224412';
			$marker['icon'] = base_url ('/public/img/mapIcon/wc-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381913358530696, 10.342632706502854';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381913358530696, 10.342632706502854';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);

			// Merchandise

			$marker = array();
			$marker['position'] = '55.38122765496952, 10.342933113912522';
			$marker['icon'] = base_url ('/public/img/mapIcon/merec-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Merchandise</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38103383522196, 10.343838421274995';
			$marker['icon'] = base_url ('/public/img/mapIcon/info-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Information</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38100031146767, 10.343940345217561';
			$marker['icon'] = base_url ('/public/img/mapIcon/ticket-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Ticket</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381164882352415, 10.344315854479646';
			$marker['icon'] = base_url ('/public/img/mapIcon/hanger-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Cloakroom</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.382792268680674, 10.340550033022737';
			$marker['icon'] = base_url ('/public/img/mapIcon/volt-map-icon.png');
			$marker['icon_scaledSize'] = '40, 40';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Red stage</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.3804273556384, 10.340185252596712';
			$marker['icon'] = base_url ('/public/img/mapIcon/volt-map-icon.png');
			$marker['icon_scaledSize'] = '40, 40';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Blue stage</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381049073282696, 10.34447678702054';
			$marker['icon'] = base_url ('/public/img/mapIcon/exit-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Entrance/Exit</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.3826825593477, 10.33947714941678';
			$marker['icon'] = base_url ('/public/img/mapIcon/firstAid-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">First aid/Exit</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38264598950241, 10.341322509219026';
			$marker['icon'] = base_url ('/public/img/mapIcon/wc-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom/Exit</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.381824979627936, 10.33817085180658';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38281846902927, 10.339715804199159';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.380565390528645, 10.339859178741335';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			$marker = array();
			$marker['position'] = '55.38033681620615, 10.341076901634096';
			$marker['icon'] = base_url ('/public/img/mapIcon/water-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Water</div>';
			$this->googlemaps->add_marker($marker);

			//Coffee
			$marker = array();
			$marker['position'] = '55.381124293584875, 10.339491468826054';
			$marker['icon'] = base_url ('/public/img/mapIcon/coffee-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Coffee</div>';
			$this->googlemaps->add_marker($marker);

			//Restroom  
			$marker = array();
			$marker['position'] = '55.38076348720636, 10.339671424110293';
			$marker['icon'] = base_url ('/public/img/mapIcon/wc-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Restroom</div>';	
			$this->googlemaps->add_marker($marker);

			//Bar
			$marker = array();
			$marker['position'] = '55.38103777327609, 10.338555625160097';
			$marker['icon'] = base_url ('/public/img/mapIcon/beer-map-icon.png');
			$marker['icon_scaledSize'] = '30, 30';
			$marker['infowindow_content'] = '<div class="marker-infowindow">Bar</div>';
			$this->googlemaps->add_marker($marker);




// Not sure what this is
// $config['center'] = '37.4419, -122.1419';
// $config['zoom'] = 'auto';
// $this->googlemaps->initialize($config);

			

			

		// Create Map
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('map', $data);
	}
}
