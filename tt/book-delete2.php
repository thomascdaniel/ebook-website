<?php
	session_start();
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$ab=$_SESSION["ed1"];
	$am=$_GET["n2"];
	
	$sql="delete from info where (no, book)=('$ab', '$am')";
	
	$r=mysql_query($sql);	
	if($r)
	{
	?>
	
	<script>
		window.location.href='book-delete3.php';
	</script><?php
	
	}
	else
	{
	echo mysql_error();
	}
?>
