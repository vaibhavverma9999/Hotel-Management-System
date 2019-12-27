<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	$sql = "SELECT adminid, password from admin";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==$row[0] && $pwd==$row[1])
    		{
    			header("Location: admin_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>