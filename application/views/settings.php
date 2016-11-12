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
    	<img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-sign-in">
  	</div>

  <div class="container-fluid ">
      <div class="row">
     	<div class="col-xs-12 hr-container">
         	<hr id="first-hr">
    	</div></div>
      </div> <!-- END OF THE ROW -->
  </div> <!-- END OF THE CONTAINER-FLUID -->

  
  <div class="container schedule-title">
  	<div class="row">
  		<div class="col-xs-2">
  			<a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
  		</div>
  		<div class="col-xs-9">
  			<h2 id="schedule-t">SETTINGS</h2>
  		</div>
  		<div class="col-xs-offset-1 col-xs-10">
  			<hr id="second-hr">
  		</div>
  	</div>
  </div>
  <div class="container">
  	<div class="row">
  		<div class="col-xs-12">
  		
			<div class="setting">
				<div class="set_left">
					<div class="set_name">SOUND</div>
					<div class="set_desc">Notification sound</div>
				</div>
				<div class="set_right">
					<div class="toggle">
						<div class="onoffswitch">
						    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-notsound">
						    <label class="onoffswitch-label" for="myonoffswitch-notsound">
						        <span class="onoffswitch-inner"></span>
						        <span class="onoffswitch-switch"></span>
						    </label>
						</div>
					</div>
				</div>
			</div>

			<div class="setting">
				<div class="set_left">
					<div class="set_name">POP-UP</div>
					<div class="set_desc">Pop-ups on main screen</div>
				</div>
				<div class="set_right">
					<div class="toggle">
						<div class="onoffswitch">
						    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-notpopup" checked>
						    <label class="onoffswitch-label" for="myonoffswitch-notpopup">
						    	<span class="onoffswitch-inner"></span>
						        <span class="onoffswitch-switch"></span>
					        </label>
						</div>
					</div>
				</div>
			</div>

			<div class="setting">
				<div class="set_left">
					<div class="set_name">TEST</div>
					<div class="set_desc">Test notification</div>
				</div>
				<div class="set_right">
					<div class="toggle">
						<div class="onoffswitch">
						    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-nottest">
						    <label class="onoffswitch-label" for="myonoffswitch-nottest">
						    	<span class="onoffswitch-inner"></span>
						        <span class="onoffswitch-switch"></span>
					        </label>
						</div>
					</div>
				</div>
			</div>

			<div class="setting">
				<div class="set_left">
					<div class="set_name">Check</div>
					<div class="set_desc">Check notification</div>
				</div>
				<div class="set_right">
					<div class="toggle">
						<div class="onoffswitch">
						    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-notcheck">
						    <label class="onoffswitch-label" for="myonoffswitch-notcheck">
						    	<span class="onoffswitch-inner"></span>
						        <span class="onoffswitch-switch"></span>
					        </label>
						</div>
					</div>
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