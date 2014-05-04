<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">

	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" >
		<link rel="stylesheet" type="text/css" href="css/grid.css" >
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/wrapper.js"></script>
		<script src="prefix-free.js"></script>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<title>caf3</title>
	</head>
	<body style="background:#363636" onload="resize()">
		<div id="wBanner" style="background:url(css/images/wBanner1.png) no-repeat">
		</div>

		<div id="wNavBar">
			<div id="wNavButton">
				<?php
					$sql="SELECT * FROM p_submenu WHERE mid = ".$mid;
					$query=mysql_query($sql,$conn);
					while($row=mysql_fetch_array($query)){
				?>
					<button class="btn btn-1 btn-1e" onClick="Page_jump('sid=<?=$row[id]?>&mid=<?=$row[mid]?>')">
						<?=$row[name]?>
					</button>

				<?php
					}
					mysql_close();
				?>
			</div>
		</div>
		<div class="clearfloat"></div>



		<div id="container" style="zoom:1;overflow:hidden;min-height:400px;width:auto;position:relative;background:url(css/images/wBg.png);">
			<div id="up" style="position:absolute;background:url(css/images/wContainer.png) no-repeat;height:310px;width:1344px;margin-left:186px;">
			</div>
			<div id="content" style="height:auto;position:absolute;width:870px;margin-left:404px;">
				<div id="contentTxt" style="min-height:600px;width:870px;background:#EBEBEB">
				</div>
				<div id="contentBot" style="background:url(css/images/wContentBottom.png);height:200px;">
				</div>
			</div>
			<div class="clearfloat">
			</div>

			
		</div>


		<div id="wFooter">
		</div>
	</body>

		<script type="text/javascript">
		
		function resize(){
	
			var cHeight = $("#content").height() + 'px';
			document.getElementById("container").style.height = cHeight;
		}
		</script>	
</html>