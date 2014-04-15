<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtmm">

	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="gb2312"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" >
		<link rel="stylesheet" type="text/css" href="css/grid.css" >
		<link rel="stylesheet" type="text/css" href="css/layout.css">

		<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
   		<link rel="stylesheet" href="css/themes/light/light.css" type="text/css" media="screen" />
   		<link rel="stylesheet" href="css/themes/dark/dark.css" type="text/css" media="screen" />
  		<link rel="stylesheet" href="css/themes/bar/bar.css" type="text/css" media="screen" />
   		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
   

		<script src="prefix-free.js"></script>
		
		<script type="text/javascript" src="css/scripts/jquery-1.11.0.min.js"></script>
    	<script type="text/javascript" src="css/scripts/jquery.nivo.slider.js"></script>
    	<script type="text/javascript">
    		$(window).load(function() {
        	$('#slider').nivoSlider();
    		});
    	</script>

		<title>caf3</title>
	</head>
	<body>
		<?php
		include("set/conn.php");
		?>
		<div id="container">
			<div id="banner">
				<div id="bannerButtons">
					<div id="bannerButton"><a href="#"><img src="css/images/b_button 1a.png" onmouseover="this.src='css/images/b_button 1b.png'" onmouseout="this.src='css/images/b_button 1a.png'" /></a></div>
					<div id="bannerButton"><a href="#"><img src="css/images/b_button 2a.png" onmouseover="this.src='css/images/b_button 2b.png'" onmouseout="this.src='css/images/b_button 2a.png'" /></a></div>
					<div id="bannerButton"><a href="#"><img src="css/images/b_button 3a.png" onmouseover="this.src='css/images/b_button 3b.png'" onmouseout="this.src='css/images/b_button 3a.png'" /></a></div>
				</div>
				
				<div class="clearfloat"></div>
				<div id="sliderBar">
					<div class="slider-wrapper theme-default">
            			<div id="slider" class="nivoSlider">
                			<img src="css/images/banner.png" data-thumb="css/images/banner.png" alt="" />
                			<img src="css/images/banner.png" data-thumb="css/images/banner.png" alt="" title="This is an example of a caption" />
                			<img src="css/images/banner.png" data-thumb="css/images/banner.png" alt="" data-transition="slideInLeft" />
                			<img src="css/images/banner.png" data-thumb="css/images/banner.png" alt="" title="#htmlcaption" />
            			</div>
			        </div>
				</div>
			</div>

			<div class="clearfloat"></div>

			<div id="content">
				<div id="nav">
					<div id="navTitle">
					</div>

					<div id="navButtons">
						<div id="navButton"><a href="#"><img src="css/images/e_button 1a.png" onmouseover="this.src='css/images/e_button 1b.png'" onmouseout="this.src='css/images/e_button 1a.png'" /></a></div>
						<div id="navButton"><a href="#"><img src="css/images/e_button 2a.png" onmouseover="this.src='css/images/e_button 2b.png'" onmouseout="this.src='css/images/e_button 2a.png'" /></a></div>
						<div id="navButton"><a href="#"><img src="css/images/e_button 3a.png" onmouseover="this.src='css/images/e_button 3b.png'" onmouseout="this.src='css/images/e_button 3a.png'" /></a></div>
					</div>
					<div id="navButtons">
						<div id="navButton"><a href="#"><img src="css/images/e_button 4a.png" onmouseover="this.src='css/images/e_button 4b.png'" onmouseout="this.src='css/images/e_button 4a.png'" /></a></div>
						<div id="navButton"><a href="#"><img src="css/images/e_button 5a.png" onmouseover="this.src='css/images/e_button 5b.png'" onmouseout="this.src='css/images/e_button 5a.png'" /></a></div>
						<div id="navButton"><a href="#"><img src="css/images/e_button 6a.png" onmouseover="this.src='css/images/e_button 6b.png'" onmouseout="this.src='css/images/e_button 6a.png'" /></a></div>
					</div>

				</div>

				<div class="clearfloat"></div>

				<div id="news">

					<div class="newsLeft">
						<ul>
						<?php
							$sql="SELECT * FROM p_newsbase ORDER BY id DESC LIMIT 0,8";
							$query=mysql_query($sql);
							while ($row=mysql_fetch_array($query)) {
							
						?>
						<li>	
							<a href="#">
								<?=$row['title']?>
							</a>
							<span style="float:right">
								<?=$row['date_time']?>
							</span>
						</li>
						<?php
							}
						?>
					</ul>
					</div>

					<div id="newsRight">
						<div id="newsButton">
							<a href="#"><img src="css/images/newsee_1 temp.png"></a>
						</div>
						<div id="newsButton">
							<a href="#"><img src="css/images/newsee_2 temp.png"></a>
						</div>
						<div id="newsButton">
							<a href="#"><img src="css/images/newsee_3 temp.png"></a>
						</div>
					</div>

				</div>

				<div class="clearfloat"></div>

				<div id="media">

					<div id="mediaUp">
					
						<div id="mediaUpLeft">
							
						</div>


						<div id="mediaUpRight">
							
						</div>

					</div>


					<div id="mediaDown">
						<?php
							$sql="SELECT * FROM p_media ORDER BY id DESC LIMIT 0,10";
							$query=mysql_query($sql);
							while ($row=mysql_fetch_array($query)) {
							
						?>

						<div id="mediaPicArea">	
							<div id="mediaPic">
								<a href=" <?=$row['url']?> ">
									<span style="position:absolute"><?=$row['title']?></span>
									<img src=" <?=$row['sample']?> ">
								</a>
								
							</div>
						</div>

						<?php
							}
						?>
					</div>
				</div>

				<div class="clearfloat"></div>

				<div id="contact">

					<div id="contactLeft">
						
						<div id="contactLeftUp">
						</div>

						<div id="contactLeftDown">
							<div id="contactLeftDown1"></div>
							<div id="contactLeftDown2"></div>
						</div>

					</div>

					<div id="contactRight">
					</div>
				</div>

				<div class="clearfloat"></div>

				<div id="partner">
					<?php
						$sql="SELECT * FROM p_partner ORDER BY id DESC LIMIT 0,21";
						$query=mysql_query($sql);
						while ($row=mysql_fetch_array($query)) {
							
					?>
					<div id="partnerLogo">	
						<a href=" <?=$row['url']?> ">
							<span style="position:absolute"><?=$row['name']?></span><img src=" <?=$row['image']?> ">
						</a>
					</div>
					<?php
						}
					?>
				</div>

				<div class="clearfloat"></div>

			</div>
			
			<div class="clearfloat"></div>

			<div id="footer">
			</div>
		</div>
	</body>
</html>