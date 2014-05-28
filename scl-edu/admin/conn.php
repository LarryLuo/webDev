<?php
	$conn = mysql_connect("localhost","root","910303Tt","gb2312") or die("database connection error" .mysql_error());
	mysql_select_db("scl-edu",$conn);
	mysql_query("set names 'gb2312'");
?>