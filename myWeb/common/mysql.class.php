<?php

/******
*class mysql
*LarryLuo
*/


	class mysql{

		private $host;
		private $name;
		private $pass;
		private $table;
		private $ut;



		function __construct($host,$name,$pass,$table,$ut){
			$this->host=$host;
			$this->name=$name;
			$this->pass=$pass;
			$this->table=$table;
			$this->ut=$ut;
			$this->connect();
		}

		function connect(){
			$link=mysql_connect($this->host,$this->name,$this->pass) or die ($this->error());
			mysql_select_db($this->table,$link) or die("connect error".$this->table);
			mysql_query("SET NAMES'$this->ut'");
		}

		function query($sql,$type = ''){
			if (!($query = mysql_query($sql)))  $this->show('Say:',$sql);
			return $query;
		}

		
	}
?>