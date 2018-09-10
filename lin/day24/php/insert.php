<?php
	
	include "link.php";
	
	$content = $_REQUEST["content"];
	$where = $_REQUEST["where"];
	$want = $_REQUEST["want"];
	
    $q = mysql_query("INSERT problem (content,where,want) VALUES('".$content."','".$where."','".$want."')");
    
    if($q){
        echo 1;
    }else{
    	echo 0;
        echo mysql_error();
    }


?>