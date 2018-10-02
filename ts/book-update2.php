<?php
	session_start();
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$ab=$_SESSION["ed1"];
	$an=$_POST["n1"];
	$am=$_POST["n2"];
	
	$sql="update info set book=('$am') where book=('$an')";	
	$r=mysql_query($sql);	
	if($r)
	{
	?>
	
	<script>
		window.location.href='book-update3.php';
	</script><?php
	
	}
	else
	{
	echo mysql_error();
	}
?>
