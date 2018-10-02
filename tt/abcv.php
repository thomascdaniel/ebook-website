<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$an=$_POST["n1"]; 
	
	$r=mysql_query("select * from author where name=$an");
	
	
	$r=mysql_query($sql);	
	if($r)
	{
?>
