<?php
	include "main.php";

	$q = mysql_query("SELECT * FROM stu");
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
