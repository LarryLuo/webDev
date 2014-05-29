<?php
	include 'conn.php';

	if(isset($_POST[into_news])){
		mysql_query($base_sql);
		$last_id=mysql_insert_id();
		$content_sql="INSERT INTO `p_content` (`sid`,`content`,`remark`)" .
			"VALUES ($_POST[sid],'$_POST[content]','')";
		mysql_query($content_sql);
	}
?>
<script language=javascript>
	function CheckPost()
	{
		if(editer.sid.value=="")
		{
			alert("enter sid!");
			editer.sid.focus();
			return false;
		}
	}
</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../ckeditor/ckeditor.js"></script>
		<title>contentupdate</title>
	</head>
	<body>
		<table class=navi cellSpacing=1 align=center border=0>
			<tbody>
				<tr>
					<th>add contents</th>
				</tr>
			</tbody>
		</table>
		</br>
		<table border=0 cellSpacing=1 align=center class=form>
			<form name="editor" action="editor.php" method="post" onsubmit="return CheckPost();">


				<tr>
					<td width=80>content sid</td>
					<td>
						<input type="text" name="sid" size=20>
					</td>
				</tr>


				<tr>
					<td>text content</td>
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
						<input type="submit" name="into_news" style="height:30px;" value="add contents" >
					</td>
				</tr>
			</form>
		</table>
	</body>



</html>