<?php
	
	include "main.php";
	
	$user = @$_REQUEST["user"];
	$sex = @$_REQUEST["sex"];
	$cmp = @$_REQUEST["cmp"];
	$pen = @$_REQUEST["pen"];
	
	
	$q = mysql_query("INSERT stu (name,sex,cmp,pen) VALUES('".$user."','".$sex."',".$cmp.",".$pen.")");
	
	if($q){
		echo 1;
	}else{
		echo 0;
//		echo mysql_error();
	}
	
	
//	echo "hello";
	
?>