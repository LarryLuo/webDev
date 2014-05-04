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
		<script src="css/scripts/jquery-1.11.0.min.js"></script>
		<title>caf3</title>
	</head>
	<body style="background:#363636" onload="resize()">
		<?php
			include ("set/conn.php");
			$mid=$_REQUEST["mid"];
			$sid=$_REQUEST["sid"];
			$nid=$_REQUEST["nid"];
		?>
		<div id="wBanner" style="background:url(css/images/wBanner<?=$mid?>.png) no-repeat">
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
				?>
			</div>
		</div>
		<div class="clearfloat"></div>

		<div id="wContainer">
			<div id="wUpper">
			</div>
			<div id="wContentContainer">
				<div id="wContent">
					<?php
						if($sid==5&&$nid<1){
							/* sid=5 and nid = null , list all news */
							echo "<div id='newsList'>";
								$newssql="SELECT * FROM p_newsbase ORDER BY id DESC ";
								$newsquery=mysql_query($newssql,$conn);
								while ($newsrow=mysql_fetch_array($newsquery)) {
									echo "<div id='newsColum'><img src='admin/upload/color.gif' style='height:14px;width:14px;float:left;'><a href='wrapper.php?sid=5&mid=2&nid=".$newsrow['id']." '>". $newsrow['title'] . "</a><span>[" .date('m/d',strtotime($newsrow['date_time'])). "]</span></div>";
								}
							echo "</div>";
						}elseif($nid!=null){
							/* nid is not null , list news detail by nid */
							echo "<div id='newsDetail'>";
								$news_sql="SELECT * FROM p_newscontent WHERE nid = ".$nid ;
								$news_query=mysql_query($news_sql,$conn);
								$news_row=mysql_fetch_array($news_query);
								echo $news_row[content];
							echo "</div>";
					
						}else{
							/* nid !=5, echo the content detail by sid */
							$content_sql="SELECT * FROM p_content WHERE sid = ".$sid ;
							$content_query=mysql_query($content_sql,$conn);
							$content_row=mysql_fetch_array($content_query);
							echo $content_row[content];
						}						
					?>
				</div>
				<div id="wContentBottom">
					<div id="wButton">
						<a href="index2.php"><img src="css/images/wButton_1.png" onmouseover="this.src='css/images/wButton.png'" onmouseout="this.src='css/images/wButton_1.png'" /></a>
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