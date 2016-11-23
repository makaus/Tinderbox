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
    <img src="<?php echo base_url(); ?>public/img/bg-sign-in.png" alt="background-sign-in">
  </div>
<div class="container">
  <div class="row">
     <div class="language-container">
          <div class="col-xs-6 language language-eng">
            <a class="img" href=""><img class="img-responsive pull-right" src="<?php echo base_url(); ?>public/img/e-flag.png" alt="english-flag"></a>
            <span class="break-left"></span>
          </div>
          <div class="col-xs-6 language language-dk">
            <a  class="img" href=""><img class="img-responsive pull-left" src="<?php echo base_url(); ?>public/img/d-flag.png" alt="danish-flag"></a>
            <span class="break"></span>
          </div> <!-- End of Languages -->
      </div>
  </div>
</div>

  <div class="container">
      <div class="row">
          
          <!--LOGO -->
          <div class="col-xs-offset-1 col-xs-10">
              <div class="logo">
                <img class="img-responsive center-block" src="<?php echo base_url(); ?>public/img/Logo.png" alt="logo">
              </div>
          </div> <!-- End of LOGO-->

          <!-- FORM -->
            
          <div class="col-xs-offset-1 col-xs-10 form">
            <form action="" method="POST" role="form">
              <?php if (isset($error)) : ?>
                  <h4 style="text-decoration:underline;" class="text-center"><?php echo $error; ?></h4>
              <?php endif; ?>
               <div class="input-group">
                 <span class="input-group-addon icons"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" name="username" class="form-control InputEmail" placeholder="USERNAME">
                </div>
                <?php echo form_error('username'); ?>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name="password" class="form-control InputPassword" placeholder="PASSWORD">
                </div>
                <?php echo form_error('password'); ?>
                <button type="submit" value="Login" class="btn btn-primary btn-block button-submit">Login</button>
                 <span class="button-checkbox">
                    <button type="button" class="btn btn-signed" data-color="primary">Keep me Signed In</button>
                    <input type="checkbox" class="hidden" />
                 </span>
                 <a class="forgot-password" href="">Forgot your password?</a>
            </form>
          </div> <!-- End of Form -->
          <div class="col-xs-offset-1 col-xs-10">
            <div class="example-div">
              <h3><span>Sign In with</span></h3>
            </div>
          </div>
      </div> <!-- END OF THE ROW -->

      <!-- SOCIAL LINKS -->
      <div class="row social-links">
        <div class="col-xs-offset-3 col-xs-2">
            <img src="<?php echo base_url(); ?>public/img/fbk.png" alt="" class="img-responsive">
          </div>
           <div class=" col-xs-2">
            <img src="<?php echo base_url(); ?>public/img/twitter.png" alt="" class="img-responsive">
          </div>
           <div class=" col-xs-2">
            <img src="<?php echo base_url(); ?>public/img/google.png" alt="" class="img-responsive">
          </div>
      </div> <!-- END OF SOCIAL LINKS -->
      <div class="row no-account">
        <div class="col-0xs-12">
          <h6 class="text-center">Don't have an account?</h6>
        </div>
        <div class="col-xs-offset-1 col-xs-10">
          <button type="submit"  class="btn btn-primary btn-block button-submit button-register">Register</button>
        </div>
      </div>
  </div> <!-- END OF THE CONTAINER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/main.js"></script>
</body>
</html>