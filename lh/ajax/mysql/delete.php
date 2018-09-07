<?php
	
	$id = $_GET["id"];
	
	include "main.php";
	
	
	$q = mysql_query("DELETE FROM stu WHERE id=".$id);
	
	if($q){
		echo 1;
	}else{
		echo 0;
	}
	
	
?>