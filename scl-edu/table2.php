<script language=javascript>
	function checkpost()
	{
		if(zhaopin.zp_name.value==""){
			alert("请输入姓名 please input name");
			zhaopin.zp_name.focus();
			return false;
		}
		if(zhaopin.zp_sex.value==""){
			alert("请输入性别 please input gender");
			zhaopin.zp_sex.focus();
			return false;
		}
		if(zhaopin.zp_age.value==""){
			alert("请输入年龄 please input age");
			zhaopin.zp_age.focus();
			return false;
		}
		if(zhaopin.zp_pos.value==""){
			alert("请输入应聘职位 please input applied postion");
			zhaopin.zp_pos.focus();
			return false;
		}
		if(zhaopin.zp_education.value==""){
			alert("请输入学位 please input your education");
			zhaopin.zp_education.focus();
			return false;
		}
		if(zhaopin.zp_major.value==""){
			alert("请输入专业 please input your major");
			zhaopin.zp_major.focus();
			return false;
		}
		var partten = /^1[3,5,8]\d{9}$/;
		var phoneno = zhaopin.zp_phone.value; 

		if(partten.test(phoneno)){
			return true;
		}else{
			alert("请输入正确的手机号码 please input a right cell phone number");
			return false;
		}

		if(zhaopin.zp_teaching.value==""){
			alert("请输入教龄 plesase input your teaching time");
			zhaopin.zp_teaching.focus();
			return false;
		}
	}
</script>

		<form action="wrapper.php?mid=4&sid=13&pageno=1" method="post" enctype="multipart/form-data" name="zhaopin" onsubmit="return checkpost();">
			<div class="kidsbody">
			<ul>
				<li id="z_info" class="kids_titlebar">
					<h2>基本信息 basic information</h2>
				</li>

				<li id="z_pos" class="kids_block right">
					<label class="kids_lable" for="zp_pos">
						应聘职位 applied position
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_pos" type="text">
					</div>
				</li>

				<li id="z_name" class="kids_block right">
					<label class="kids_lable" for="zp_name">
						姓名 name
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_name" type="text">
					</div>
				</li>

				<li id="z_sex" class="kids_block right">
					<label class="kids_lable" for="zp_sex">
						性别 gender
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_sex" type="text">
					</div>
				</li>

				<li id="z_age" class="kids_block right">
					<label class="kids_lable" for="zp_age">
						年龄 age
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_age" type="text">
					</div>
				</li>

				<li id="z_major" class="kids_block right">
					<label class="kids_lable" for="zp_major">
						专业 major
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_major" type="text">
					</div>
				</li>

				<li id="z_education" class="kids_block right">
					<label class="kids_lable" for="zp_education">
						学历 education
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_education" type="text">
					</div>
				</li>

				<li id="z_teaching" class="kids_block right">
					<label class="kids_lable" for="zp_teaching">
						教龄 teaching age
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_teaching" type="text">
					</div>
				</li>

				<li id="z_english" class="kids_block right">
					<label class="kids_lable" for="zp_english">
						英语水平 English level
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_english" type="text">
					</div>
				</li>
				
				<li id="z_pc" class="kids_block right">
					<label class="kids_lable" for="zp_pc">
						计算机水平 computer level
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_pc" type="text">
					</div>
				</li>


				<li id="z_intro" class="kids_block long">
					<label class="kids_lable" for="zp_intro">
						请用一句话介绍自己 introduce yourself in one sentence
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_intro" type="text">
					</div>
				</li>

				<li id="z_contact" class="kids_titlebar">
					<h2>联系信息 Contact information</h2>
				</li>

				<li id="z_phone" class="kids_block right">
					<label class="kids_lable" for="zp_phone">
						手机号码 Cellphone Number
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_phone" type="text">
					</div>
				</li>

				<li id="z_address" class="kids_block midium">
					<label class="kids_lable" for="zp_address">
						联系地址 address
					</label>
					<div class="kids_input">
						<input class="medium" name="zp_address" type="text">
					</div>
				</li>
			</ul>
			</div>
			<input type="submit" name="submit" value="Submit" style="float:right;height:50px;width:100px;background:#93CA9B;color:#fff;font-weight:bord;font-size:16px;margin-top:30px;" />
		</form>
<?php
	include 'conn.php';
	if(isset($_POST[submit])){
	$zp_sql="INSERT INTO `p_zp` (`id`,`name`,`sex`,`age`,`major`,`education`,`pc`,`english`,`teaching`,`pos`,`address`,`phone`,`intro`)"."VALUES (NULL,'$_POST[zp_name]','$_POST[zp_sex]','$_POST[zp_age]','$_POST[zp_major]','$_POST[zp_education]','$_POST[zp_pc]','$_POST[zp_english]','$_POST[zp_teaching]','$_POST[zp_pos]','$_POST[zp_address]','$_POST[zp_phone]','$_POST[zp_intro]')";
	mysql_query($zp_sql,$conn);
	echo "<script type='text/javascript'>alert('提交成功');</script>";
	}
?>

