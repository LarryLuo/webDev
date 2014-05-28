<html>
	<head>
		<meta http-quiv="Content-Type" content="text/html; charset=gb2312">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="css/scripts/jquery-1.11.1.min.js"></script>
		<title>topToolbar</title>
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
							topToolbar.css({'top:-60'});
						}
					};
				});
			});
		</script>
	</head>
	<body>
		<div id="topToolbar"> this is always on top </div>
	</body>
</html>