<!DOCTYPE html>
<html>
<head>
  <title>Tinderbox Map</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/mystyle.css">
  </head>

  <body class="map-body">
 <!--  <div class="background">
      <img src="img/background-schedule.png" alt="background-sign-in">
    </div> -->

       <div class="container schedule-title">
        <div class="row">
          <div class="col-xs-2">
            <a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
          </div>
          <div class="col-xs-9">
            <h2 id="schedule-t">Map</h2>
          </div>
          <div class="col-xs-offset-1 col-xs-10">
            <hr id="second-hr">
          </div>
        </div>
     </div>
<!-- <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div> -->
    <div id="tb-map">
      <iframe src="https://www.google.com/maps/d/embed?mid=19LLUAOUsJY40jp_JCjU6wldOFWo&hl=en" width="640" height="480"></iframe>
    </div>
    
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANyDphZ75eS8XeiYgLTDSFQwT2-bpk-Ss&callback=initMap"
    async defer></script> -->
  </body>
</html>