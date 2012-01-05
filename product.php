<?php
	include_once 'includes/common/constants.php'; 
	include_once 'includes/db/db_conn.php'; 
	include_once 'includes/dao/dao.php'; 
	$content=getPageData('product');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $content['page_title'];  ?></title>
    <meta name="title" content="<?php echo $content['page_title'];  ?>" />
    <meta name="description" content="<?php echo $content['page_meta_description'];  ?>" />
    <meta name="Keywords" content="<?php echo $content['page_keywords'];  ?>" />
	<link href="<?php echo SITE_URL; ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo SITE_URL; ?>css/style-menu.css" rel="stylesheet" type="text/css" />

	<script src="<?php echo SITE_URL; ?>js/jquery-1.6.2.min.js" type="text/javascript"></script>

	
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
<img src="images/product_head.png" width="224" height="60" alt="" /><!-- scroller div starts -->
<div id="scrollbar1">
      <div class="scrollbar">
    <div class="track">
          <div class="thumb" style="height:67px;">
        <div class="end"></div>
      </div>
        </div>
  </div>
      <div class="viewport">
    <div class="overview"><br /><h1>Mobile Internet Speed like you have never experienced before.</h1>
          <?php echo $content['page_content'];  ?>
         
<!--<div id="blank"></div>-->
        </div>
  </div>
    </div>
    <!-- scroller div starts -->
  </div><!-- right container  -->
    </div><!-- middle container  -->
<?php include("footer.php"); ?>
</div>
</body>
</html>