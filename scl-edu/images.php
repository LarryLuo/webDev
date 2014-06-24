<!--	<?php
		$pagesql = "SELECT * FROM p_media";
		$pageresult = mysql_query($pagesql);
		$rowsNum = mysql_num_rows($pageresult);
		/* get  num of pic */

		$pageSize = 6;
		/* set 6 pics in 1page*/
		$pageCount = ceil($rowsNum/$pageSize);
		$pageno = $_GET["pageno"];
		$offset=($pageno - 1)*$pageSize;
		$pagesql2 = "SELECT * FROM p_media LIMIT {$offset},{$pageSize}";
		$pageresult2 = mysql_query($pagesql2);

			if($pageno == "")$pageno = 1;
			while ($pic_row=mysql_fetch_array($pageresult2)) {
	?>
			<div class="picBlock">
			<a href="<?=$pic_row[url]?>"><img src="<?=$pic_row[url]?>"></a>
			<div class="picDel"><a href="#" onclick="Del(<?=$pic_row[id]?>)">del</a></div>
		</div>
	<?php							
			}
	?>

-->
<?php
	include_once('UberGallery-v2.4.6/resources/UberGallery.php');
	$gallery = UberGallery::init()->createGallery('css/media');
?>
