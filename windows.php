<?php
$a=$_REQUEST["i"];
if($a==1)
header("location: https://right-click.in/icelero/new/download.php?f=IceleroSpeedTest.exe");
else{}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>iCelero</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-menu.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	
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
<img src="images/windows_head.png" width="254" height="60" alt="windows" />
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p> <strong>Lorem Ipsum</strong> is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
         
                <div class="operating_system_icon"><img alt="" src="images/windows_big_icon.jpg" width="96" height="94" /></div><div class="download_btn"><a href="download.php?f=IceleroSpeedTest.exe"><img alt="" src="images/download.jpg" width="135" height="46" /></a></div>  </div><!-- right container  -->
    </div><!-- middle container  -->
<?php include("footer.php"); ?>
</div>
</body>
</html>