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
    			<a href="dashboard"><span class="glyphicon glyphicon-home"></span></a>
    		</div>
    		<div class="col-xs-8">
    			<h2 class="title-page">Info/Contact</h2>
    		</div>
    		<div class="col-xs-offset-1 col-xs-10">
    			<hr class="second-hr">
    		</div>
  	</div>
  </div>
  <!-- Accordion part -->
  
  <div class="container accordion">
    <div class="row">
      <div class="col-md-12 col-sm-12">
          <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading1">
                  <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Periods of effort
                      </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                  <div class="panel-body">
                    <p>A period of effort is the period of time you can/will help Tinderbox. It is possible to choose between three different periods, and it required to choose one. It is possible to select multiple periods, and thus increase chances of getting on a team.</p>
                     <p> <span style="text-decoration: underline;">NOTICE:</span> Some before/after teams operate with one shift before AND one shift after. You will be notified about which team/teams this concern, prior to your selection.</p>
                    <p><span style="text-decoration: underline;">Periods of effort:</span>
                    Before Tinderbox | During Tinderbox | After Tinderbox</p> 
                  </div>
                </div>
            </div>
              <!-- end of panel 1 -->

            <div class="panel">
                <div class="panel-heading" role="tab" id="heading2">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Hours of effort & distribution
                      </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      <p>Hours of effort are the number of hours you are helping Tinderbox.</p>
                      <p>Before Tinderbox = approx 24 hours</p>
                      <p>During Tinderbox = approx 16 hours</p>
                      <p>After Tinderbox = approx 24 hours</p>
                      <p>Distribution hours of effort are determined by your volunteer coordinator/team leader.</p>
                      <p>Hours of effort will be spread out over more than one coherent shift, unless otherwise agreed with volunteer coordinator/team leader.</p>
                    </div>
                </div>
            </div>
              <!-- end of panel 2 -->

            <div class="panel">
                <div class="panel-heading" role="tab" id="heading3">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        SHIFT SWAP
                      </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      <p>In case of shift swap between team members, click on ”Shift Swap” in dashboard and contact your volunteer coordinator/team leader for questions regarding swapping shift(s).</p>
                    </div>
                </div>
            </div>
              <!-- end of panel 3 -->

              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading4">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                          SHIFT SCHEDULE
                        </a>
                      </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body">
                        <p>Shift schedule will be made by volunteer coordinator/team leader and can be found under “Schedule” in member dashboard. Daily schedules are expected to be available 15-20 of May.</p>
                         <p> <span style="text-decoration: underline;">NOTICE:</span> Schedule have to be approved by volunteer to confirm it has been viewed by each volunteer. I case of non action we reserve the right to unregister and sign on our blacklist.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 4 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading5">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                          INSURANCE
                        </a>
                      </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                      <div class="panel-body">
                        <p>All volunteers at Tinderbox are insured via the statutory workers’ compensation insurance. This covers bodily injury – but not personal things. For example, if you were to take your computer with you to Tinderbox, it is your responsibility.</p>
                        <p>In addition, there is a liability insurance for organizers. This covers damage to a third party caused by the employee during the hours of effort. All damages are to be reported to your volunteer coordinator/team leader immediately.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 5 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading6">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                          AUDIO & FOOTAGE
                        </a>
                      </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                      <div class="panel-body">
                        <p>Camcorders, SLR cameras, Tape recorders and professional photographic equipment is not allowed. However, small digital camcorders (pocket size) and mobile phones is allowed without prior authorization</p>
                        <p>It is forbidden to take pictures of the artists, ask for an autograph or contact them in any other way. It is important that artist’s privacy is respected.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 6 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading7">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                          CHECK-IN & WRISTBANDS
                        </a>
                      </h4>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                      <div class="panel-body">
                        <p>Check-In for volunteers at Tinderbox is situated close to the main entrance at Falen. Follow the signs.We will release your voucher which is your entry ticket to Tinderbox, in early June. You’ll find it for download under your profile in RUBY. </p>
                         <p>On your voucher/ticket you will also find a map showing where Falen and volunteer check-in is situated.</p>
                         <p>NB: Always show up for your shift in due time – at least 15 min. before your shift starts. Your wristband gives you access to the festival site throughout the whole festival.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 7 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading8">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                          LOST & FOUND
                        </a>
                      </h4>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                      <div class="panel-body">
                        <p>If you lost something at Tinderbox, and it has been handed in, we will make every effort to take good care of it. Everything must be handed in/will be handed in to the Office of Organization, located in what we call the “production city” in Tusindårsskoven.</p>
                        <p>Here you can collect your things until Wednesday June 29th until around 5 p.m. After June 29th everything will be moved to our headquarters, which you can contact by writing an e-mail to info@tinderbox.dk.</p>
                        <p>Describe in detail what you are missing, and we will look for it and get back to you.We keep lost property until July 6th after which everything of value (purses, mobiles, keys, cash, jewelry, handbags and the like) will be given to Fyns Politis Hittegodskontor. All clothing and the like will be donated to non-profit or charitable purposes after July 6th.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 8 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading9">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                          FOOD & DRINKS
                        </a>
                      </h4>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                      <div class="panel-body">
                        <p>It is not allowed to bring your own drinks. This goes for both drinks with and without alcohol. Read more in our Rules of Engagement.</p>
                        <p>As a Volunteer at Tinderbox you will receive meals in connection with your shifts. However, this does not include breakfast, as it is expected that you eat before going to the festival site. If the food provided does now cover your needs, you are welcome to also bring food/snacks for your shifts.</p>
                        <p>No matter what time of day your shifts are, we encourage you to eat before heading to the festival site. You never know when your first meal break will be.There will always be free water, coffee and tea in connection with the shifts you have at Tinderbox.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 9 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading10">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                          ACCOMMODATION
                        </a>
                      </h4>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                      <div class="panel-body">
                        <p>Unfortunately Tinderbox does not provide accommodation. If you need accommodation you must book/arrange it yourself.</p>
                        <p>We have created a group on Facebook specifically for volunters at Tinderbox, where you have the opportunity to help each other with either a sofa, a floor or the like. Find it <a href="http://www.tinderbox.dk/en/praktisk/frivillig/faq-2/%20https://www.facebook.com/events/508759709291144/" target="u_blank">Here</a></p>
                        <p>Help each other out – it’s good karma.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 10 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading11">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                          PARKING CARS/BIKES
                        </a>
                      </h4>
                  </div>
                  <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                      <div class="panel-body">
                        <p>Bikes are very welcome and we encourage the use of public transport, walk or cycle. We don't have parking for cars. Information about parking facilities in and around Odense  <a href="http://www.tinderbox.dk/en/info/" target="u_blank">here</a></p>
                        <p>There will be bike parking at Falen, which is situated close to the main entrance. The bike parking will be staffed while Tinderbox is open:</p>
                        <p>Thursday June 23rd from 13:00 PM to 02:30 AM.</p>
                        <p>Friday June 24th from 12:00 PM to 02:30 AM.</p>
                        <p>Saturday June 25th from 12:00 PM to 02:00 AM.</p>
                        <p>Parking is at own risk. It is not allowed to park bicycles elsewhere on or around the Tinderbox site. Therefore, it is important that bikes are parked before collecting wristbands or before shifts on the festival site.</p>
                        <p>In the build-up period and the packing period it will be possible to park bikes at Falen Check-In, near main entrance.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 11 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading12">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                          RULES OF ENGAGEMENT
                        </a>
                      </h4>
                  </div>
                  <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                      <div class="panel-body">
                        <p>Please read our <a href="http://www.tinderbox.dk/en/rules-of-engagement/">Rules of Engagement </a></p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 12 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading13">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                          POLICY OF AGE
                        </a>
                      </h4>
                  </div>
                  <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                      <div class="panel-body">
                        <p>Applicant must be at least 18 years before June 1st 2016. This is a requirement from our insurance and can not be bent in any way.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 13 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading14">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                          CANCELLATION AND ILLNESS
                        </a>
                      </h4>
                  </div>
                  <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                      <div class="panel-body">
                        <p>Please read our <a href="http://www.tinderbox.dk/en/rules-of-engagement/">Rules of Engagement </a></p>
                        <p>It is very important to us that you know what you can expect from us and what we expect of you.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 14 -->
               <div class="panel">
                  <div class="panel-heading" role="tab" id="heading15">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                          DEADLINE OF CANCELLATION / MANDATORY REGISTRATION
                        </a>
                      </h4>
                  </div>
                  <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                      <div class="panel-body">
                        <p>All registrations are binding after June 1st 2016. Then apply our <a href="http://www.tinderbox.dk/en/rules-of-engagement/">Rules of Engagement</a>in order for late cancellation.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 15 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading16">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                          TECHNICAL ERROR
                        </a>
                      </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                      <div class="panel-body">
                        <p>If there is suspicion of technical error, or mood swings from the volunteer app.</p>
                        <p>Write an email with a detailed description of what you see and send it to our support: <a href="mailto:techsupport@tinderbox.dk">techsupport@tinderbox.dk</a></p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 16 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading17">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                          I CAN’T LOG IN! WHAT SHOULD I DO?
                        </a>
                      </h4>
                  </div>
                  <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                      <div class="panel-body">
                        <p>Make a detailed description of how you experience the error. Send the description and your username/email address to techsupport@tinderbox.dk and our technical support will help you with the problem as soon as possible.</p>
                        <p>If it’s because you forgot your password, click “forgot your password?” and create a new one.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 17 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading18">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                          CAN I CHOOSE SHIFTS WITH A FRIEND?
                        </a>
                      </h4>
                  </div>
                  <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                      <div class="panel-body">
                        <p>You have the opportunity to note the name of one of your friends you want to work with during your registration.</p>
                        <p>Another possibility is that you and your friends coordinate your registration and choose the same actions.We can not guarantee that all volunteers at Tinderbox will have all their wishes fulfilled. Please respect that we are working with a very large puzzle – we do the best we can.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 18 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading19">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                          MY DESIRED AREA/TEAM DOESN'T APPEAR ON THE LIST IN MY APPLICATION
                        </a>
                      </h4>
                  </div>
                  <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                      <div class="panel-body">
                        <p>If your desired area of effort/team does not appear on the list of your choices during the enrollment, it may be because:</p>
                        <p>1: The period of effort the area/team does not match the effort period you’ve chosen.</p>
                        <p>– Try another period of effort.</p>
                        <p>2: The area of effort/team no longer exists at Tinderbox, or has been changed.</p>
                        <p>– Select another area of effort/team.</p>
                        <p>3: The area of effort/team is already filled.</p>
                        <p>– Select another area of effort/team.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 19 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading20">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                          GUARANTEE OF SPOT
                        </a>
                      </h4>
                  </div>
                  <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                      <div class="panel-body">
                        <p>In your sign-up, if you are able to choose a work area/a team where are still spots available, you are guaranteed a spot as a volunteer at Tinderbox 2016, unless there is a breach of our Rules of Engagement at a later time.</p>
                        <p>If you only had the chance to join our waiting list, you are not guaranteed a spot as a volunteer at Tinderbox 2017 until you hear from us.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 20 -->
              <div class="panel">
                  <div class="panel-heading" role="tab" id="heading21">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                          WAITING LIST
                        </a>
                      </h4>
                  </div>
                  <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                      <div class="panel-body">
                        <p>If all our teams are filled up, you have the option of joining our waiting list. This is general and is considered as one large pool.</p>
                        <p>You are not guaranteed a spot as a volunteer at Tinderbox by being on our waiting list, and you are not able to have any influence on which team you want to be a part of. We select and allocate seats from the established requirements combined with your choice of periods of effort.</p>
                        <p> This means that we do not select through “first in, first seated” and the more periods of effort you choose, the more opportunities there is for us to choose you.</p>
                        <p>If we put you on a team, you will receive an e-mail. Then you can login <a href="#0">here</a> and see which team we have located for you, as well as a contact to your volunteer coordinator/team leader.</p>
                      </div>
                  </div>
              </div>
              <!-- end of panel 21 -->

              
        </div>
        <!-- end of #accordion -->

      </div>
      <!-- end of wrap -->
  </div> <!-- End of Row -->
</div>
<!-- end of container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/main.js"></script>
</body>
</html>