<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$pwd = $_POST["password"];
	$sql = "SELECT * from user_login";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($phone==$row[0] && $pwd==$row[1])
    		{
				$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			$sql1 = "INSERT INTO temp_session VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]')";
	    		mysqli_query($conn, $sql1);
    			header("Location: user_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>