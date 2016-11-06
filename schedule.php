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
  <script src="js/modernizr.custom.63321.js"></script>
</head>
<body>
  <!-- Full width - height background -->
  <div class="background">
    <img src="img/background-schedule.png" alt="background-sign-in">
  </div>

  <div class="container-fluid ">
      <div class="row">
         <div class="col-xs-12 hr-container">
         	<hr id="first-hr">
        
      </div> <!-- END OF THE ROW -->
  </div> <!-- END OF THE CONTAINER-FLUID -->

  
  <div class="container schedule-title">
  	<div class="row">
  		<div class="col-xs-2">
  			<a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
  		</div>
  		<div class="col-xs-9">
  			<h2 id="schedule-t">Schedule</h2>
  		</div>
  		<div class="col-xs-offset-1 col-xs-10">
  			<hr id="second-hr">
  		</div>
  	</div>
  </div>
  <div class="container">
  	<div class="row">
  		<div class="col-xs-12">
 			 <!-- CALENDAR -->
  			 <div class="custom-calendar-wrap">
                    <div id="custom-inner" class="custom-inner">
                        <div class="custom-header clearfix">
                            <nav>
                                <span id="custom-prev" class="custom-prev"></span>
                                <span id="custom-next" class="custom-next"></span>
                            </nav>
                            <h2 id="custom-month" class="custom-month"></h2>
                            <h3 id="custom-year" class="custom-year"></h3>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>
                    </div>
              </div>
  		</div>
  	</div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.calendario.js"></script>
<script type="text/javascript" src="js/data.js"></script>
</body>
</html>