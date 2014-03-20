<?php
include_once('global.php');
	
	$query=$db->query("SELECT * FROM 'test'");
	$row=$db->fetch_array($query);

	echo $row[name];
?>