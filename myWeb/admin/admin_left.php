<?php
	include 'admin_global.php';
	$r=$db->Get_user_shell_check($uid,$shell);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>admin_left</title>
		<meta http-equiv=Content-Type content="text/html;charset=gb2312">
		<link rel="stylesheet" type="text/css" href="images/private.css">
		<script languange=javascript>
		<!--
		function menu_tree(meval)
		{
			var left_n=eval(meval);
			if(left_n.style.display="none")
				{eval(meval+".style.display='';");}
			else
				{eval(meval+".style.display='none';");}
		}
		-->
		</script>
		<meta content="MSHTML 6.0.6000.16890" name=GENERATOR>
	</head>
	<body>
		<center>
			<table class=Menu cellSpacing=0>
				<tbody>
					<tr>
						<th onClick="javascript:menu_tree('left_1');" align=middle> onclick</th>
					</tr>

					<tr id=left_1>
						<td>
							<table width="100%">
								<tbody>
									<tr>
										<td><img src="images/menu.gif" align=absMiddle border=0>&nbsp;
											<a href="admin_main.php" target=main> click2</a></td>
									</tr>
									<tr>
										<td><img src="images/menu.gif" align=absMiddle border=0>&nbsp;
											<a onClick="return confirm('rutrun confirm')" href="admin_main.php?action=logout" target=_parent>click3</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>


			<table class=Menu cellSpacing=0 style="margin-top:5px">
				<tbody>
					<tr>
						<th onClick="javascript:menu_tree('left_2');" align=middle>click4</th>
					</tr>
					<tr id=left_2>
						<td>
							<table width="100%">
								<tbody>
									<tr>
										<td><img src="images/menu.gif" align=absMiddle border=0>&nbsp;
											<a href="admin_news_class.php" target=main>click5</a>
										</td>
									</tr>
									<tr>
										<td><img src="images/menu.gif" align=absMiddle border=0>&nbsp;
											<a href="admin_news_list.php" target=main>click6</a>
										</td>
									</tr>
									<tr>
										<td><img src="images/menu.gif" align=absMiddle border=0>&nbsp;
											<a href="admin_news_add.php" target=mian>click7</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>

			<table class=Menu cellSpacing=0 style="margin-top:5px">
				<tbody>
					<tr>
						<th align=middle>info1</th>
					</tr>
					<tr>
						<th align=middle>info2</th>
					</tr>
					<tr>
						<th align=middle>info3</th>
					</tr>
				</tbody>
			</table>
			
		</center>
	</body>
</html>