<?php
	
	include "main.php";
	
	$user = @$_REQUEST["user"];
	$sex = @$_REQUEST["sex"];
	$cmp = @$_REQUEST["cmp"];
	$pen = @$_REQUEST["pen"];
	
	
	$q = mysql_query("INSERT stu (name,sex,cmp,pen) VALUES('".$user."','".$sex."',".$cmp.",".$pen.")");
	
	if($q){
		echo "<script>alert('insert success');location.href='show.php';</script>";
	}else{
		echo "<script>alert('insert error');location.href='index.html';</script>";
	}
	
?>