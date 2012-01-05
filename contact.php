<?php
	include_once 'includes/common/constants.php'; 
	include_once 'includes/db/db_conn.php'; 
	include_once 'includes/dao/dao.php'; 
	include_once 'includes/dao/rdao.php';
	//Fetching Content for Title
	$content=getPageData('contact');
	//Fetching content for contact us
	
	$rdao=new RDao();
	$contact_arr=$rdao->getContactData();
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
<img src="images/contact_us_head.png" width="259" height="60" alt="Contact Us" /><!-- scroller div starts -->
<div id="scrollbar1">
      <div class="scrollbar">
    <div class="track">
          <div class="thumb" style="height:67px;">
        <div class="end"></div>
      </div>
        </div>
  </div>
      <div class="viewport">
    <div class="overview">
    
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <!-- <tr>   <td>  <h1>iCelero Headquarters</h1>
  <h4>1190 Saratoga Ave, Suite 240<br />
    San Jose, CA 95129<br />
    Phone: +1 (408) 409-7179<br />
    Fax: +1 (408) 689-1377<br />
    Email: <a href="mailto:info@icelero.com" title="info@icelero.com">info@icelero.com</a></h4></td>
    <td><img src="images/Office-US.jpg" width="409" height="209" /></td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
    <td><img src="images/Office-US.jpg" width="409" height="209" /></td>
    
  </tr>
  <tr>
    <td>  <h1>iCelero Headquarters</h1>
  <h4>1190 Saratoga Ave, Suite 240<br />
    San Jose, CA 95129<br />
    Phone: +1 (408) 409-7179<br />
    Fax: +1 (408) 689-1377<br />
    Email: <a href="mailto:info@icelero.com" title="info@icelero.com">info@icelero.com</a></h4></td>
    <td><img src="images/Office-US.jpg" width="409" height="209" /></td>
  </tr>
   <tr>
   <td>&nbsp;</td>
    <td><img src="images/Office-US.jpg" width="409" height="209" /></td>
    -->
  
	<?php
 for($i=0;$i<count($contact_arr);$i++){
	$arr=$contact_arr[$i];
	echo ' <tr><td>';
	echo $arr['address'].'</td><td>&nbsp;</td>';
	echo '<td style="padding-top:20px;"><img alt="" src="'.SITE_URL.'images/'.$arr['location_image'].'" /></td>';
	echo '<td>&nbsp;</td>';
	echo ' <td style="padding-top:20px;">'.$arr['google_map_embed'].'</td></tr>';
	 }
	?>
    
</table>
          <div id="blank"></div>
        </div>
  </div>
    </div>
    <!-- scroller div starts -->
  </div><!-- right container  -->
    </div><!-- middle container  -->

<!-- bottom level -->

<div class="bottomlevel">
      <div class="bottomcontainer">
    <div style="float:left; width:305px; margin-left:0px;">
          <ul>
        <li> <a href="#">Privacy policy</a></li>
        <li class="noborder"><a href="#"> Terms of use</a></li>
      </ul>
        </div>
         <div style="float:left; width:305px;margin-left:15%;" >
          <ul>
     
        <li class="noborder">Graphics by <a href="http://www.right-click.in" target="_blank"> Right Click</a></li>
      </ul>
        </div>
    <div style="float:right; ">
          <ul>
        <li class="noborder"> Copyright &copy; 2011 iCelero. All rights reserved.</li>
      </ul>
        </div>
   
  </div>
      <!--bottomcontainer--></div>
<!-- bottom level ends -->
</div>
</body>
</html>