<?php
/*
 *create on 14.4.11
 *Coder: Larry 
 */
$page = $_GET[page];
if(!function_exists(pageft)){
	function pageft($totle,$displaypg=20,$url=''){
		global $page,$firstcount,$pagenav,$_SERVER;
		$GLOBALS["displaypg"]=$displaypg;
		if(!$page) $page=1;
		if(!$url){ $url=$_SERVER["REQUEST_URL"];}

		$parse_url=parse_url($url);
		$url_query=$parse_url["query"];
		if($url_query){
			$url_query=ereg_replace("(^|&)page=$page","",$url_query);
			$url=str_replace($parse_url["query"],$url_query,$url);
			if($url_query) $url.="&page";else $url.="page";			
		}else {
			$url.="?page";
		}

		$lastpg=ceil($totle/$displaypg);
		$page=min($lastpg,$page);
		$prepg=$page-1;
		$nextpg=($page==$lastpg ? 0 : $page+1);
		$firstcount=($page-1)*$displaypg;


		$pagenav="pagenav <B>".($totle?($firstcount+1):0)."</B>-<B>".min($firstcount+$displaypg,$totle)."</B> pagenav $totle pagenav";

		if($lastpg<=1) return flase;

		$pagenav.=" <a href='$url=1'>page</a> ";
		if($prepg) $pagenav.=" <a href='url=$prepg'>pre</a> "; else $pagenav.="error";
		if($nextpg) $pagenav.="<a href='url=$nextpg'>next</a> "; else $pagenav.="error2";
		$pagenav.="<a href='$url=$lastpg'>pagenavvvv</a> ";


		$pagenav.="word1 <select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
		for($i=1;$i<=$lastpg;$i++){
			if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n"
			else $pagenav.="<option value='$i'>$i</option>\n";
		}
		$pagenav.="</select>what2 $lastpg waht3";
	}
}

?>