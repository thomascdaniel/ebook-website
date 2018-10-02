		</td></tr>
		</table>
		</div>
		<div style='background:#000025; padding-bottom:30px'><i>
			<table width='100%' height='82%'>
			<tr>
				<td valign='top' width='19%' style='padding-top:20px;'><a href='hom.php' class='author-name'><i><b>AUTHOR NAME</b></i></a>
	
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
			
		`		</td>
			</tr>
			</table>
		</div>
		<div align='center' style='background:black; color:gray; font-size:25px'><i>DEVELOPED BY:-TUSHAR & THOMAS</i>
		<div align='center' style='background:black; color:gray; font-size:25px'><i>ttebooks@gmail.com</i></div>
	</div>
	
	</body>
</html>