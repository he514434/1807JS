<?php
	
	$a = "admin";
	$b = "123456";
	
//	$user = $_GET["user"];
//	$pass = $_GET["pass"];
	
//	$user = $_POST["user"];
//	$pass = $_POST["pass"];
	
	$user = @$_REQUEST["user"];
	$pass = @$_REQUEST["pass"];
	
	if($a == $user && $b == $pass){
		echo "ok";
	}else{
		echo "no";
	}
	
?>