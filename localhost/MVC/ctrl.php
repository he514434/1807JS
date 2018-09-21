<?php
	
	class Ctrl{
		function myctrl1(){
			
			$m = new Model();
			$data = $m->mymodel3();
			
			$v = new View();
			$v->myview1($data);
			
		}
		function myctrl2(){
			
			$m = new Model();
			$data = $m->mymodel2();
			
			$v = new View();
			$v->myview2($data);
			
		}
		function myctrl3(){
			
			$m = new Model();
			$data = $m->mymodel3();
			
			$v = new View();
			$v->myview3($data);
			
		}
	}
	
?>