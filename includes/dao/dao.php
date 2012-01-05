<?php
function getPageData($page){
	$sql = sprintf("SELECT * FROM ice_page_content WHERE page_name='%s';",mysql_real_escape_string($page));
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$content_arr = array();
		
	while($res = mysql_fetch_array($result)) {
		$content_arr['page_id'] = $res['page_id'];
		$content_arr['page_name'] = $res['page_name'];
		$content_arr['page_heading'] = $res['page_heading'];
		$content_arr['page_image'] = $res['page_image'];
		$content_arr['page_content'] = $res['page_content'];
		$content_arr['page_keywords'] = $res['page_keywords'];		
		$content_arr['page_meta_description'] = $res['page_meta_description'];
		$content_arr['page_title'] = $res['page_title'];
		if (get_magic_quotes_gpc()) {
			  $content_arr['page_content']= stripslashes($content_arr['page_content']);
		}
	}
		return $content_arr;
}

function getTotalHeaderArray(){

$par_arr=getParentArray();

$header_html='';
$child_html='';
for($i=0; $i<count($par_arr);$i++){

 $curr_header=$par_arr[$i];
 $curr_header_id=$curr_header['page_id'];
 $curr_page_name=$curr_header['name'];
 $href=$curr_header['href'];

	$child_arr= getChildArray($curr_header_id);

$id='';
	if(count($child_arr)<=0){
	  $header_html.='<li><a href="'.SITE_URL.$href.'">'.$curr_page_name.'</a></li>';
	}
	else{
	  $id= str_replace(' ','_',$curr_page_name).'_hd';
	  $header_html.='<li><a href="'.SITE_URL.$href.'" rel="'.$id.'">'.$curr_page_name.'</a></li>';

		$child_html.='<div id="'.$id.'" class="dropmenudiv_b" style="width: 150px;"> ';
		$links='';
		for($j=0; $j<count($child_arr);$j++){

			$curr_child_arr=$child_arr[$j];
			$curr_child_name=$curr_child_arr['name'];
			$curr_child_href=$curr_child_arr['href'];

			$links.='<a href="'.SITE_URL.$curr_child_href.'">'.$curr_child_name.'</a> ';					
		}
			$child_html.=$links;
		$child_html.='</div>';
	}

}

$return_arr=array();
$return_arr['child']=$child_html;
$return_arr['parent']= $header_html;
return $return_arr;

}

function getTotalAdminHeaderArray(){

$par_arr=getParentArray();

$header_html='';
$child_html='';
for($i=0; $i<count($par_arr);$i++){

 $curr_header=$par_arr[$i];
 $curr_header_id=$curr_header['page_id'];
 $curr_page_name=$curr_header['name'];
 $href=$curr_header['href'];

	$child_arr= getChildArray($curr_header_id);


$url_page=str_replace('.php','',$href);
$id='';
	if(count($child_arr)<=0){

		if($curr_page_name=='HOME'){
		  $header_html.='<li><a href="'.SITE_URL.'admin/admin.php">'.$curr_page_name.'</a></li>';
		}else{
		  $header_html.='<li><a href="'.SITE_URL.'admin/edit.php?page='.$url_page.'">'.$curr_page_name.'</a></li>';
		}
	}
	else{
	  $id= str_replace(' ','_',$curr_page_name).'_hd';
  	  $header_html.='<li><a href="'.SITE_URL.'admin/edit.php?page='.$url_page.'" rel="'.$id.'">'.$curr_page_name.'</a></li>';

		$child_html.='<div id="'.$id.'" class="dropmenudiv_b" style="width: 150px;"> ';
		$links='';
		for($j=0; $j<count($child_arr);$j++){

			$curr_child_arr=$child_arr[$j];
			$curr_child_name=$curr_child_arr['name'];
			$curr_child_href=$curr_child_arr['href'];
			$curr_child_href=str_replace('.php','',$curr_child_href);
 		   $links.='<a href="'.SITE_URL.'admin/edit.php?page='.$curr_child_href.'">'.$curr_child_name.'</a>';
		}
			$child_html.=$links;
		$child_html.='</div>';
	}

}

$return_arr=array();
$return_arr['child']=$child_html;
$return_arr['parent']= $header_html;
return $return_arr;

}


function getParentArray(){
	$sql = sprintf("SELECT page_id,name,rank,isChild,parent_id,href FROM ice_header WHERE isChild=0 ORDER BY rank;");
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$par_arr = array();
		
	while($res = mysql_fetch_array($result)) {
		$parent_arr=array();
		$parent_arr['page_id'] = $res['page_id'];
		$parent_arr['name'] = $res['name'];
		$parent_arr['rank'] = $res['rank'];
		$parent_arr['isChild'] = $res['isChild'];
		$parent_arr['parent_id'] = $res['parent_id'];
		$parent_arr['href'] = $res['href'];		
		array_push($par_arr,$parent_arr);
	}
		return $par_arr;
}

function getChildArray($curr_header_id){
	$sql = sprintf("SELECT page_id,name,rank,isChild,parent_id,href FROM ice_header WHERE isChild=1 and parent_id='%s'
	ORDER BY rank;",mysql_real_escape_string($curr_header_id));
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$chi_arr = array();
		
	while($res = mysql_fetch_array($result)) {
		$child_arr=array();
		$child_arr['page_id'] = $res['page_id'];
		$child_arr['name'] = $res['name'];
		$child_arr['rank'] = $res['rank'];
		$child_arr['isChild'] = $res['isChild'];
		$child_arr['parent_id'] = $res['parent_id'];
		$child_arr['href'] = $res['href'];		
		array_push($chi_arr,$child_arr);
	}
	return $chi_arr;
}

function addPage($page_name,$rank){

	$href=str_replace(' ','_',$page_name);
	$href.='.php';

	$sql = sprintf("INSERT INTO header(name,rank,isChild,parent_id,href) VALUES('%s','%s','0','0','%s')",mysql_real_escape_string($page_name),
		mysql_real_escape_string($rank),
		mysql_real_escape_string($href)			
	);
		$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}

}

function addSubheaderPage($page_name,$rank,$parent_id){

	$href=str_replace(' ','_',$page_name);
	$href.='.php';

	$sql = sprintf("INSERT INTO header(name,rank,isChild,parent_id,href) VALUES('%s','%s','1','%s','%s')",mysql_real_escape_string($page_name),
		mysql_real_escape_string($rank),
		mysql_real_escape_string($parent_id),
		mysql_real_escape_string($href)			
	);
		$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}

}

function getNewRank(){
	$sql = sprintf("SELECT (max(rank)+1) AS newRank FROM ice_header WHERE isChild=0;");
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$rank = 0;		
	while($res = mysql_fetch_array($result)) {
		$rank=$res[0];
	}
	return $rank;
}

function addPageContent($page_name){

	$page_heading=strtoupper(str_replace('_',' ',$page_name));
	$page_name=str_replace(' ','_',$page_name);
	$page_title='ICelero : '.$page_heading ;
	$sql = sprintf("INSERT INTO page_content(page_name,page_image,page_heading,page_content,page_title)
VALUES('%s','aboutBanner.jpg','%s',' <span>iCelero is a Mobile Internet company</span>    <br />
    Delivering bandwidth acceleration and content adaptation as enabling technologies for a new class of cloud services. These services are delivered through a unique plug &amp; play distributed platform and provide a substantially improved user experience on mobile devices.<br />
    <br />
    <span>Formed in 2010,</span><br />
    iCelero is located in San Jose California and was founded by Silicon Valley veterans.<br />
    <br />
    <span>iCelero\'s patented hardware and software technologies</span><br />
    Have been developed over the past seven years. The company is now engaged with several strategic customers in order to bring its products and services to the market in late 2011.<br />
    iCelero is in the process of establishing international offices, the first of which is a development center in Pune, India.<br />
    <br />
    <span>iCelero is fully funded</span><br />
  By a Minnesota based private equity firm with an impressive track record investing in a variety of successful technology and services companies. ','%s');",mysql_real_escape_string($page_name),
	  mysql_real_escape_string($page_heading),
	  mysql_real_escape_string($page_title));
$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
}

function addSubPageContent($page_name,$img_name){

	$page_heading=strtoupper(str_replace('_',' ',$page_name));
	$page_name=str_replace(' ','_',$page_name);
	$page_title='ICelero : '.$page_heading ;
	$sql = sprintf("INSERT INTO page_content(page_name,page_image,page_heading,page_content,page_title)
VALUES('%s','%s','%s',' <span>iCelero is a Mobile Internet company</span>    <br />
    Delivering bandwidth acceleration and content adaptation as enabling technologies for a new class of cloud services. These services are delivered through a unique plug &amp; play distributed platform and provide a substantially improved user experience on mobile devices.<br />
    <br />
    <span>Formed in 2010,</span><br />
    iCelero is located in San Jose California and was founded by Silicon Valley veterans.<br />
    <br />
    <span>iCelero\'s patented hardware and software technologies</span><br />
    Have been developed over the past seven years. The company is now engaged with several strategic customers in order to bring its products and services to the market in late 2011.<br />
    iCelero is in the process of establishing international offices, the first of which is a development center in Pune, India.<br />
    <br />
    <span>iCelero is fully funded</span><br />
  By a Minnesota based private equity firm with an impressive track record investing in a variety of successful technology and services companies. ','%s');",mysql_real_escape_string($page_name),
	  mysql_real_escape_string($img_name),	  
	  mysql_real_escape_string($page_heading),
	  mysql_real_escape_string($page_title));
$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
}

function getHeaderInfo($par_id){
	$sql = sprintf("SELECT count(rank)+1 AS new_rank FROM ice_header WHERE isChild=1 and parent_id='%s'",mysql_real_escape_string($par_id));
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$rank=0;
		
	while($res = mysql_fetch_array($result)) {
		$rank= $res[0];
	}
	return $rank;
}

function getImageNameFromId($par_id){
	$sql = sprintf("SELECT href FROM ice_header WHERE page_id='%s'",mysql_real_escape_string($par_id));
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$txt='';
		
	while($res = mysql_fetch_array($result)) {
		$txt= $res[0];
	}

	$txt=str_replace('.php','',$txt);

	$sql = sprintf("SELECT page_image FROM  ice_page_content WHERE page_name='%s'",mysql_real_escape_string($txt));
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
		$img='';

	while($res = mysql_fetch_array($result)) {
		$img= $res[0];
	}		
	
	return $img;
}


function getAllArray(){
	$sql = sprintf("SELECT page_id,name,rank,isChild,parent_id,href FROM ice_header");
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
	$par_arr = array();
		
	while($res = mysql_fetch_array($result)) {
		$parent_arr=array();
		$parent_arr['page_id'] = $res['page_id'];
		$parent_arr['name'] = $res['name'];
		$parent_arr['rank'] = $res['rank'];
		$parent_arr['isChild'] = $res['isChild'];
		$parent_arr['parent_id'] = $res['parent_id'];
		$parent_arr['href'] = $res['href'];		
		array_push($par_arr,$parent_arr);
	}
		return $par_arr;
}

function deletePage($page_id){
	$sql = sprintf("DELETE FROM ice_header WHERE page_id='%s';",mysql_real_escape_string($page_id));
	$result = mysql_query($sql);
}


?>