<?php
	include 'conn.php';

	if(isset($_POST[into_news])){
		$base_sql="INSERT INTO `p_newsbase` (`id`,`cid`,`title`,`author`,`date_time`,`brief`)" . 
			"VALUES (NULL,'$_POST[cid]','$_POST[title]','$_POST[author]',now(),substring('$_POST[newscontent]', 1,20))";
		mysql_query($base_sql);
		$last_id=mysql_insert_id();
		$content_sql="INSERT INTO `p_newscontent` (`nid`,`keyword`,`content`,`remark`)" .
			"VALUES ($last_id,'$_POST[keyword]','$_POST[newscontent]','')";
		mysql_query($content_sql);
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">
	<head>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/layout.css">
		<script src="../ckeditor/ckeditor.js"></script>
		<title>newsupdate</title>
	</head>
	<body style="background-color: #ECEBB6">
		<table class=navi cellSpacing=1 align=center border=0>
			<tbody>
				<tr>
					<h2>add news</h2>
				</tr>
			</tbody>
		</table>
		</br>
		<table border=0 cellSpacing=1 align=center class=form>
			<form action="index.php?sid=1" method="post" >
				<tr>
					<td width=80>news title</td>
					<td>
						<input type="text" name="title" size=40>
						</select>
					</td>
				</tr>

				<tr>
					<td width=80>news author</td>
					<td>
						<input type="text" name="author" size=40>
					</td>
				</tr>

				<tr>
					<td width=80>key words</td>
					<td>
						<input type="text" name="keyword" size=40>
					</td>
				</tr>

				<tr>
					<td width=80>text content</td>
					<td>
						<textarea class="ckeditor" name="newscontent" rows="10" cols="30">
						</textarea>
						<script>
							CKEDITOR.replace('newscontent',{
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