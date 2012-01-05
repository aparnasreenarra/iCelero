<?php
class RDao
{
	function getContactData(){
	$sql = sprintf("SELECT * FROM ice_contact_us ORDER BY id;");
	$result = mysql_query($sql);
	if(!$result) {
		die("Cannot fetch user profile data : ".mysql_error());
	}
		$main_arr=array();
	while($res = mysql_fetch_array($result)) {
		$content_arr = array();
		$content_arr['id'] = $res['id'];
		$content_arr['address'] = $res['address'];
		$content_arr['location_image'] = $res['location_image'];
		$content_arr['google_map_embed'] = $res['google_map_embed'];
		$content_arr['date_added'] = $res['date_added'];

		if (get_magic_quotes_gpc()) {
			  $content_arr['address']= stripslashes($content_arr['address']);
			  $content_arr['google_map_embed']= stripslashes($content_arr['google_map_embed']);
		}

		array_push($main_arr,$content_arr);
		}
		return $main_arr;
	}
	function getManagementData(){
		$sql = sprintf("SELECT * FROM ice_management WHERE position_in_company='Management Team' ORDER BY id;");
		$result = mysql_query($sql);
		if(!$result) {
			die("Cannot fetch user profile data : ".mysql_error());
		}
			$main_arr=array();
		while($res = mysql_fetch_array($result)) {
			$content_arr = array();
			$content_arr['id'] = $res['id'];
			$content_arr['name'] = $res['name'];
			$content_arr['position'] = $res['position'];
			$content_arr['position_description'] = $res['position_description'];
			$content_arr['position_in_company'] = $res['position_in_company'];
			$content_arr['person_image'] = $res['person_image'];
			$content_arr['date_added'] = $res['date_added'];
			array_push($main_arr,$content_arr);
		}
			return $main_arr;
	}
	function getBoardText(){
		$sql = sprintf("SELECT board_text FROM ice_board_of_directors;");
		$result = mysql_query($sql);
		if(!$result) {
			die("Cannot fetch user profile data : ".mysql_error());
		}
		$board_txt='';
		while($res = mysql_fetch_array($result)) {
			$board_txt = $res['board_text'];
		}
			return $board_txt;
	}
	function getJobData(){
		$sql = sprintf("SELECT * FROM ice_job ORDER BY id;");
		$result = mysql_query($sql);
		if(!$result) {
			die("Cannot fetch user profile data : ".mysql_error());
		}
			$main_arr=array();
		while($res = mysql_fetch_array($result)) {
			$content_arr = array();
			$content_arr['id'] = $res['id'];
			$content_arr['title'] = $res['title'];
			$content_arr['experience'] = $res['experience'];
			$content_arr['location'] = $res['location'];
			$content_arr['date_added'] = $res['date_added'];
			array_push($main_arr,$content_arr);
		}
			return $main_arr;
	}
}
?>