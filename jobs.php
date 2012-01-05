<?php
	include_once 'includes/common/constants.php'; 
	include_once 'includes/db/db_conn.php'; 
	include_once 'includes/dao/dao.php'; 
	include_once 'includes/dao/rdao.php'; 
	$content=getPageData('jobs');
	
	$rdao=new RDao();
	$job_arr=$rdao->getJobData();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $content['page_title'];  ?></title>
    <meta name="title" content="<?php echo $content['page_title'];  ?>" />
    <meta name="description" content="<?php echo $content['page_meta_description'];  ?>"/>
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
    <script type="text/javascript">

 function openForm(job_title){
 	document.getElementById('job_display_div').style.display="none";
  	document.getElementById('job_apply_div').style.display="block";
	document.getElementById('success_message').style.display="none";
	
	document.getElementById('job_title').value=job_title;
 }
function JobSelect(){
 	document.getElementById('job_display_div').style.display="block";
  	document.getElementById('job_apply_div').style.display="none";
	document.getElementById('success_message').style.display="none";
}


 
 function clearAll(){
	document.getElementById('name_err').innerHTML='';
	document.getElementById('email_err').innerHTML='';
	document.getElementById('file_err').innerHTML='';
 }
 
 function validate(){
 clearAll();
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var file =document.getElementById('resume_file').value;
	if(name==''){ document.getElementById('name_err').innerHTML='Enter Proper Name.'; }
	else if(email==''){	
		document.getElementById('email_err').innerHTML='Enter Email Address.'			
	 }else if(file==''){
		document.getElementById('file_err').innerHTML='Resume is Compulsory.'
	}else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
 	     document.form1.submit();
	 }else{
 		document.getElementById('email_err').innerHTML='Enter Valid Email Address.'			
	 }	 
 }
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
<img src="images/jobs_header.png" width="224" height="60" alt="" />
        
    <?php echo $content['page_content'];  ?>
 <br />
         
<div id='job_display_div'>
					<?php 
					$apply=$_REQUEST['apply'];
					if($apply=='1'){ ?>
						<div align="center" id='success_message' style="padding-bottom:10px;">Thank you for applying. We will get back soon.</div>
					<?php }else{ ?>
						<div align="center" id='success_message' style="padding-bottom:10px; display:none;">Thank you for applying. We will get back soon.</div>
					<?php }?>
                    <table width="100%" border="0" align="center">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="30%"><span class="style1"><strong>Description</strong></span></td>
    <td width="20%"><span class="style1"><strong> Experience</strong></span></td>
    <td width="20%"><span class="style1"><strong>Location </strong></span></td>
    <td width="20%"><span class="style1"><strong>Apply Now</strong></span></td>
    </tr>
    <?php 
				 
				 for($i=0;$i<count($job_arr);$i++){
					$arr=$job_arr[$i];
				 ?>
					<tr><td>&nbsp;</td>
						<td><span class="style2"><?php echo $arr['title']; ?></span></td>
						<td><span class="style2"><?php echo $arr['experience']; ?></span></td>
						<td><span class="style2"><?php echo $arr['location']; ?></span></td>
						<td><a href="javascript:openForm('<?php echo $arr['title']; ?>');" style="text-decoration:underline; color:#FF0000"><span class="style2">Apply Now</span></a></td>            
					</tr>				<?php } ?>
					 </table>
				</div>
<div id="job_apply_div" align="center" style="display:none;" >
					<div><a href="javascript:JobSelect();" style="color:#FF0101;">Back to Job Select</a></div>
					<form method="post" name='form1' id='form1' enctype='multipart/form-data' action="sendJobEmail.php">
						<table cellpadding="5" cellspacing="5">
						<tr>
							<td style="font-weight:bold;">Name</td>
							<td><input type="text" name="name" id="name" /></td>  
							<td><div id="name_err" style="color:#FF0101;"></div></td>  
						</tr>
						 <tr>
							<td style="font-weight:bold;">Email</td>
							<td><input type="text" name="email" id="email"  /></td> 
							<td><div id="email_err" style="color:#FF0101;" ></div></td>                 
						</tr>
						 <tr>
							<td style="font-weight:bold;">Upload Resume</td>
							<td><input type="file" name="resume_file" id="resume_file" /></td>    
							<td><div id="file_err" style="color:#FF0101;"></div></td>                             
						</tr>
					</table> 
						<input type="hidden" name="job_title" id="job_title"  />
						<div style="padding-top:10px;">
							<a href="javascript:validate();" style="border-bottom:0;">
							<img src="images/submit_btn.jpg" title="submit" alt="submit" />
						</a>
						</div>
					</form>
				</div>
         
  </div><!-- right container  -->
    </div><!-- middle container  -->
<?php include("footer.php"); ?>
</div>
</body>
</html>