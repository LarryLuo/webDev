<?php

include_once ('./configs/config.php');
include_once ('./common/smarty/Smarty.class.php');
include_once ('./common/mysql.class.php');
include_once ('./common/action.class.php');

$db = new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);


//***********smarty************
$smarty = new smarty();
$smarty->tmplate_dir     = $smarty_template_dir;
$smarty->compile_dir     = $smarty_compile_dir;
$smarty->config_dir      = $smarty_config_dir;
$smarty->cache_dir       = $smarty_cache_dir;
$smarty->caching         = $smarty_caching;
$smarty->left_delimiter  = $smarty_delimiter[0];
$smarty->right_delimiter = $smarty_delimiter[1];


?>