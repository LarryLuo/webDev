<?php
	include 'conn.php';
	if(isset($_GET['action'])){
 		$del_sql="DELETE FROM `p_video` WHERE `id`='{$_GET['action']}'";
 		mysql_query($del_sql)or die("finish"); 
	}
?>
<div id="videoArea" style="float:left">
<?php
	$vid_sql="SELECT * FROM p_video";
	$vid_query=mysql_query($vid_sql,$conn);
	while ($vid_row=mysql_fetch_array($vid_query)) {
?>
<div class="vidBlock">
	<div class="vidTitle"><?=$vid_row[title]?></div>
	<div class="vidScreen"><?=$vid_row[url]?></div>
</div>
<?php } ?>