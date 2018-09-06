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

//	增
//	$q = mysql_query("INSERT stu (name,sex,cmp,pen) VALUES('李扬','1',78,77)");
//	if(!$q){
//		echo "插入失败";
//		echo mysql_error();
//	}else{
//		echo "插入成功";
//	}

//	改
//	$q = mysql_query("UPDATE stu SET cmp=55,pen=56 WHERE id=10");
//	if(!$q){
//		echo "修改失败";
//		echo mysql_error();
//	}else{
//		echo "修改成功";
//	}

//	删
//	$q = mysql_query("DELETE FROM stu WHERE id=10");
//	if(!$q){
//		echo "删除失败";
//		echo mysql_error();
//	}else{
//		echo "删除成功";
//	}

//	查
	$q = mysql_query("SELECT * FROM stu");
	if(!$q){
		echo "查询失败";
		echo mysql_error();
	}else{

//		while($arr = mysql_fetch_array($q)){
////			print_r($arr);
//			echo $arr["name"];
//			echo "<br>";
//		}

//		while($arr = mysql_fetch_row($q)){
//			print_r($arr);
////			echo $arr[];
//			echo "<br>";
//		}

//		while($arr = mysql_fetch_assoc($q)){
////			print_r($arr);
////			echo $arr["pen"];
//			echo json_encode($arr);
//			echo "<br>";
//		}

//		while($arr = mysql_fetch_object($q)){
////			print_r($arr);
//			echo $arr->name;
//			echo "<br>";
//		}
	}


	mysql_close($link);


?>
