<?php
	include 'conn.php';

	if(isset($_POST[into_news])){
		$base_sql="INSERT INTO `p_newsbase` (`id`,`cid`,`title`,`author`,`date_time`,`brief`)" . 
			"VALUES (NULL,'$_POST[cid]','$_POST[title]','$_POST[author]',now(),substring('$_POST[content]', 1,20))";
		mysql_query($base_sql);
		$last_id=mysql_insert_id();
		$content_sql="INSERT INTO `p_newscontent` (`nid`,`keyword`,`content`,`remark`)" .
			"VALUES ($last_id,'$_POST[keyword]','$_POST[content]','')";
		mysql_query($content_sql);
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../ckeditor/ckeditor.js"></script>
		<title>newsupdate</title>
	</head>
	<body>
		<table class=navi cellSpacing=1 align=center border=0>
			<tbody>
				<tr>
					<th>add news</th>
				</tr>
			</tbody>
		</table>
		</br>
		<table border=0 cellSpacing=1 align=center class=form>
			<tr>
				<th colspan="2">add class</th>
			</tr>
			<form action="newsupdate.php" method="post" >


				<tr>
					<td width=80>news title</td>
					<td>
						<input type="text" name="title" size=50>
						</select>
					</td>
				</tr>

				<tr>
					<td width=80>news author</td>
					<td>
						<input type="text" name="author" size=20>
					</td>
				</tr>

				<tr>
					<td width=80>key words</td>
					<td>
						<input type="text" name="keyword" size=80>
					</td>
				</tr>

				<tr>
					<td width=80>text content</td>
					<td>
						<textarea class="ckeditor" name="content" rows="10" cols="60">
						</textarea>
						<script>
							CKEDITOR.replace('content',{
								filebrowserBrowseUrl:'../ckfinder/ckfinder.html',
								filebrowserImageBrowseUrl:'../ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl:'../ckfinder/ckfinder.html?Tyep=Flash',
								filebrowserUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
								filebrowserImageUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
							});
						</script>
					</td>
				</tr>
				
				<tr>
					<td width=80></td>
					<td>
						<input type="submit" name="into_news" style="height:30px;" value="add news">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>