<?php
	
	$user = @$_GET["user"];
	
	$_fnName = @$_GET["_fnName"];
	
	$cb = @$_GET[$_fnName];
	
	$data = "这是跨域的php接收到的数据：".$user;
	
	$data = '[{"msg":"'.$data.'"}]';
	
	echo $cb."(".$data.")";
	
	
?>