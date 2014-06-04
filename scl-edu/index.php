<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="css/scripts/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="css/scripts/whell.js"></script>
		<script type="text/javascript">
			function Page_jump(str){
				window.location = "http://www.cdcaf.com/scl-edu/wrapper.php?"+str;
			}
		</script>
		<title>scl-edu</title>
	</head>
	
	<body>
	
		<!-- navigation bar -->
		<div id="topToolbar">
			<div id="navBar">
			<div id="navLogo"><a href="index.php"><div style="width:219px;height:44px"></div></a></div>
			<div class="navButton" style="background:url(css/images/aboutButton.png) no-repeat" >
				<div class="navSelected"><a href="wrapper.php?mid=1&sid=1"><div id="selected2"></div></a></div>
			</div>
			<div class="navButton" style="background:url(css/images/eduButton.png) no-repeat" >
				<div class="navSelected"><a href="wrapper.php?mid=2&sid=3"><div id="selected2"></div></a></div>
			</div>
			<div class="navButton" style="background:url(css/images/infoButton.png) no-repeat" >
				<div class="navSelected"><a href="wrapper.php?mid=3&sid=7&pageno=1"><div id="selected2"></div></a></div>
			</div>
			<div class="navButton" style="background:url(css/images/joinButton.png) no-repeat" >
				<div class="navSelected"><a href="wrapper.php?mid=4&sid=11"><div id="selected2"></div></a></div>
			</div>
			</div>
		</div>


		<div id="returnTop">
			<img src="css/images/top_01.png" onmouseover="this.src='css/images/top_02.png'" onmouseout="this.src='css/images/top_01.png'" />
		</div>
		<!-- main box of index , contains 5 boxes -->
		<!-- indexBox ,1button & 1animation-->
		<div id="indexBox">
			<div id="index1000" style="position:relative;clear:both;width:1000px;height:1000px;margin:0 auto;" >
			<div id="indexLogo"></div>
			<!-- arrow with animation-->
			<div id="indexWheel"></div>
			</div>
		</div>
		<!-- about us Box, 1button & 3 animation-->
		<div id="aboutBox">
			<div id="about1000" style="position:relative;clear:both;width:1000px;height:1000px;margin:0 auto;">
			<div id="aboutTitle"><a href="wrapper.php?mid=1&sid=1"><div style="width:215px;height:190px"></div></a></div>
			<!-- bus stop with animation -->
			<div id="aboutStop"></div>
			<!-- clouds with animation-->
			<div id="aboutCloud1"></div>
			<div id="aboutCloud2"></div>
			<div id="aboutCloud3"></div>
			<div id="aboutLine"></div>
			<!-- bus with animation-->
			<div id="aboutBus"></div>
			</div>
		</div>
		<!-- eduBox,1 button & 4 animation-->
		<div id="eduBox">
			<div id="edu1000" style="position:relative;clear:both;width:1000px;height:1000px;margin:0 auto;">
			<div id="eduTitle"><a href="wrapper.php?mid=2&sid=3&pageno=1"><div style="width:215px;height:190px"></div></a></div>
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
			<div id="info1000" style="position:relative;clear:both;width:1000px;height:1000px;margin:0 auto;">
			<div id="infoTitle"><a href="wrapper.php?mid=3&sid=7"><div style="width:215px;height:190px"></div></a></div>
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
			<div id="join1000" style="position:relative;clear:both;width:1000px;height:1000px;margin:0 auto;">
			<!-- mailbox and blackboy with animation-->
			<div id="joinMail1"></div>
			<div id="joinMail2"></div>
			<div id="joinCloud"></div>
			<div id="joinLine"></div>
			<div id="joinBoy"></div>
			<div id="joinTitle"><a href="wrapper.php?mid=4&sid=11"><div style="width:215px;height:190px"></div></a></div>
			</div>
		</div> 
		<!-- the up to top button -->
	</body>
</html>