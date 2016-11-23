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
	    	<img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-notification">
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
		  			<h2 class="title-page">Notification</h2>
		  		</div>
		  		<div class="col-xs-offset-1 col-xs-10">
		  			<hr class="second-hr">
		  		</div>
		  	</div>
		 </div>
		 <div class="container">
		  	<div class="row">
		  		<div class="col-xs-12">

		  		<?php foreach($notifications as $row): ?>
				<div class="noti">
						<div class="pic">
							<img src="<?php echo base_url()."public/img/".$row->image; ?>">
						</div>
						<div class="info">
							<div class="time"><?php echo $row->datetime; ?></div>
							<div class="person"><?php echo $row->name; ?></div>
							<div class="text-message"><p><?php echo $row->content; ?></p></div>
						</div>
					</div>
			    <?php endforeach; ?>
<!-- 
			  		<div class="noti">
						<div class="pic">
							<img src="<?php echo base_url(); ?>public/img/boss.png">
						</div>
						<div class="info">
							<div class="time">2 minutes ago</div>
							<div class="person">SUPERVISOR</div>
							<div class="text-message"><p>Hello guys, Lara and Jonna will not come today because they are sick.<br />Hope things will work without them.</p></div>
						</div>
					</div>

					<div class="noti">
						<div class="pic">
							<img src="<?php echo base_url(); ?>public/img/Boss.png">
						</div>
						<div class="info">
							<div class="time">10 minutes ago</div>
							<div class="person">SUPERVISOR</div>
							<div class="text-message"><p>Guys, don't forget your lunch.<br />Between 12:00 and 15:00.</p></div>
						</div>
					</div> -->
					
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
