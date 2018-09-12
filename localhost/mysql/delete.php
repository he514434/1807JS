<?php
	
	$id = $_GET["id"];
	
	include "main.php";
	
	
	$q = mysql_query("DELETE FROM stu WHERE id=".$id);
	
	if($q){
		echo "<script>alert('delete success');location.href='show.php';</script>";
	}else{
		echo "<script>alert('delete error');location.href='show.php';</script>";
	}
	
	
?>