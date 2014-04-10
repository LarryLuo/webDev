<?php

class action extends mysql {
	//user adjust
	public function Get_user_shell($uid,$shell){
		$query = $this->select('p_admin','*','`uid`= \''. $uid .'\'');
		$us= is_array($row = $this->fetch_array($query));
		$shell = $us ? $shell == md5($row[username] . $row[password] . "TKBK"): FALSE;
		return $shell ? $row : NULL;
	}//end shell

	public function Get_user_shell_check($uid,$shell,$m_id = 9){
		if($row=$this->Get_user_shell($uid,$shell)){
			if($row[m_id] <= $m_id){
				return $row;
			}else{
				echo "you dont have permission";
				exit();
			}//end m_id
		}else{
			$this->Get_admin_msg('index.php','please login');
		}
	}//end shell
	//================================

	public function Get_user_ontime($long = '3600'){
		$new_time = mktime();
		$onlinetime = $_SESSION[ontime];
		echo $new_time - $onlinetime;
		if ($new_time - $onlinetime > $long){
			echo "out of time ";
			session_destroy();
			exit();
		}else{
			$_SESSION[ontime] = mktime();
		}
	}

	public function Get_user_login($username,$password){
		$username = str_replace(" ","",$username);
		$query = $this->select('p_admin','*','`username` = \'' . $username . ' \'');
		$us = is_array($row = $this->fetch_array($query));
		;
		$ps = $us ? md5($password) == $row[password] : FALSE;
		if ($ps) {
			$_SESSION[uid] = $row[uid];
			$_SESSION[shell] = md5($row[username] . $row[password] . "TKBK");
			$_SESSION[ontime] = mktime();
			$this->Get_admin_msg('main.php','login success');	
			}else{
				$this->Get_admin_msg('index.php','pass worng');
				session_destroy();
			}
	}

	public function Get_user_out(){
		session_destroy();
		$this->Get_admin_msg('index.php','logout');
	}

	public function Get_admin_msg($url,$show=' show message'){
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xthml1/DTD/xhtml-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"><head>
			<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
			<link rel="stylesheet" herf="css/common.css" type="text/css" />
			<meta http-equiv="refresh" content="2; URL=' . $url . '" />
			<title>info</title>
			</head>
			<body>
			<div id="man_zone">
				<table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" class="table" style="margin-top:100px;">
					<tr>
						<th algin="center" style="background:#cef">info</th>
					</tr>
					<tr>
						<td><p>' . $show . '<br />
						if not jump <br />
							click this <a href="' . $url . '">this </a> .</p></td>
					</tr>
				</table>		
			</div>		
			</body>
			</html>';
		echo $msg;
		exit();
	}

	//================================
} //end class 

?>