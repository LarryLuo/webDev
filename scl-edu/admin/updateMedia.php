<script language=javascript>
	function CheckPost()
	{
		if(mediaUpload.title.value=="")
		{
			alert("enter title!");
			mediaUpload.title.focus();
			return false;
		}
	}
	function Del(id){
		if(confirm('you really del it?')){
			window.location.href="?sid=3&action=" + id;
 		}
	}
</script>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">
	<body style="background-color: #ECEBB6">
		<?php 
			include 'conn.php';
			if(isset($_GET['action'])){
 				$del_sql="DELETE FROM `p_media` WHERE `id`='{$_GET['action']}'";
 				mysql_query($del_sql)or die("finish"); 
			}
		?>
		<div id="picArea">
		<?php
			$pic_sql="SELECT * FROM p_media";
			$pic_query=mysql_query($pic_sql,$conn);
			while ($pic_row=mysql_fetch_array($pic_query)) {
		?>
		<div class="picBlock">
			<img src="../<?=$pic_row[url]?>">
			<div class="picDel"><a href="#" style="font-size:12px;" onclick="Del(<?=$pic_row[id]?>)">del</a></div>
		</div>
		<?php } ?>
		<div id="update" style="float:left;margin-top:20px;">
		<form align=left name="mediaUpload" action="index.php?sid=3" method="post" enctype="multipart/form-data">
			<label for="file">uploadFile:</label>
			<input type="file" name="file" id="file" />
			</br>
			<label for="url">ImageTitle:</label>
			<input type="text" name="title" id="title" size="100"/>
			</br>
			<input type="submit" name="submit" value="Submit" />
		</form>


		</div>
		<div id="info" style="float:left;width:100%">
<?php
	if((($_FILES["file"]["type"] == "image/jpeg")
		||($_FILES["file"]["type"] == "image/gif")
		||($_FILES["file"]["type"] == "image/pjpeg"))
		&&($_FILES["file"]["size"] < 200000000))
	{
		if($_FILES["file"]["error"] > 0)
		{
			echo "Return Code:" . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			echo "Upload:" . $_FILES["file"]["name"] . "<br />";
			echo "Type" . $_FILES["file"]["type"] . "<br />";
			echo "Size" . $_FILES["file"]["size"]/1024 . "Kb<br />";
			echo "Temp file:" . $_FILES["file"]["tmp_name"] . "<br />";

			if(file_exists("../css/media/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . "already exists. " ;
			}
			else
			{	

				move_uploaded_file($_FILES["file"]["tmp_name"],"../css/media/" . $_FILES["file"]["name"]);


				echo "Store in: " . "css/media/" . $_FILES["file"]["name"];
			}

			include 'conn.php';
			$filename=$_FILES["file"]["name"];
			$title=$_POST['title'];

			if(isset($_POST[submit])){
				$sql="INSERT INTO p_media (id,title,sample,url)".
				"VALUE('','$title','css/media/sample/sample_$filename','css/media/$filename')";
				mysql_query($sql,$conn);
			}
		}
	}
	else
	{
		echo $_FILES["file"]["error"];
	}
?>
		</div>
	</div>
	</body>
</html>
