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
				<a href="index.php?sid=1">�༭����</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=3">�༭ͼƬ</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=4">�༭��Ƶ</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=5">�׶���Ϣ</a>
			</div>
			<div class="navButton">
				<a href="index.php?sid=6">��Ƹ��Ϣ</a>
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
							echo "<p>�����Ϸ���ť</p>";
							break;
					}
				?>
		</div>
	</div>
	</body>
</html>
