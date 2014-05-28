<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<title>navBar</title>
		<style type="text/css">
			#topToolbar{
				_display:none;
				width: 100%;height: 60px;line-height: 40px;
				background: #101010;
				position: fixed;top: 10px;left: 0; _top:0;
				_position:absolute; _top:expression(documentElement.scrollTop);
			}
		</style>
		<script type="text/javascript" scr="css/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$(window).scroll(function(){
					var topToolbar = $("#topToolbar");
					var headerH = $("#header").outerHeight();
					var scrollTop = $(document).scrollTop();

					if($.browser.msie $$ ($.browser.version == "6.0" ) && !$.support.style){
						if (scrollTop >= headerH){
							topToolbar.show();
						}else if(scrollTop < headerH){
							topToolbar.hide();
						}
					}else{
						if(scrollTop >=headerH){
							topToolbar.css({'top:0'});
						}else if(scrollTop < headerH){
							topToolbar.css({'top:-40'});
						}
					};
				});
			});
		</script>
	</head>
	<body>
		<div id="header"> decault header </div>
		<div id="topToolbar"> Fixd at the top </div>
		<div id="content" style="height:1390px; width:880px;"></div>
	</body>
</html>