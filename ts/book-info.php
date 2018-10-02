<html>
	<style>
		.e-books
		{
		color:black;
		font-size:50px; 
		text-decoration:none;
		}
		
		.current3
		{
		color:white;
		font-size:25;
		background:#202020;
		padding-left:491px;
		padding-right:491px;
		}
		
		.active3
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
								<div>
									<table>
										<tr>
										<td align='center'><a style='text-decoration:none;' href='book-insert3.php'
											<?php
											if($thispage=="INSERT-BOOK")
												echo "class=current3";
											else
												echo "class=active3";
											?>>
											<i><b>INSERT</b></i></a>
										</td>
							
										<td align='center'><a style='text-decoration:none;' href='book-delete3.php'
											<?php
											if($thispage=="DELETE-BOOK")
												echo "class=current3";
											else
												echo "class=active3";
											?>>
											<i><b>DELETE</b></i></a>
										</td>
									
										<td align='center'><a style='text-decoration:none;' href='book-update3.php'
											<?php
											if($thispage=="UPDATE-BOOK")
												echo "class=current3";
											else
												echo "class=active3";
											?>>
											<i><b>UPDATE</b></i></a>
										</td>
									</tr>
								</table>
							</div>