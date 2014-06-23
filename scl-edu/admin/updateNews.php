<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="layout.css">
		<script type="text/javascript" src="../css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../ckeditor/ckeditor.js">
			function resize(){
				var cHeight = $("#wRight").height() + 'px';
				document.getElementById("wContent").style.height = cHeight;
			}
		</script>
		<title>scl-edu_admin</title>
	</head>
	
	<body onload="resize()">
	<div id="header">
		<div id="navBar">
			<div id="navLogo"><a href="index.php"><div style="width:219px;height:44px"></div></a></div>
			<div class="navButton">
				<a href="updateNews.php">updateNews</a>
			</div>
			<div class="navButton">
				<a href="editNews">editNews</a>
			</div>
			<div class="navButton">
				<a href="updateMedia">updateMedia</a>
			</div>
			<div class="navButton">
				<a href="editMedia">editMedia</a>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="wContent">
			<form action="" method="post" enctype="multipart/form-data" name="news_info" onsubmit="return CheckPost();">
			<div class="newsbody">
			<ul>
				<li id="n_info" class="news_titlebar">
					<h2>Add news</h2>
				</li>
				<li class="news_block right">
					<label class="news_lable" for="title">
						News Title
					</label>
					<div class="news_input">
						<input class="medium" name="title" type="text">
					</div>
				</li>
				<li class="news_block right">
					<label class="news_lable" for="author">
						News Author
					</label>
					<div class="news_input">
						<input class="medium" name="author" type="text">
					</div>
				</li>
				<li class="news_block right">
					<label class="news_lable" for="keyword">
						Key Word
					</label>
					<div class="news_input">
						<input class="medium" name="keyword" type="text">
					</div>
				</li>
				<li class="news_block long">
					<div class="news_input" style="width:680px;">
						<textarea class="ckeditor" name="newsedit" rows="10" cols="40">
						</textarea>
						<script>
							CKEDITOR.replace('newsedit',{
								filebrowserBrowseUrl:'../ckfinder/ckfinder.html',
								filebrowserImageBrowseUrl:'../ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl:'../ckfinder/ckfinder.html?Tyep=Flash',
								filebrowserUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
								filebrowserImageUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl:'../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
							});
						</script>
					</div>
				</li>

			</ul>


			</div>
			<div class="kidsbutton">
				<input type="image" src="http://yh.tiebeike.com/wp-content/uploads/2013/08/form_submit.png" name="kids_sub" id="kids_sub" value="submit">
			</div>
		</form>
		</div>
	</div>
	</body>
</html>