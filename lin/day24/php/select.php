<?php
	
	include "link.php";
	
	$q = mysql_query("SELECT * FROM problem ");
	 if(!$q){
	 	echo 0;
	 }else{
	 	$str = "";
	 	while($arr = mysql_fetch_assoc($q)){
	 		$str = $str.json_encode($arr).",";
	 	}
	 	echo "[".substr($str,0,-1)."]";
	 }
?>