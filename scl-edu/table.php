<script language=javascript>
	function checkpost()
	{
		if(kids_info.kids_name.value==""){
			alert("enter name!");
			kids_info.kids_name.focus();
			return false;
		}
		if(kids_info.kids_ename.value==""){
			alert("enter ename!");
			kids_info.kids_ename.focus();
			return false;
		}
		if(kids_info.kids_sex.value==""){
			alert("enter sex!");
			kids_info.kids_sex.focus();
			return false;
		}
		if(kids_info.kids_nation.value==""){
			alert("enter nation!");
			kids_info.kids_nation.focus();
			return false;
		}
		if(kids_info.kids_health.value==""){
			alert("enter health!");
			kids_info.kids_health.focus();
			return false;
		}
		if(kids_info.kids_address.value==""){
			alert("enter address!");
			kids_info.kids_address.focus();
			return false;
		}
		var partten = /^1[3,5,8]\d{9}$/;
		var phoneno = kids_info.kids_phone.value; 

		if(partten.test(phoneno)){
			return true;
		}else{
			alert("bushidianhua!!");
			return false;
		}

		if(kids_info.kids_pname.value==""){
			alert("enter pname!");
			kids_info.kids_pname.focus();
			return false;
		}
	}
</script>

		<form action="wrapper.php?mid=4&sid=12&pageno=1" method="post" enctype="multipart/form-data" name="kids_info" onsubmit="return checkpost();">
			<div class="kidsbody">
			<ul>
				<li id="k_info" class="kids_titlebar">
					<h2>Child information</h2>
				</li>

				<li id="k_pic" class="kids_block pic">
					<input name="file" type="file" id="file">
				</li>

				<li id="k_name" class="kids_block right">
					<label class="kids_lable" for="kids_name">
						Name of Child
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_name" type="text">
					</div>
				</li>

				<li id="k_ename" class="kids_block right">
					<label class="kids_lable" for="kids_ename">
						English name
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_ename" type="text">
					</div>
				</li>

				<li id="k_sex" class="kids_block right">
					<label class="kids_lable" for="kids_sex">
						Gender
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_sex" type="text">
					</div>
				</li>

				<li id="k_age" class="kids_block right">
					<label class="kids_lable" for="kids_age">
						Age
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_age" type="text">
					</div>
				</li>

				<li id="k_nation" class="kids_block right">
					<label class="kids_lable" for="kids_nation">
						Nationality
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_nation" type="text">
					</div>
				</li>

				<li id="k_health" class="kids_block right">
					<label class="kids_lable" for="kids_health">
						Helth condition
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_health" type="text">
					</div>
				</li>

				<li id="k_address" class="kids_block long">
					<label class="kids_lable" for="kids_address">
						Address
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_address" type="text">
					</div>
				</li>

				<li id="k_contact" class="kids_titlebar">
					<h2>Contact information</h2>
				</li>

				<li id="k_phone" class="kids_block right">
					<label class="kids_lable" for="kids_phone">
						Cellphone Number
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_phone" type="text">
					</div>
				</li>

				<li id="k_pname" class="kids_block midium">
					<label class="kids_lable" for="kids_pname">
						Parents Name
					</label>
					<div class="kids_input">
						<input class="medium" name="kids_pname" type="text">
					</div>
				</li>
			</ul>
			</div>
			<input type="submit" name="submit" value="Submit" style="float:right;height:50px;width:100px;background:#93CA9B;color:#fff;font-weight:bord;font-size:16px;margin-top:30px;" />
		</form>
<?php
	if((($_FILES["file"]["type"] == "image/jpeg")
		||($_FILES["file"]["type"] == "image/gif")
		||($_FILES["file"]["type"] == "image/pjpeg"))
		&&($_FILES["file"]["size"] < 200000000))
	{
		if($_FILES["file"]["error"] > 0)
		{
			echo "<script type='text/javascript'>alert('upload faild! please check your file');</script>";
		}
		else
		{

			if(file_exists("css/kids/" . $_FILES["file"]["name"])){
			}
			else
			{	
				move_uploaded_file($_FILES["file"]["tmp_name"],"css/kids/" . $_FILES["file"]["name"]);
			}

			include 'conn.php';
			$filename=$_FILES["file"]["name"];

			if(isset($_POST[submit])){
				$kidsinfo_sql="INSERT INTO `p_kidsinfo` (`id`,`name`,`ename`,`age`,`sex`,`nation`,`health`,`address`,`phone`,`pname`,`pic`)"."VALUES (NULL,'$_POST[kids_name]','$_POST[kids_ename]','$_POST[kids_age]','$_POST[kids_sex]','$_POST[kids_nation]','$_POST[kids_health]','$_POST[kids_address]','$_POST[kids_phone]','$_POST[kids_pname]','css/kids/$filename')";
				mysql_query($kidsinfo_sql,$conn);
				echo "<script type='text/javascript'>alert('upload success!');</script>";
			}
		}
	}
?>

