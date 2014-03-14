<html>
<body>
<center>
<?php
$link=@mysql_connect('localhost','root','910303Tt');
if(!$link)
echo "fail";
else
echo"success";
mysql_close();
?>
</center>
</body>
</html>
