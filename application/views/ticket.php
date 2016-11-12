<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/mystyle.css">
  </head>
	<body>
	<div class="background">
    	<img src="img/background-schedule.png" alt="background-sign-in">
  	</div>
	 <div class="container-fluid">
	      <div class="row">
	     		<div class="col-xs-12 hr-container">
	         		<hr id="first-hr">
	    		</div>
	    	</div>
	      </div> <!-- END OF THE ROW -->
	 </div> <!-- END OF THE CONTAINER-FLUID -->
	 <div class="container schedule-title">
	  	<div class="row">
	  		<div class="col-xs-2">
	  			<a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
	  		</div>
	  		<div class="col-xs-9">
	  			<h2 id="schedule-t">My ticket</h2>
	  		</div>
	  		<div class="col-xs-offset-1 col-xs-10">
	  			<hr id="second-hr">
	  		</div>
	  	</div>
	 </div>

		 <!-- Container for main content -->
		 <div class="container">
		  	<div class="row">
		  		<div class="col-xs-12">
		  		<!-- Content goes bellow -->
		  			<div class="ticket-wrap">
		  				<div class="ticket">
		  					<img src="img/My_PDF_Code.png" alt="Ticket">
				<!-- Content goes above -->
					
					</div> 
				<!-- End of ticket -->	
				
		  		</div> <!-- End of ticket wrap-->
		  		<div class="col-xs-12 ticket-text">
	  			<h2 id="schedule-t">Let's Download <br> your Ticket!</h2>
	  		</div>
			</div>	<!-- End of ticket xs-col-->	
		</div> <!--End of row  -->
	</div> <!-- End of ticket container-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/main.js"></script>
	</body>
</html>
