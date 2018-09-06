<?php
	$link = @mysql_connect("localhost:3306","root","he123123");
	if(!$link){
		echo "连接失败";
		echo mysql_error();
	}

	$a = @mysql_select_db("stu");
	if(!$a){
		echo "选择数据库失败";
		echo mysql_error();
	}

	$b = mysql_query("set names utf8");
	if(!$b){
		echo "设置字符集失败";
		echo mysql_error();
	}
?>
