<?php
	
	$user = @$_GET["user"];
	$pass = @$_GET["pass"];
	
	$a = "admin";
	$b = 123456;
	
	if($user == $a && $pass == $b){
		echo 1;
	}else{
		echo 0;
	}
	
?>