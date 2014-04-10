<?php

	include 'global.php';
	$query=$db->query("SELECT * FROM p_config");
	$row=$db->fetch_array($query);
	echo $row[name];


//	$db_usrname="root";
//	$db_password="910303Tt";
//	$conn=mysql_connect("localhost",$db_usrname,$db_password)or die('cannot connect');
//	mysql_select_db("myWeb",$conn);
	echo "success";

?>