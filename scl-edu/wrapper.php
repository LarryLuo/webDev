<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<title>scl-edu</title>
	</head>
	
	<body>
		<?php
			include ("admin/conn.php");
			$mid=$_REQUEST["mid"];
			$sid=$_REQUEST["sid"];
			$nid=$_REQUEST["nid"];
			switch ($mid) {
				case '1':
					$pageName = 'about';
					break;
				case '2':
					$pageName = 'edu';
					break;
				case '3':
					$pageName = 'info';
					break;

				case '4':
					$pageName = 'join';
					break;
				default:
					break;
			}
		?>
		<div id="navBar">
			<div id="navLogo"></div>
			<div class="navButton" style="background:url(css/images/aboutButton.png) no-repeat" >
				<div class="navSelected"></div>
			</div>
			<div class="navButton" style="background:url(css/images/eduButton.png) no-repeat" >
				<div class="navSelected"></div>
			</div>
			<div class="navButton" style="background:url(css/images/infoButton.png) no-repeat" >
				<div class="navSelected"></div>
			</div>
			<div class="navButton" style="background:url(css/images/joinButton.png) no-repeat" >
				<div class="navSelected"></div>
			</div>

		</div>
		<div id="wBanner" style="background:url(css/images/<?=$pageName?>_Banner.png) no-repeat"></div>
		<div id="wContent">
			<div id="wLeft">
				<div id="wTitle" style="background:url(css/images/<?=$pageName?>_Title.png) no-repeat"></div>

				<div class="wMenu">
					<ul>
						<?php
							$sql="SELECT * FROM p_submenu WHERE mid = " .$mid;
							$query=mysql_query($sql,$conn);
							while ($row=mysql_fetch_array($query)){
						?>
						<li>
							<a href="">
								<?=$row['name']?>
							</a>
						</li>
						<?php
							}
						?>
					</ul>
				</div>

				<div id="wButton" style="background:url(css/images/<?=$pageName?>_Button.png) no-repeat"></div>
			</div>
			<div id="wRight">RIGHT</div>
		</div>
		<div id="wBottom" style="background:url(css/images/<?=$pageName?>_Bottom.png) no-repeat"></div>
	</body>
</html>