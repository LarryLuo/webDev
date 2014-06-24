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
			<div id="navLogo"><a href="index.php"><div style="width:219px;height:44px"></div></a></div>
			<div class="navButton">
				<a href="index.php?sid=1">updateNews</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=2">editNews</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=3">editMedia</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=4">editVideo</a>
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

						case '2':
							include 'editNews.php';
							break;

						case '3':
							include 'updateMedia.php';
							break;

						case '4':
							include 'updateVideo.php';
							break;

						default:
							echo "<p>please click above</p>";
							break;
					}
				?>
		</div>
	</div>
	</body>
</html>