<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">

	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" >
		<link rel="stylesheet" type="text/css" href="css/grid.css" >
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script src="prefix-free.js"></script>
		<title>caf3</title>
	</head>
	<body>
		<?
		include("set/conn.php");
		?>
		<div id="container">
			<div id="banner">
				this is the banner
			</div>
			<div class="clearfloat"></div>
			<div id="nav">
				<nav>
					<ul class="menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">Instruction</a>
								<ul>
									<li><a href="#">Instruction</a></li>
									<li><a href="#">Sruction</a></li>
									<li><a href="#">Tickets</a></li>
									<li><a href="#">Shinya</a></li>
								</ul>
							</li>
							<li><a href="#">Information</a>
								<ul>
									<li><a href="#">News</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Pics</a></li>
									<li><a href="#">Media</a></li>
								</ul>
							</li>
							<li><a href="#">Guide</a>
								<ul>
									<li><a href="#">Schedual</a></li>
									<li><a href="#">Map</a></li>
									<li><a href="#">Transport</a></li>
									<li><a href="#">CompanyGuide</a></li>
									<li><a href="#">Doujin</a></li>
								</ul>
							</li>
							<li><a href="#">Event</a>
								<ul>
									<li><a href="#">Game Stage</a></li>
									<li><a href="#">Cosplay Stage</a></li>
									<li><a href="#">Live Stage</a></li>
								</ul>
							</li>
					</ul>
				</nav>
			</div>
			<div class="clearfloat"></div>
			<div id="upContent">
				<div id="news">
					<ul>
						<?
							$sql="SELECT * FROM news ORDER BY id DESC LIMIT 0,6";
							$query=mysql_query($sql);
							while ($row=mysql_fetch_array($query)) {
							
						?>
						<li>
							<span>
								<?=$row['add_time']?>
							</span>
							<a href="#">
								<?=$row['title']?>
							</a>
						</li>
						<?}?>
					</ul>
				</div>
				<div id="struct">
					this is the struction 
				</div>
			</div>
			<div class="clearfloat"></div>
			<div id="downContent">
				<div id="pics">
					here are the pics
				</div>
				<div id="logos">
					here are logos
				</div>
			</div>
			<div class="clearfloat"></div>
			<div id="footer">
				here is the footer
			</div>
		</div>
	</body>
</html>