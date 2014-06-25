<?php
session_start();
$lifeTime = 120;   
setcookie(session_name(), session_id(), time() + $lifeTime, "/"); 

if(empty($_SESSION['username'])){
 header("Location: login.php?errno=3");
 exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="layout.css">
		<script type="text/javascript" src="../css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
		<script>
			function resize(){
				var cHeight = $("#wRight").height() + 'px';
				document.getElementById("wContent").style.height = cHeight;
			}
		</script>
		<title>scl-edu_admin</title>
	</head>
	
	<body onload="resize()">
	<div id="header">
		<div id="navBar">
			<div class="navButton">
				<a href="index.php?sid=1">编辑新闻</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=3">编辑图片</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=4">编辑视频</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=5">幼儿信息</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=6">招聘信息</a>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="wContent">
				<?php
					include 'conn.php';
					$sid=$_REQUEST["sid"];
					switch ($sid) {
						case '1':
							include 'newsupdate.php';
							break;

						case '3':
							include 'updateMedia.php';
							break;

						case '4':
							include 'updateVideo.php';
							break;

						case '5':
							include 'infos.php';
							break;

						case '6':
							include 'zpinfo.php';
							break;

						default:
							echo "<p>请点击上方按钮</p>";
							break;
					}
				?>
		</div>
	</div>
	</body>
</html>
