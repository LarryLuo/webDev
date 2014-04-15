<?php
	include 'admin_global.php';
	if(!empty($_POST[username])&& !empty($_POST[password])) $db->Get_user_login($_POST[username],$_POST[password]);
?>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>
		<meta name='Author' content='Larry'>
		<link rev=MADE href='mailto:luoyuhang89@gmail.com'>
		<title>index page</title>
		<link rel='stylesheet' type='text/css' href='images/private.css'>
		<script> if(self!=top){window.open(self.location,'_top');} </script>
	</head>
	<body>
		<br><br>
			<form action="" method="post">
				<table border=0 cellspaciong=1 align=center class=form>
					<tr>
						<th colspan="2">please login</th>
					</tr>
					<tr>
						<td align="right"> name </td>
						<td> <input type="text" name="username" value="" size="20" maxlength="40"/> </td>
					</tr>
					<tr>
						<td align="right"> password </td>
						<td><input type="password" name="password" value="" size="20" maxlength="40"/> </td>
					</tr>
					<tr>
						<td colspan="2" align="center" heigth="30">
						<input type="submit" name="update" value=" submit" />		
					</td> </form>
					</tr>
				</table>
			
	</body>
</html>