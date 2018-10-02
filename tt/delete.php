<?php
$thispage="delete";
include('author-info.php');
?>
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
					echo "<tr><td width='270' style='color:black'><i><b>$row[1]</td>";
				}
				echo "</tr></table>";
				?>
			</td>
	
			<td>
				<form action='delete2.php' enctype='multipart/form-data' method='post'>			
					<table align='right' height='450' width='980' cellspacing='35px' style='box-shadow:-0 0 35px 0; position:relative;right:20px;top:10; background:#606060;'>	
						<tr>
							<td>
			
								<table align='center' height='270' width='780' cellspacing='35px' style='box-shadow:-0 0 40px 0; position:relative; background:#707070;'>			
									<tr valign='top'>	
										<td style='font-size:20;'><b>AUTHOR NAME</b></td>
										<td>
											<?php
											echo "<select name='n1'>";
											mysql_connect("localhost", "root", "");
											mysql_select_db("ttt");
				
											$r=mysql_query("select * from author");
											while($row=mysql_fetch_array($r))
											{
												echo "<option>$row[1]</option>";
											}
											echo "</select>"
											?>
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
	
			