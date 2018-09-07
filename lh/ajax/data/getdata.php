<?php
	
	$name = @$_GET["user"];
	$pass = @$_GET["pass"];
	
	$a = "liyang";
	$b = "123456";
	
	if($name == $a && $pass == $b){
		echo '{"name":"admin","age":18}';
	}else{
		echo 0;
	}
	
//	echo "php接收到一个名字是：".$name;
//	echo "php接收到一个密码是：".$pass;
	
//	echo '{"name":"admin","age":18}';
	
	
?>