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
  <!-- Full width - height background -->
  <div class="background">
    <img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-contact">
  </div>

  <div class="container-fluid ">
      <div class="row">
         <div class="col-xs-12 hr-container">
            <hr class="first-hr">
          </div> <!-- END OF THE ROW -->
      </div> <!-- END OF THE CONTAINER-FLUID -->
  </div>

  
  <div class="container schedule-title">
  	<div class="row">
    		<div class="col-xs-2">
    			<a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
    		</div>
    		<div class="col-xs-8">
    			<h2 class="title-page">Profile info</h2>
    		</div>
    		<div class="col-xs-offset-1 col-xs-10">
    			<hr class="second-hr">
    		</div>
  	</div>
  </div>
  
  <div class="container">
    <div class="row">

      <div class="col-xs-offset-2 col-xs-8">
          <img src="<?php echo base_url(); ?>public/img/profile_image.jpg" class="img-rounded profile-picture" width="150px" height="150px" alt="Profile-picture">
          <div class="change-profile-ph">
            <span class="glyphicon glyphicon-picture"></span>
            <label class="browse">
                Change your profile picture <input type="file" style="display:none">
            </label>
          </div>
      </div> <!-- END OF INFO IMAGE -->

      <div class="col-xs-4">
        <h4 class="headers-input">Name*:</h4>
      </div>
      <div class="col-xs-8 Inputs-profile-main">
        <div class="input-group Inputs-profile-wrap">
            <input type="text" class="form-control Inputs-profile" placeholder="Amanda Nielsen">
            <span class="glyphicon glyphicon-edit"></span>
        </div>
      </div>
      
      <div class="col-xs-4">
        <h4 class="headers-input email">Email*:</h4>
      </div>
      <div class="col-xs-8 Inputs-profile-main">
        <div class="input-group Inputs-profile-wrap">
            <input type="text" class="form-control Inputs-profile" placeholder="amanda.nielsen@gmail.com">
            <span class="glyphicon glyphicon-edit"></span>
        </div>
      </div>

      <div class="col-xs-4">
        <h4 class="headers-input">Phone*:</h4>
      </div>
      <div class="col-xs-8 Inputs-profile-main">
        <div class="input-group Inputs-profile-wrap">
            <input type="text" class="form-control Inputs-profile" placeholder="00 45 52 77 99 78">
            <span class="glyphicon glyphicon-edit"></span>
        </div>
      </div>
      
      
    </div><!-- END OF ROW-->
  </div><!-- END OF CONTAINER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/main.js"></script>
</body>
</html>