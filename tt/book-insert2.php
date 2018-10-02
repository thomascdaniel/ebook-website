<?php
	session_start();
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$ab=$_SESSION["ed1"];
	$an=$_POST["n1"];
	$ph1="books/".$_FILES["n2"]["name"];
	
	$r=move_uploaded_file($_FILES["n2"]["tmp_name"],"books/".$_FILES["n2"]["name"]);
	
	$sql="insert into info (no, book, ebook) values ('$ab', '$an', '$ph1')";	
	$r=mysql_query($sql);	
	
	if($r)
	{
	?><script>
		window.location.href='book-insert3.php';
	</script><?php
	
	}
	else
	{
	echo mysql_error();
	}
?>

	