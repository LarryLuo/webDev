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
			window.location.href="?sid=4&action=" + id;
 		}
	}
</script>




<html>
	<body style="background-color: #ECEBB6">
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
			<div class="vidScreen"><?=$vid_row[url]?></div>
			<div class="vidDel"><a href="#" onclick="Del(<?=$vid_row[id]?>)">del</a></div>
		</div>
		<?php } ?>
		<div id="update" style="float:left;margin-top:20px;">
		<form align=left name="updateVideo" action="index.php?sid=4" method="post" enctype="multipart/form-data">
			<label for="title">VideoTitle:</label>
			<input type="text" name="title" id="title" size="80"/>
			</br>
			<label for="url">VideoUrl:</label>
			<input type="text" name="url" id="url" size="80">
			</br>
			<input type="submit" name="submit" value="Submit" />
		</form>

		</div>
		<div id="info" style="float:left;width:100%">
			<?php
				if(isset($_POST[submit])){
				$sql="INSERT INTO p_video (id,title,url)".
				"VALUE('','$_POST[title]','$_POST[url]')";
				mysql_query($sql,$conn);
			}
			?>
		</div>
	</div>
	</body>
</html>
