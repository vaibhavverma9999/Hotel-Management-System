<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
</head>
<style>
	div {
		width: 30%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 35%;
		margin-left: 35%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #009999;
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 20px;
	}
	body  {
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: #009999;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<form action="admin_signup.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>Admin SignUp</b></p></td>
				</tr>
				<tr>
					<td>User ID:</td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>