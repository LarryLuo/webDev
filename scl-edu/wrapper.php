<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			function Page_jump(str){
				window.location = "http://192.168.1.142/scl-edu/wrapper.php?"+str;
			}
		</script>
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
			<div id="navLogo" onClick="window.location = 'http://192.168.1.142/scl-edu'"></div>
			<div class="navButton" style="background:url(css/images/aboutButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=1&sid=1')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/eduButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=2&sid=3')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/infoButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=3&sid=7&pageno=1')"></div>
			</div>
			<div class="navButton" style="background:url(css/images/joinButton.png) no-repeat" >
				<div class="navSelected" onClick="Page_jump('mid=4&sid=11')"></div>
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
							<a href="wrapper.php?mid=<?=$row[mid]?>&sid=<?=$row[id]?>">
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
			<div id="wRight">
				<?php
						if($sid==7&&$nid<1){
							/* sid=7 and nid = null , list all news */
							echo "<div id='newsList'>";

							echo "<div id='line' style='width:700px;border-top:2px solid #A66D25'></div>";
								$pagesql = "SELECT * FROM p_newsbase";
								$pageresult = mysql_query($pagesql);
								$rowsNum = mysql_num_rows($pageresult);
								/* get  num of news */

								$pageSize = 6;
								/* set 6 news in 1page*/
								$pageCount = ceil($rowsNum/$pageSize);
								$pageno = $_GET["pageno"];
								$offset=($pageno - 1)*$pageSize;
								$pagesql2 = "SELECT * FROM p_newsbase LIMIT {$offset},{$pageSize}";
								$pageresult2 = mysql_query($pagesql2);

								if($pageno == "")$pageno = 1;


								while ($newsrow=mysql_fetch_array($pageresult2)) {
									echo "<div id='newsColum'>
										<div id='newsTitle'><a href='wrapper.php?mid=3&sid=7&nid=".$newsrow['id']." '>". $newsrow['title'] . "</a>
										</div>
										<div id='newsBrief'>".$newsrow['brief']."</div>
									</div>";
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
							/* nid !=7, echo the content detail by sid */
							$content_sql="SELECT * FROM p_content WHERE sid = ".$sid ;
							$content_query=mysql_query($content_sql,$conn);
							$content_row=mysql_fetch_array($content_query);
							echo $content_row[content];
						}						
				?>
				<?php
					if ($mid==3) {
				?>


				<div id="wPagebottom">
					<?php
						$pagesql = "SELECT * FROM p_newsbase";
						$pageresult = mysql_query($pagesql);
						$rowsNum = mysql_num_rows($pageresult);
						/* get  num of news */

						$pageSize = 6;
						/* set 6 news in 1page*/
						$pageCount = ceil($rowsNum/$pageSize);
						$pageno = $_GET["pageno"];
						$offset=($pageno - 1)*$pageSize;

						if($pageno == "")$pageno = 1;

					?>
					<div id="wPagebox">
						<?php
							if ( $pageno > 1){
								$pageupno=$pageno -1;
							}else{
								$pageupno=$pageno;
							}
							if ( $pageno < $pageCount ) {
								$pagedownno=$pageno+1;
							}else{
								$pagedownno=$pageCount;
							}
						?>
						<div id="wPageup"><a href="wrapper.php?mid=3&sid=7&pageno=<?=$pageupno?>"><img src="css/images/info_Right.png"></a></div>
						<?php
							if($rowsNum <= $pageSize){
								echo "<div id='wPagenum'><a href='#'>1</a></div>";
							}else{
								for($i=1;$i<=$pageCount;$i++)
									echo "<div id='wPagenum'> <a href=\"{$_SERVER['PHP_SELF']}?mid=3&sid=7&pageno={$i}\">{$i}</a> </div>";
							}
						?>
						<div id="wPagedown"><a href="wrapper.php?mid=3&sid=7&pageno=<?=$pagedownno?>"><img src="css/images/info_Left.png"></a></div>
					</div>
				</div>
				
				<?php
				}
				?>
			</div>
		</div>

		<div id="wBottom" style="background:url(css/images/<?=$pageName?>_Bottom.png) no-repeat"></div>
	</body>
</html>