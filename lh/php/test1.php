<?php
//	"hello" + "world"
//	obj.name

//	写PHP代码
//	"hello" . "world"
//	obj->show()
	
	#1.在php中可以使用#号注释
	#2.在php中声明变量不使用var，必须以$开头
	#3.在php中字符串拼接，使用.，不是使用+
	#4.在php中访问对象的属性或方法，对象->属性名
	#5.
	
//	var str = "hello";
//	$str = "world";
	
//	echo "hel<mark>lo wor</mark>ld<br>";
//	echo "hel<mark>lo wor</mark>ld";
	
	$str = "hello";
	$num = 123456;
	$bool = false;
	
	echo $str;
	echo "<br>";
	echo $num;
	echo "<br>";
	echo $bool;
	echo "<br>";
	
	echo gettype($str);
	echo gettype($num);
	echo gettype($bool);
	
	echo var_dump($str);
	
	print var_dump($num);
	
//	die($str);
	
	echo "hahaha";
	echo "<br>";
//	print_r($str);
	echo "<br>";
	
//	分支和循环
//	if(false){
//		echo "ok";
//	}else{
//		echo "no";
//	}
	
//	if(){}
	
//	switch(){}
	
//	for($i=0;$i<10;$i++){
//		echo $i;
//		echo "<br>";
//	}
	
//	$i=0;
//	while($i<10){
//		echo $i;
//		$i++;
//	}
	
	
//	echo "这是第".__LINE__."行";
	
//	echo '该文件位于 " '  . __FILE__ ;
	
//	function testName(){
//      echo __FUNCTION__;
//  }
//  testName();
    
//  class liyang {
//      function admin() {
//          echo '类名为：'  . __CLASS__ . "<br>";
//          echo  '函数名为：' . __FUNCTION__ ;
//      }
//  }
//  $t = new liyang();
//  $t->admin();
    
    

?>

