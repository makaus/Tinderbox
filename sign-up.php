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
  <!-- Full width - height background -->
  <div class="background">
    <img src="img/bg-sign-in.png" alt="background-sign-in">
  </div>

  <div class="container">
      <div class="row">
          <!-- LANGUAGES -->
          <div class="col-xs-6 language language-eng">
            <a  href=""><img class="img-responsive pull-right" src="../Tinderbox/img/e-flag.png" alt="english-flag"></a>
          </div>
          <div class="col-xs-6 language language-dk">
            <a  href=""><img class="img-responsive pull-left" src="../Tinderbox//img/d-flag.png" alt="danish-flag"></a>
          </div> <!-- End of Languages -->

          <!--LOGO -->
          <div class="col-xs-offset-1 col-xs-10">
              <div class="logo">
                <img class="img-responsive center-block" src="img/Logo.png" alt="">
              </div>
          </div> <!-- End of LOGO-->
          <!-- Create new account -->
          <div class="col-xs-12">
            <h5 class="new-account">Create a new account</h5>
          </div>
          <!-- FORM -->
          <div class="col-xs-offset-1 col-xs-10 form-sign-up">
            <form action="" method="POST" role="form">
               <div class="input-group">
                 <span class="input-group-addon icons"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="name" class="form-control InputEmail" placeholder="Name">
                </div>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control InputPassword" placeholder="Password">
                </div>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control InputPassword" placeholder="Repeat Password">
                </div>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="email" class="form-control InputPassword" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary btn-block button-submit">Register</button>
            </form>
          </div> <!-- End of Form -->
          <!-- More Information -->
          <div class="col-xs-12">
            <h6 class="text-center no-account-title">Haven't Decided Yet?</h6>
          </div>
          <div class="col-xs-offset-1 col-xs-10">
            <button type="submit" class="btn btn-primary btn-block button-submit button-more-info">MORE INFORMATION</button>
          </div>
      </div> <!-- END OF THE ROW -->
  </div> <!-- END OF THE CONTAINER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>