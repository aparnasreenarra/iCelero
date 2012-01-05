<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>iCelero</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-menu.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
		});
	</script>
	</head>

	<body>    
     <div id="page-background"><img src="images/bg.jpg" width="100%" height="100%" alt=""></div>
	<div id="content">
<?php include("header.php"); ?>
<div id="middlecontainer">
<div id="left_container">
      <?php include("left.php"); ?>
    </div><!-- left container div starts -->
<div id="right_container">
<img src="images/help_head.png" width="224" height="60" alt="Help" /><!-- scroller div starts -->
    <div id="scrollbar1">
      <div class="scrollbar">
        <div class="track">
          <div class="thumb">
            <div class="end"></div>
          </div>
        </div>
      </div>
      <div class="viewport">
        <div class="overview">
          <div id="container"> <a name="top" id="top"></a>
            <ul>
              <li><a href="#changepassword" class="anchor">How can I change my password?</a></li>
              <li><a href="#multiplelicense"  class="anchor">Can I have multiple License?</a></li>
              <li><a href="#licenseInvalidation"  class="anchor">When is my License Invalidated?</a></li>
              <li><a href="#troubleTicket"  class="anchor">What is a Trouble Ticket?</a></li>
              <li><a href="#HowTroubleTicketWorks"  class="anchor">How Trouble Ticket works?</a></li>
            </ul>
            <ul>
              <a name="#changepassword" id="#changepassword"> </a>
              <li class="que">How can I change my password?</li>
              <li class="ans">Use the Change password option to change your self care login password. Enter your current login password and provide the new password. Your password will be immediately reset to the new password and you will receive a confirmation e-mail regarding password reset, to the e-mail id provided during the registeration process.<br />
                <a href="#top" class="backtoTop">back to top</a></li>
              <a name="multiplelicense" id="multiplelicense"></a>
              <li  class="que">Can I have multiple License?</li>
              <li class="ans">Yes, you can have multiple Licenses which enables simultaneous concurrent service for different devices and (business/family) sub-group members.<br />
                <a href="#top"  class="backtoTop">back to top </a></li>
              <a name="licenseInvalidation" id="licenseInvalidation"></a>
              <li  class="que">When is my License Invalidated?</li>
              <li class="ans">Your Lincense will be invalidated due to :<br />
                Subscription lapse<br />
                Terms violation<br />
                <a href="#top"  class="backtoTop">back to top </a></li>
              <a name="troubleTicket" id="troubleTicket"></a>
              <li  class="que">What is a Trouble Ticket?</a></li>
              <li class="ans">Trouble tickets are formal records that identify a problem, then assign responsibility for diagnosis and resolution of that problem.<br />
                <a href="#top"  class="backtoTop">back to top </a></li>
                          <a name="HowTroubleTicketWorks" id="HowTroubleTicketWorks"></a>
              <li  class="que">How Trouble Ticket works?</li>
    
              <li class="ans">As a ticket moves though the system, it is usually classified as a certain type of issue, which in turn determines the skillset and expertise level of the employee(s) the ticket is assigned to. Until the issue is resolved, the "open ticket" for the problem remains in the work queue, with issues of highest priority taking precedence in terms of work flow.<br />
                <a href="#top"  class="backtoTop">back to top </a></li>
            </ul>
         
         
      
            
          </div>
        </div>
      </div>
    </div>
    
    <!-- scroller div ends --> 
  </div><!-- right container  -->
    </div><!-- middle container  -->
<?php include("footer.php"); ?>
</div>
</body>
</html>