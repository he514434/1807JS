<?php
	
	$user = @$_GET["user"];
	
	$a = "admin";
	
	if($user == $a){
//		echo "1,这是接收到的数据".$user;
		echo '{"name:"admin"}';
	}else{
		echo "0,这是接收到的数据".$user;
	}
	
?>