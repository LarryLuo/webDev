<?php
//������Ҫ��session�����ڵ�¼��Ϣ��֤���Ͳ��漰�����ݿ���
//���յ�¼��Ϣ������session
if(!empty($_POST['sub'])){
 if($_POST['username']=="admin" && $_POST['pwd']=="admin"){
  echo "��¼�ɹ�";
  session_start();//����session
  $_SESSION['username'] = $_POST['username'];//����¼�����浽session��
  header("Location: index.php?sid=1");
  exit();
 }else{
  header("Location: login.php?errno=1");
  exit();
 }
}else{
 header("Location: login.php?errno=2");
 exit();
}
?>
