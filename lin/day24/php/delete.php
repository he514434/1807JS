<?php
	
	include "link.php";
	
	$id = $_GET["id"];
	
	
	$q = mysql_query("DELETE FROM problem WHERE id=".$id);
 	
   	if($q){
   		echo 1;
   	}else{
   		echo 0;
   	}

?>