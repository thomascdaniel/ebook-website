<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$an=$_POST['n1'];
	
	$sql="delete from author where name='$an'";
	$r=mysql_query($sql);	
	if($r)
	{
	?>
	
	<script>
		window.location.href='delete.php';
	</script><?php
	
	}
	else
	{
	echo mysql_error();
	}
?>
