<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tinderbox</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
	<div class="background-color">
		<div class="first-color"></div>
		<div class="second-color"></div>
		<div class="container dashboard-container">
			<div class="row">
				<div class="col-xs-12 user-profile">
					<h3 class="text-center">Amanda Nielsen</h3>
					<p class="text-center">Odense, Denmark</p>
					<img src="img/edit.png" alt="Edit" class="img-responsive center-block profile-edit">
					<img src="img/profile_image.jpg" alt="Profile Image" class="img-responsive center-block profile-image">
					<div class="breaker">
						<div class="fat-breaker"></div>
					</div>
				</div>
				<a href="settings.php"><div class="settings">
					<img src="img/settings.png" alt="Settings">
				</div></a>
				<div class="dashboard-tile-wrapper">
					<div class="col-xs-6 dashboard-tile-container">
						<a href="myteam.php"><div class="dashboard-tile">
							<img src="img/team.png" alt="Team" class="img-responsive center-block">
							<h2>My team</h2>
						</div></a>
						<div class="dashboard-tile">
							<img src="img/map.png" alt="Map" class="img-responsive center-block">
							<h2>Map</h2>
						</div>
						<div class="dashboard-tile">
							<img src="img/ticket.png" alt="Ticket" class="img-responsive center-block">
							<h2>My ticket</h2>
						</div>
					</div>
					<div class="col-xs-6 dashboard-tile-container">
						<a href="schedule.php"><div class="dashboard-tile">
							<img src="img/calendar.png" alt="Schedule" class="img-responsive center-block">
							<h2>Schedule</h2>
						</div></a>
						<a href="notification.php"><div class="dashboard-tile">
							<img src="img/notification.png" alt="Notification" class="img-responsive center-block">
							<h2>Notification</h2>
						</div></a>
						<a href="contact.php"><div class="dashboard-tile">
							<img src="img/phone-call.png" alt="Info/Contact" class="img-responsive center-block">
							<h2>Info/Contact</h2>
						</div></a>
					</div>
				</div>
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block button-submit">Log out</button>
				</div>
				
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>