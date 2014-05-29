<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="css/scripts/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="css/scripts/whell.js"></script>
		<script type="text/javascript">
			function Page_jump(str){
				window.location = "http://192.168.1.142/scl-edu/wrapper.php?"+str;
			}
		</script>
		<title>scl-edu</title>
	</head>
	
	<body>
	
		<!-- navigation bar -->
		<div id="topToolbar">
			<div id="navLogo" onClick="window.location = 'http://192.168.1.142/scl-edu'"></div>
			<div class="navButton" style="background:url(css/images/aboutButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=1&sid=1')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/eduButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=2&sid=3')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/infoButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=3&sid=7')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/joinButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=4&sid=11')"></div>
			</div>
		</div>
		<!-- main box of index , contains 5 boxes -->
		<!-- indexBox ,1button & 1animation-->
		<div id="indexBox">
			<div style="position:relative">
			<div id="indexLogo"></div>
			<!-- arrow with animation-->
			<div id="indexWheel"></div>
			</div>
		</div>
		<!-- about us Box, 1button & 3 animation-->
		<div id="aboutBox">
			<div style="position:relative">
			<div id="aboutTitle" onClick="Page_jump('mid=1&sid=1')"></div>
			<!-- bus stop with animation -->
			<div id="aboutStop"></div>
			<!-- bus with animation-->
			<div id="aboutBus"></div>
			<!-- clouds with animation-->
			<div id="aboutCloud1"></div>
			<div id="aboutCloud2"></div>
			<div id="aboutCloud3"></div>
			<div id="aboutLine"></div>
			</div>
		</div>
		<!-- eduBox,1 button & 4 animation-->
		<div id="eduBox">
			<div style="position:relative">
			<div id="eduTitle" onClick="Page_jump('mid=2&sid=3')"></div>
			<!-- borad,ruler,words,children with animation-->
			<div id="eduBoard"></div>
			<div id="eduRuler"></div>
			<div id="eduCube"></div>
			<div id="eduStudents"></div>
			<div id="eduTeacher"></div>
			</div>
		</div>
		<!-- infoBox,1 button & 2 animation-->
		<div id="infoBox">
			<div style="position:relative">
			<div id="infoTitle" onClick="Page_jump('mid=3&sid=7')"></div>
			<!-- cakehouse & building with animation-->
			<div id="infoFood"></div>
			<div id="infoBuilding"></div>
			<div id="infoPlay"></div>
			<div id="infoShop"></div>
			<div id="infoGirl"></div>
			</div>
		</div>
		<!-- joinBox,1 button & 2animation-->
		<div id="joinBox">
			<div style="position:relative">
			<div id="joinTitle" onClick="Page_jump('mid=4&sid=11')"></div>
			<!-- mailbox and blackboy with animation-->
			<div id="joinMail1"></div>
			<div id="joinMail2"></div>
			<div id="joinCloud"></div>
			<div id="joinBoy"></div>
			</div>
		</div>
		<!-- the up to top button -->
		<div id="topButton"></div>
	</body>
</html>