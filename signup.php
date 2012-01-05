<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>iCelero</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-menu.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
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
   <img src="images/signup_head.png" width="235" height="60" alt="Sign Up" />
   <p>&nbsp;</p>
<div id="signup_container">

   <table width="100%" border="0" cellspacing="4" cellpadding="0">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="31%">&nbsp;</td>
    <td width="64%">&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>Full Name</td>
    <td>
      <input type="text" name="textfield" id="textfield" class="signup"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Username</td>
    <td>
      <input type="text" name="textfield2" id="textfield2" class="signup"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td>
      <input type="text" name="textfield3" id="textfield3" class="signup"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Confirm Password</td>
    <td>
      <input type="text" name="textfield4" id="textfield4" class="signup"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Date of Birth</td>
    <td>
      <input type="text" name="textfield5" id="textfield5"class="signup" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email</td>
    <td>
      <input type="text" name="textfield6" id="textfield6" class="signup"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><a href="#"><img src="images/signup_btn.png" width="88" height="42" alt="Sign Up" /></a></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

   
   </div>
     <div id="terms"><ul><li>All fields are mandatory</li>
            <li> Password must not contain spaces              </li>
            <li>Password must contain minimum 6 characters</li>
          </ul></div>
  </div><!-- right container  -->
    </div><!-- middle container  -->
<?php include("footer.php"); ?>
</div>
</body>
</html>