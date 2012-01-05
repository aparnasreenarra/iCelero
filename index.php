<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iCelero</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">

function change_product_video(flag)
{
//hideall();

	if(flag=="1")
	{
		document.getElementById('product_video').style.display="none";
		document.getElementById('view_product_video').style.display="block";
	}
	else if(flag=='2')
	{
		document.getElementById('product_video').style.display="block";
		document.getElementById('view_product_video').style.display="none";
	}
}

function change_viewPlan(flag)
{
//hideall();

	if(flag=="1")
	{
		document.getElementById('my_plan').style.display="none";
		document.getElementById('view_plan').style.display="block";
	}
	else if(flag=='2')
	{
		document.getElementById('my_plan').style.display="block";
		document.getElementById('view_plan').style.display="none";
	}

}

function change_postQuery(flag)
{
//hideall();
	 if(flag=="1")
	{
		document.getElementById('post_query').style.display="none";
		document.getElementById('view_postQuery').style.display="block";
	}
	else if(flag=='2')
	{
		document.getElementById('post_query').style.display="block";
		document.getElementById('view_postQuery').style.display="none";
	}

}

function change_social(flag)
{
//hideall();
	if(flag=="1")
	{
		document.getElementById('social').style.display="none";
		document.getElementById('view_social').style.display="block";
	}
	else if(flag=='2')
	{
		document.getElementById('social').style.display="block";
		document.getElementById('view_social').style.display="none";
		
	}

}

</script>
</head>

<body>
  <div id="page-background"><img src="images/bg.jpg" width="100%" height="100%" alt=""></div>
	<div id="content">
<?php include("header.php"); ?>
<div id="wrapper">
  <div class="iconcontainer">
    <ul>
      <li>
        <div id="product_video" onmouseover="change_product_video('1');"><a href="product.php"><img src="images/product.png" alt="Product" title="Product" width="125" height="125" /></a></div>
        <div class="subcategory"  id="view_product_video" style=" display:none;" >
          <ul class="product_videos" onmouseout="change_product_video('2');">
            <li><a href="product_videos.php"><img src="images/video1.png" alt="Product Videos" title="Product Videos"/></a></li>
            <li><a href="product_videos.php"><img src="images/video2.png" alt="Product Videos" title="Product Videos"/></a></li>
            <li style="padding-left:40px;"><a href="product.php"><img src="images/product_submenu.png" alt="Product" title="Product"/></a></li>
          </ul>
        </div>
      </li>
      <li>
        <div id="social" onmouseover="change_social('1');"><a href="http://www.facebook.com/icelero" target="_blank"><img src="images/social.png" alt="Social" width="125" height="125" title="Follow Us"/></a></div>
      
       <div class="subcategory"  id="view_social" style=" display:none;">
          <ul class="social"  onmouseout="change_social('2');">
            <li><a href="http://www.facebook.com/icelero" target="_blank"><img src="images/facebook.png" alt="Facebook" title="Facebook"/></a></li>
            <li><a href="http://twitter.com/icelero" target="_blank"><img src="images/twitter.png" alt="Twitter" title="Twitter"/></a></li>
          </ul>
        </div>
      
      </li>
     <li>
        <div id="post_query" onmouseover="change_postQuery('1');"><a href="#"><img src="images/about_us.png" alt="About Us" width="125" height="125" /></a></div>
        <div class="subcategory"  id="view_postQuery" style=" display:none;">
          <ul class="aboutus" onmouseout="change_postQuery('2');">
            <li><a href="#"><img src="images/our_company.png" alt="Our company" title="Our Company"/></a></li>
            <li><a href="managementTeam.php"><img src="images/team.png" alt="Team" title="Team"/></a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="iconcontainer">
    <ul>
      <li><div id="my_plan"  onmouseover="change_viewPlan('1');" ><a href="#"><img src="images/speed_number_app.png" alt="Speed Number" title="Speed Number" width="125" height="125" /></a></div>
        <div class="subcategory" id="view_plan" style="display:none;"  >
          <ul class="speednumber" onmouseout="change_viewPlan('2');">
            <li><a href="apple.php"><img src="images/apple.png" alt="Apple" title="Apple" /></a></li>
            <li><a href="windows.php?i=1"><img src="images/windows.png" alt="Windows"  title="Windows"/></a></li>
          </ul>
        </div>
      
   </li>
   <li><a  href="contact.php"><img src="images/contact_us.png" alt="Contact Us" width="125" height="125" title="Contact Us" /></a>
      	
	  </li>
      <li><a href="jobs.php"><img src="images/jobs.png" alt="Jobs" width="125" height="125" /></a>   </li>
    </ul>
  </div>
  <div class="iconcontainer" style="background:none;">
    <ul>
       <li><a href="signup.php"><img src="images/signup.png" alt="Sign Up" title="Sign Up" width="125" height="125" /></a></li>
  <li><a href="help.php"><img src="images/help.png"     alt="Help" width="125" height="125" /></a>
      </li>
      <li>
      
      </li>
    </ul>
  </div>
</div>
<!-- wrapper-->
<?php include("footer.php"); ?>
</div>
</body>
</html>