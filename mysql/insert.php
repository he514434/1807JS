<?php

	include "main.php";

	$user = @$_REQUEST["user"];
	$sex = @$_REQUEST["sex"];
	$pen = @$_REQUEST["pen"];


	$q = mysql_query("INSERT stu (name,sex,pen) VALUES('".$user."','".$sex."',".$pen.")");

	if($q){
		echo 1;
	}else{
		echo 0;
//		echo mysql_error();
	}


//	echo "hello";

?>
