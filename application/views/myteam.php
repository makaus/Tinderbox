<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tinderbox</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/mystyle.css">
</head>
<body>
	<div class="background">
    	<img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-myteam">
  	</div></div>
	<div class="container myteam">
		<div class="row">
			<div class="col-xs-12 menu-container">
				<div class="menu">
					<div class="col-xs-2">
						<div class="table">
							<div class="cell">
								<a href="dashboard"><img src="<?php echo base_url(); ?>public/img/home-button.png" alt="" class="img-responsive center-block"></a>
							</div>
						</div>
					</div>
					<div class="col-xs-8 text-center">
						<div class="table">
							<div class="cell">
								<h1>My team</h1>
							</div>
						</div>
					</div>
					<div class="col-xs-2">
						<div class="table">
							<div class="cell">
								<img src="<?php echo base_url(); ?>public/img/search.png" alt="" class="img-responsive center-block">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 team">
				<?php 
				// Check if the data passed is a string (which is the error)
				if (is_string($r)) {
					// Echos the error
					echo '<h1>' . $r . '</h1>';
				} ?>

				<?php 
				// Checks if the data passed is an array (which is our team data)
				if(is_array($r)) {
					foreach ($r as $key => $value) { ?>
						<div class="team-member col-xs-4">
							<button class="button-title-modal" type="" data-toggle="modal" data-target="#team-modal">
							<img src="<?php echo base_url(); ?>public/img/<?php echo $value->image ?>" alt="Member" class="img-responsive center-block"></button>
							<div class="modal fade" id="team-modal">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									    <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									        <h4 class="modal-title">Lara Andersen</h4>
									    </div>
									    <div class="modal-body">
									        <button type="button" class="btn center-block button-modal">Send a message</button>
									    </div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							<h2><?php echo $value->username ?></h2>
							<h3>Volunteer</h3>
						</div>
				 	<?php
				 	}
				} ?>
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