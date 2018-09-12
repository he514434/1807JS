<?php
	class People{
		var $name = "admin";
		function show(){
			echo $this->name;
		}
	}
	$p = new People();
	$p->show();

?>