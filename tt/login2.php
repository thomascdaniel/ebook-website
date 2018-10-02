<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$nm=$_POST['a1'];
	$ps=$_POST['a2'];
	
	$sql="select * from login where name='$nm' and password='$ps'";
	$r=mysql_query($sql);
	
	if($row=mysql_fetch_array($r))
	{
		header('location:insert.php');
	}
	else
	{
		header('location:login1.php');
	}
?>