<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$an=$_POST["n1"]; 
	$ph1="upload/".$_FILES["n2"]["name"];
	
	$r=move_uploaded_file($_FILES["n2"]["tmp_name"],"upload/".$_FILES["n2"]["name"]);
	
	
	$sql="insert into author (Name,photo) values ('$an', '$ph1')";
	$r=mysql_query($sql);	
	if($r)
	{
	?>
	
	<script>
		window.location.href='insert.php';
	</script><?php
	
	}
	else
	{
	echo mysql_error();
	}
?>
