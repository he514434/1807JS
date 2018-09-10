<?php
	
	header("Content-type:text/html;charset=utf8");
	
	$link = @mysql_connect("localhost:3306","root","123456");
	if(!$link){
		echo "链接失败";
		echo mysql_error();
	}
    
    $D = @mysql_select_db("text");
    if(!$D){
		echo "链接失败";
		echo mysql_error();
	}
	
	$C = @mysql_query("set names utf8");
    if(!$C){
		echo "设置失败";
		echo mysql_error();
	}
    
?>