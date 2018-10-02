<html>
	<style>
		.e-books
		{
		color:black;
		font-size:50px; 
		text-decoration:none;
		}
	
		.current
		{
		color:white;
		font-size:25;
		background:#202020;
		padding-left:540px;
		padding-right:540px;
		}
		
		.active
		{
		background:gray;
		color:black;
		font-size:25;
		}
		
	</style>
	<body style='background:#404040'>
		
		<div><a href='hom.php' class='e-books'><i>e-books.com</i></a></div>
		
		<table>
			<tr>
				<td align='center'><a href='insert.php' style='text-decoration:none; color:white; background:#202020; font-size:30; padding-left:293; padding-right:293;'><i>Do you want to edit Author info</i></td>
				<td align='center'><i><a href='book-insert3.php' style='text-decoration:none; color:black; background:#707070; font-size:29;'><i>Do you want to edit Book info</i></td>
			</tr>
		</table>

		<table height='89%' width='100%'>
			<tr>
				<td>
					<table width='1290' height='530' style='box-shadow:-0 0 35px 0; position:relative;left:18px; background:#505050;'>
						<tr valign='top'>
							<td>
								<div>
									<table>
									<tr>
									<td align='center'>
										<a style='text-decoration:none;' href='insert.php' 
											<?php
											if($thispage=="insert")
												echo "class=current";
											else
												echo "class=active";
											?>>
										<i><b>INSERT</b></i></a>
									</td>
							
									<td align='center'>
										<a style='text-decoration:none;' href='delete.php'
											<?php
											if($thispage=="delete")
												echo "class=current";
											else
												echo "class=active";
											?>>
										<i><b>DELETE</b></i></a>
									</td>
									</tr>
									</table>
								</div>