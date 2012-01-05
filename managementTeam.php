<?php
	include_once 'includes/common/constants.php'; 
	include_once 'includes/db/db_conn.php'; 
	include_once 'includes/dao/dao.php'; 
	include_once 'includes/dao/rdao.php'; 
	$content=getPageData('managementTeam');
	
	$rdao=new RDao();
	$board_txt=$rdao->getBoardText();
	$management_arr=$rdao->getManagementData();
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
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>css/website.css" type="text/css" media="screen"/>
	<script src="<?php echo SITE_URL; ?>js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo SITE_URL; ?>js/jquery.tinyscrollbar.min.js"></script>
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
<img src="images/about_us_head.png" alt="" width="224" height="60" /><!-- scroller div starts -->
<div id="scrollbar1">
      <div class="scrollbar">
    <div class="track">
          <div class="thumb" style="height:67px;">
        <div class="end"></div>
      </div>
        </div>
  </div>
      <div class="viewport">
    <div class="overview">  <h1>Managment Team</h1><br />
   
        <?php 
 
 for($i=0;$i<count($management_arr);$i++){
	$arr=$management_arr[$i];
	if($arr['position_in_company']=='Management Team'){
		echo '<h4><strong>'.$arr['name'].'</strong></h4>';
		echo '<p>'.$arr['position'].'</p>';
		echo ''.$arr['position_description'].'<br />';
		echo '<p>iCelero&rsquo;s product works with both new and existing Android, iOS, Blackberry, Symbian and Windows smart phones.</p>';
	} 
	}
		?>
   
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