<?php
$thispage="DELETE-BOOK";
include('book-info.php');
session_start();
?>
	<table>
		<tr>
			<td>
				<?php
				mysql_connect("localhost", "root", "");
				mysql_select_db("ttt");
				
				$id=$_GET["ab"];
				$_SESSION["ed1"]=$id;
				
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
				<form action='book-delete2.php' method='get'>			
					<table align='right' height='450' width='980' cellspacing='35px' style='box-shadow:-0 0 35px 0; position:relative;right:20px;top:10; background:#606060;'>	
						<tr>
							<td>
			
								<table align='center' height='270' width='780' cellspacing='35px' style='box-shadow:-0 0 40px 0; position:relative; background:#707070;'>			
									<tr valign='top'>	
										<td style='font-size:20;'><b>BOOK NAME</b></td>
											
										<td>
											<?php
											echo "<select name='n2'>";
											mysql_connect("localhost", "root", "");
											mysql_select_db("ttt");
											
											$ab=$_SESSION["ed1"];
											
											$r=mysql_query("select * from info where no=$ab");
											while($row=mysql_fetch_array($r))
											{
												echo "<option>$row[1]</option>";
											}
											?>
											</select>
										</td>
									</tr>
				
									<tr valign='top'>
										<td></td>
										<script>
											function alert_box()
											{
												alert('successfully deleted');
												location.reload();
											}
										</script>
										<td><input type='submit' onclick='alert_box()' value='Submit'></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
<?php
include('fut.php');
?>
