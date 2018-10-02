<html>
	<style>
		.e-books
		{
		color:white;
		font-size:50px;
		padding-left:40px;
		text-decoration:none;
		}
		
		.home:hover
		{
		color:blue;
		}
		
		.home
		{
		text-decoration:none;
		color:black;
		}
		
		.privacy:hover
		{
		color:blue;
		}
		
		.privacy
		{
		text-decoration:none;
		color:black;
		}
		
		.about:hover
		{
		color:blue;
		}
		
		.about
		{
		text-decoration:none;
		color:black;
		}
		
		.login:hover
		{
		color:blue;
		}
		
		.login
		{
		text-decoration:none;
		color:black;
		}
		
		.author-name:hover
		{
		color:#707070;
		font-size:30px;
			
		}
		
		.author-name
		{
		color:white;
		font-size:28px;
		padding-left:10;
		text-decoration:none;
		}
		
		.echo-name:hover
		{
		color:white;
		font-size:21;
		}
		
		.echo-name
		{
		text-decoration:none;
		color:gray;
		font-size:20px;
		}
		
	</style>
	<head><title>e-BOOK</title></head>
	
	<body>
		<div style='background:black;'><a href='hom.php' class='e-books'><i>e-books.com</i></a></div>
	
		<table border='0' cellspacing='0' height='2%' width='100%'>
			<tr>
				<td><a href='hom.php' class='home'><b>HOME<b></a></td>
				<td><a href='about.php' class='about'><b>ABOUT<b></a></td>
				<td><a href='privacy.php' class='privacy'><b>PRIVACY<b></a></td>
				<td><a href='login1.php' class='login'><b>LOGIN</b></a></td>
			</tr>
		</table>
	
		<table width='100%' height='82%'>
			<tr>
				<td valign='top' width='19%' style='background:black;'><a href='hom.php' class='author-name'><i><b>AUTHOR NAME</b></i></a>
	
					<?php
					mysql_connect("localhost", "root", "");
					mysql_select_db("ttt");
				
					$r=mysql_query("select * from author");
					
					echo "<table cellspacing='30'><tr>";
					while($row=mysql_fetch_array($r))
					{
						echo "<td><a href='info.php?ab=$row[0]' align='center' class='echo-name'><i><b>$row[1]</i></b></a></td>";
						echo "</tr>";
					}
					echo "</table>";
					?>
			
				</td>
			              
				<td></td>
									
				<td width='80%' valign='top' style='background:gray; font-size:50px'>