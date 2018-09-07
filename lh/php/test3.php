<?php
	
//	$a = 10;
//	$b = 30;
//	function fn(){
////		echo $GLOBALS["a"];
//		$GLOBALS["c"] = $GLOBALS["a"] + $GLOBALS["b"];
//	}
//	fn();
//	echo $c;
	
	
//	echo $_SERVER['PHP_SELF']."当前脚本的文件名";
//  echo "<br>";
//  echo $_SERVER['SERVER_NAME']."当前脚本所在服务器的主机名";
//  echo "<br>";
//  echo $_SERVER['HTTP_HOST']."当前请求头中Host:的内容";
//  echo "<br>";
//  echo $_SERVER['HTTP_REFERER']."引导用户到达当前位置的";
//  echo "<br>";
//  echo $_SERVER['HTTP_USER_AGENT']."浏览器信息";
//  echo "<br>";
//  echo $_SERVER['SCRIPT_NAME']."当前脚本的绝对路径";
//  echo "<br>";
//  echo $_SERVER['REMOTE_ADDR']."客户id地址";
//  echo "<br>";
//  echo $_SERVER['REQUEST_URI']."url的路径部分";
	
//	function fn($a){
//		return "hello ".$a;
//	}
//	echo fn("world");
	
//	$a = 10;
//	$b = 20;
//	function fn(){
//		global $a,$b;
//		return $a = $a + $b;
//	}
//	echo fn();
	
//	以下这个函数，是js格式，在当前文件不能执行，此处只是做测试
//	function fn(){
//		var a = 10;
//		return function(){
//			a++;
//			console.log(a)
//		}
//	}
//	var f = fn();
//	f()
//	f()
//	f()
	
	
	
//	function fn(){
//		Static $a=10;
//		$a++;
//		echo $a;
//	}
//	fn();
//	fn();
//	fn();
//	fn();
	
//	php中的索引数组
//	$arr = array("hello","world",true,3.1415);
//	print_r($arr);
//	echo "<br>";
//	echo $arr[0];
//	echo "<br>";
//	echo $arr[1];
//	echo "<br>";
//	echo $arr[2];
//	echo "<br>";
//	echo $arr[3];
//	echo "<br>";
//	echo count($arr);
//	echo "<br>";
//		
//	for($i=0;$i<count($arr);$i++){
//		echo $arr[$i];
//		echo "<br>";
//	}
	
	
	
//	关联数组
//	$arr2 = array("name"=>"admin","sex"=>"1");
//	print_r($arr2);
//	echo "<br>";
//	
//	echo $arr2["name"];
//	echo $arr2["sex"];
//	echo "<br>";
//		
//	foreach($arr2 as $key=>$value){
//		echo $key;
//		echo "<br>";
//		echo $value;
//		echo "<br>";
//	}
	
//	$arr = array(45,22,17,181,77,34);
//	
//	print_r($arr);
//	echo "<br>";
//	rsort($arr);
//	echo "<br>";
//	print_r($arr);
	
	
	
//	留下记号，将来学了js中的class之后，再来看php中的class
//	class show{
//      var $hello = "hello";
//      function showMe(){
//          echo $this->hello . " world";
//      }
//  }
//  $me = new show();
//  $me -> showMe();
//  echo $me -> hello;
	
	
//	$arr2 = array("name"=>"admin","sex"=>"1");
//	print_r($arr2);
//	echo "<br>";
//	echo json_encode($arr2);
	
	echo "你好";
	
?>