<html>
	<style>
		.body
		{
		background-image:url(images/19.jpg);
		background-size:cover;
		}
		
		.e-books
		{
		color:black;
		font-size:50px;
		padding-left:40px;
		text-decoration:none;
		}
		
		.user-name
		{
		color:#505050;
		font-size:20px;
		padding-left:40px;
		padding-top:30;
		}
		
		.password
		{
		color:#505050;
		font-size:20px;
		padding-left:40;
		padding-top:30;
		}
		
		.submit
		{
		padding-left:40; 
		padding-top:30
		}
		
		.user
		{
		font-size:16px;
		width:190;
		background:transparent; 
		}

		.pass
		{
		font-size:16px;
		width:190;
		background:transparent;
		}
		
		.submit1
		{
		background:transparent;
		}
		
		.guest:hover
		{
			color:black;
		}
		.guest
		{
		text-decoration:none;
		color:#303030;
		}
	</style>
	<body class='body'>
	<div><a href='about.php' class='e-books'><i>e-books.com</i></a></div>
	
	<form action='login2.php' method='post'>
		
		<table height='35%' width='100%'>
			
			<tr height='30px'></tr>
			
			<tr valign='top'>
				<td width='150px' height='40px' class='user-name'><b>USER NAME</b></td>
				<td style='padding-top:30'><input type='text' name='a1' placeholder='User Name' required class='user'></td>
			</tr>
			
			<tr height='40px'>
				<td class='password'><b>PASSWORD</b></td>
				<td style='padding-top:30'><input type='password' name='a2' placeholder='********' required minlength='3' class='pass'></td>
			</tr>
			
			<tr valign='top'>
				<td class='submit'><input type='submit' class='submit1'></td>
			</tr>
		</table>
			
				<div valign='top' style='font-size:30;padding-left:35'><i><b><a href='hom.php' class='guest'>visit as a guest</div>	
	</form>	
	</body>
</html>