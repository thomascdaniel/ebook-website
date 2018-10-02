<html>
	<style>
		.e-books
		{
		color:black;
		font-size:50px; 
		text-decoration:none;
		}
		
	</style>
	<body style='background:#404040'>
		
		<div><a href='hom.php' class='e-books'><i>e-books.com</i></a></div>
		
		<table>
			<tr>
				<td align='center'><a href='insert.php' style='text-decoration:none; color:black; background:#707070; font-size:29;'><i>Do you want to edit Author info</i></td>
				<td align='center'><i><a href='book-insert3.php' style='text-decoration:none; color:white; background:#202020; font-size:30; padding-left:293; padding-right:293;'><i>Do you want to edit Book info</i></td>
			</tr>
		</table>
		
		<table height='89%' width='100%'>
			<tr>
				<td>
					<table width='1290' height='530' style='box-shadow:-0 0 35px 0; position:relative;left:18px; background:#505050;'>
						<tr valign='top'>
							<td>	
							
							<table>
								<tr>
									<td>
									<?php
									mysql_connect("localhost", "root", "");
									mysql_select_db("ttt");
				
									$r=mysql_query("select * from author");
									echo "<table cellspacing='25' style='font-size:25'>";
									while($row=mysql_fetch_array($r))
									{
										echo "<tr><td width='270'><a href='book-delete.php?ab=$row[0]' style='color:black; text-decoration:none;'><i><b>$row[1]</a></td>";
									}
									echo "</tr></table>";
									?>
									</td>
				
				<td>
					<table><tr><td style='font-size:50; padding-left:180;'><i><b>Which book do you want to edit?</i></b></td></tr>
				                                    <tr><td style='font-size:50; padding-left:180;'><i><b>You can proceed to do that.</i></b></td></tr></table>
			</tr>
		</table>

<?php
include('fut.php');
?>
