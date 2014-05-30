<?php
	$conn = @mysql_connect("localhost","root","910303Tt")||die("error");
	@mysql_select_db("scl-edu")||die("not exits");

	$pagesql = "SELECT * FROM p_newsbase";
	$pageresult = mysql_query($pagesql);
	$rowsNum = mysql_num_rows($pageresult);
	/* get  num of news */

	$pageSize = 3;
	/* set 3 news in 1page*/

	$pageCount = ceil($rowsNum/$pageSize);

	$pageno = $_GET["pageno"];
	$offset=($pageno - 1)*$pageSize;
	$pagesql2 = "SELECT * FROM p_newsbase LIMIT {$offset},{$pageSize}";
	$pageresult2 = mysql_query($pagesql2);

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
			<div id="wPageup"><a href="page.php?pageno=<?=$pageupno?>"><img src="css/images/info_Right.png"></a></div>

			<?php
				if($rowsNum <= $pageSize){
					echo "<div id='wPagenum'><a href='#'>1</a></div>";
				}else{
					for($i=1;$i<=$pageCount;$i++)
						echo "<div id='wPagenum'> <a href=\"{$_SERVER['PHP_SELF']}?pageno={$i}\">{$i}</a> </div>";
				}

			?>
			<div id="wPagedown"><a href="page.php?pageno=<?=$pagedownno?>"><img src="css/images/info_Left.png"></a></div>
		</div>
