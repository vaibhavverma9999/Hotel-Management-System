<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #009999;
		padding-top: 30px;
		padding-bottom: 30px;
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
		padding-left: 10px;
		padding-right: 10px;
	}
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: #e6b800;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
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
		<form action="user_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>New User SignUp</b></p></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Name: </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Phone Number: </td>
					<td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Password: </td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Email ID: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">ID Proof: </td>
					<td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Date of birth: </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 28px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div> 
</body>
</html>