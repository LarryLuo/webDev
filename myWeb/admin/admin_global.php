<?php
session_start();
include '../common/mysql.class.php';
include '../configs/config.php';
include 'common/page.class.php';
include 'common/action.class.php';
$db = new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);

$uid = $_SESSION[uid];
$shell = $_SESSION[shell];
?>