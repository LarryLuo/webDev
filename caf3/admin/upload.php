<?php
	if((($_FILES["file"]["type"] == "image/gif")
		||($_FILES["file"]["type"] == "image/jpeg")
		||($_FILES["file"]["type"] == "image/pjpeg"))
		&&($_FILES["file"]["size"] < 2000000))
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

			if(file_exists("../css/logos/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . "already exists. " ;
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"../css/logos/" . $_FILES["file"]["name"]);
				echo "Store in: " . "upload/" . $_FILES["file"]["name"];
			}

			include '../set/conn.php';
			$filename=$_FILES["file"]["name"];
			$url=$_POST['url'];

			if(isset($_POST['submit'])&& $_POST['submit']){
				$sql="INSERT INTO p_partner (id,name,image,url)".
				"VALUE('','$filename','css/logos/$filename','$url')";
				mysql_query($sql,$conn);
			}
		}
	}
	else
	{
		echo "Invalid file";
	}
?>


<script language=javascript>
	function CheckPost()
	{
		if(upload.url.value=="")
		{
			alert("enter url!");
			upload.url.focus();
			return false;
		}
	}
</script>




<html>
	<body>
		<form align=center name="upload" action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return CheckPost();">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" />
			</br>
			<label for="url">WebUrl:</label>
			<input type="text" name="url" id="url" size="100"/>
			</br>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>