<?php
	
	$user = @$_REQUEST["user"];
	$pass = @$_REQUEST["pass"];
	
	$fnName = @$_REQUEST["_fnName"];
	
	$cb = @$_REQUEST[$fnName];
	
	$a = "admin";
	$b = 12345;
	
	
	if($user == $a && $pass == $b){
		$data = '{"name":"admin"}';
	}else{
		$data = "0";
	}
	
	echo $cb."(".$data.")";
	
	
?>