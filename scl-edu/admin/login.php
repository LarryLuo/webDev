<h2>�û���¼ҳ��</h2>
	<form action="loginProcess.php" method="post">
	�û�����<input type="text" name="username"><br />
	��&nbsp;&nbsp;�룺<input type="password" name="pwd"><br />
	<input type="submit" name="sub" value="��¼��̨">
	</form>
<?php
if(!empty($_GET['errno'])){
 if($_GET['errno']==1){
  echo "�û������������";
 }else if($_GET['errno']==2){
  echo "�������û�������";
 }else if($_GET['errno']==3){
  echo "�Ƿ����ʣ��������û���������";
 }
}
?>
