<?php
include 'admin_global.php';

$r=$db->Get_user_shell_check($uid,$shell);

if($_GET[action]=='logout')$db->Get_user_out();
	
	$query=$db->findall("p_config");
	while($row=$db->fetch_array($query)){
		$row_arr[$row[name]]=$row[values];
	}

	if(isset($_POST['update'])){
		unset($_POST['update']);
		foreach ($_POST as $name => $values) {
			$db->query("update p_config set `values`='$values' where `name`=$'name'");
		}
		$db->Get_admin_msg("admin_main.php");
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head><title>admin main</title>
		<meta http-equiv=Content-Type content="text/html; charset=gb2312">
		<meta name=Auther content=Larry>
		<link rev=MADE href="mailto:luoyuhang90@gmail.com">
		<link href="images/private.css" type=text/css rel=stylesheet>
		<meta content="MSHTML 6.0.6000.16890" name=GENERATOR>
	</head>
	<body>
		<table class=navi cellSpaceing=1 align=center border=0>
			<tbody>
				<tr>
					<form action="" method="post">
						<th>wor1 >> wor2</th>
				</tr>
			</tbody>
		</table>
		<br>
		<table border=0 cellspacing=1 align=center class=form>
			<tr>
				<th colspan="2"> tr1 </th>
			</tr>	
			<tr>
				<td align="right">tr2</td>
				<td><input type="text" name="websitename" value="<?php echo $row_arr[websitename]?>"/> </td>
			</tr>
			<tr>
				<td align="right">tr3</td>
				<td><input type="text" name="website_url" value="<?php echo $row_arr[website_url]?>"/> </td>
			</tr>
			<tr>
				<td align="right">tr4</td>
				<td><input type="text" name="website_keyword" size=40 value="<?php echo $row_arr[website_keyword]?>"/> </td>
			</tr>
			
		</table>





	</body>
</html>