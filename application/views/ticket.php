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
	  <!-- Full width - height background -->
  <div class="background">
    <img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-map">
  </div>
	 <div class="container-fluid">
	      <div class="row">
	     		<div class="col-xs-12 hr-container">
	         		<hr class="first-hr">
	    		</div>
	      </div> <!-- END OF THE ROW -->
	 </div> <!-- END OF THE CONTAINER-FLUID -->

	 <div class="container schedule-title">
	  	<div class="row">
	  		<div class="col-xs-2">
	  			<a href="dashboard"><span class="glyphicon glyphicon-home"></span></a>
	  		</div>
	  		<div class="col-xs-8">
	  			<h2 class="title-page">My ticket</h2>
	  		</div>
	  		<div class="col-xs-offset-1 col-xs-10">
	  			<hr class="second-hr">
	  		</div>
	  	</div>
	 </div>

	<!-- Container for main content -->
	<div class="container container-ticket">
		<div class="row row-ticket">
			<div class="col-xs-12 col-ticket">
				<!-- Needs <php echo urlencode($ourdata);?> 
				When database conection are ready. use something like 
				echo 'user_id : '.$_GET['user_id']; or echo $_SESSION["user_id"]; -->
				<img class="img-responsive" src="http://qrickit.com/api/qr?d='<?php echo 'test';?>'&fgdcolor=000000&bgdcolor=efefef&qrsize=350&t=p&e=m">
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/main.js"></script>
	</body>
</html>
