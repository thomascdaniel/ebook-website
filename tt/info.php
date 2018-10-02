<?php
include('head.php');
?>

	<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$ab=$_GET["ab"];
				
	$r=mysql_query("select * from author where no=$ab");
		
	while($row=mysql_fetch_array($r))
	{
		echo "<b><i style='padding-left:20'>$row[1]</b>";
		echo "<img src='$row[2]' height='250px' width='200px' align='right'>";
	}
	?>
	
	<style>
	
		.row1:hover
		{
		color:black;
		}
		
		.row1
		{
		color:#303030;
		font-size:20;
		padding-left:20;
		text-decoration:none;
		}
	
	</style>
	
	<?php
	mysql_connect("localhost", "root");
	mysql_select_db("ttt");
	
	$ab=$_GET["ab"];
	
	$r=mysql_query("select * from info where no=$ab");
	
	echo "<table cellspacing='20' style='padding-top:30'><tr>";
	
	while($row=mysql_fetch_array($r))
	{
		echo "<td class='row1'><i>$row[1]<i></td>";
		echo "<td><a href='$row[2]' style='padding-left:150' target='null'><input type='button' value='Read Online'>";
		echo "</a></td></tr>";
	}
	echo "</table>";
	?>

<?php
include('foot.php');
?>