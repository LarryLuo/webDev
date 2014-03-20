<?php
	class action extends mysql{
		public fuction get_show_msg($url,$show = 'action done!')
			{
				$msg = '<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
				"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
						<link rel="stylesheet" href="Public/common.css" type="text/css"/>
						<meta http-equiv="refresh" content="2; url=' . $url . '"/>
						<title>info</title>
					</head>
					<body>
						<div id="man_zone">
							<table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" class="table"
							style="margin-top=100px;">
								<tr>
									<th align="center" style="background:#cef">info</th>
								</tr>
								<tr>
									<td>
										<p>' . $show . '<br />
											will back in 2sec!  <br />
											if the browser not jump ,
											<a href="' . $url . '">please click here</a>.
										</p>
									</td>
								</tr>
							</table>
						</div>
					</body>
				</html>
				';
				echo $msg;
				exit();
			}
	} //end class
?>