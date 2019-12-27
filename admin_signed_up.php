<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	$empid = $_POST["empid"];
	$sql = "INSERT INTO admin(adminid, password, empid) VALUES('$user', '$pwd', '$empid')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: admin_signed_up1.php");
	}
	else
	{
		header("Location: admin_signed_up2.php");
	}
?>
</body>
</html>