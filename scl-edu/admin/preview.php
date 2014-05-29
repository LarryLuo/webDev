<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="../css/layout.css">
		<script type="text/javascript" src="../css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			function Page_jump(str){
				window.location = "http://192.168.1.142/scl-edu/wrapper.php?"+str;
			}
		</script>
		<title>scl-edu</title>
	</head>
	
	<body>
		<?php
			include ("conn.php");
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
			<div id="navLogo" onClick="window.location = 'http://192.168.1.142/scl-edu'"></div>
			<div class="navButton" style="background:url(../css/images/aboutButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=1&sid=1')"></div>
			</div>
			<div class="navButton" style="background:url(../css/images/eduButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=2&sid=3')"></div>
			</div>
			<div class="navButton" style="background:url(../css/images/infoButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=3&sid=7')"></div>
			</div>
			<div class="navButton" style="background:url(../css/images/joinButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=4&sid=11')"></div>
			</div>

		</div>
		<div id="wBanner" style="background:url(../css/images/info_Banner.png) no-repeat"></div>
		<div id="wContent">
			<div id="wLeft">
				<div id="wTitle" style="background:url(../css/images/info_Title.png) no-repeat"></div>

				<div class="wMenu">
					<ul>
						<?php
							$sql="SELECT * FROM p_submenu WHERE mid = 3";
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

				<div id="wButton" style="background:url(../css/images/info_Button.png) no-repeat"></div>
			</div>
			<div id="wRight">
				<?php

						$data = $_POST['htmlData'];

						if ( get_magic_quotes_gpc() )
						$data = stripslashes( $data ) ;

						echo $data ;
					?>
			</div>
		</div>
		<div id="wBottom" style="background:url(../css/images/info_Bottom.png) no-repeat"></div>
	</body>
</html>