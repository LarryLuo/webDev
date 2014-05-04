


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">

	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" >
		<link rel="stylesheet" type="text/css" href="../css/grid.css" >
		<link rel="stylesheet" type="text/css" href="../css/layout.css">
		<script type="text/javascript" src="../css/scripts/wrapper.js"></script>
		<script src="prefix-free.js"></script>
		<script src="../css/scripts/jquery-1.11.0.min.js"></script>
		<title>previewPage</title>
	</head>
	<body style="background:#363636" onload="resize()">
		<div id="wBanner" style="background:url(../css/images/wBanner2.png) no-repeat">
		</div>

		<div id="wNavBar">
			<div id="wNavButton">

			</div>
		</div>
		<div class="clearfloat"></div>

		<div id="wContainer">
			<div id="wUpper">
			</div>
			<div id="wContentContainer">
				<div id="wContent">
					<?php

						$data = $_POST['htmlData'];

						if ( get_magic_quotes_gpc() )
						$data = stripslashes( $data ) ;

						echo $data ;
					?>
				</div>
				<div id="wContentBottom">
					<div id="wButton">
						<a href="index2.php"><img src="../css/images/wButton_1.png" onmouseover="this.src='../css/images/wButton.png'" onmouseout="this.src='../css/images/wButton_1.png'" /></a>
					</div>
				</div>	
			</div>
		</div>

		<div id="wFooter">
		</div>	
	</body>


	<script type="text/javascript">
		function resize(){
			var cHeight = $("#wContentContainer").height() + 'px';
			document.getElementById("wContainer").style.height = cHeight;
		}
	</script>	
</html>