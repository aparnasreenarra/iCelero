<?php
	$dbhost = 'rightclick2011.db.7380586.hostedresource.com';
	$dbuser = 'rightclick2011';
	$dbpass = 'Dkmks061986';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
	$dbname = 'rightclick2011';
	mysql_select_db($dbname); 
?>