

<?php
	include 'resize.class.php';

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

				$resizeimage=new resizeimage('../css/media/'. $_FILES["file"]["name"],128,95,1,'../css/media/sample/sample_'.$_FILES["file"]["name"]);
				
				echo "Store in" . "css/media/sample/sample_" .$_FILES["file"]["name"]; 
			}

			include '../set/conn.php';
			$filename=$_FILES["file"]["name"];
			$url=$_POST['url'];

			if(isset($_POST['submit'])&& $_POST['submit']){
				$sql="INSERT INTO p_media (id,title,sample,url)".
				"VALUE('','$filename','css/media/sample/sample_$filename','css/media/$filename')";
				mysql_query($sql,$conn);
			}
		}
	}
	else
	{
		echo "Invalid file";
		echo $_FILES["file"]["error"];
	}
?>


<script language=javascript>
	function CheckPost()
	{
		if(mediaUpload.url.value=="")
		{
			alert("enter url!");
			mediaUpload.url.focus();
			return false;
		}
	}
</script>




<html>
	<body>
		<form align=center name="mediaUpload" action="mediaUpload.php" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" />
			</br>
			<label for="url">ImageTag:</label>
			<input type="text" name="url" id="url" size="100"/>
			</br>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>