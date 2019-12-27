<html>
<?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$num = $_POST["noofrooms"];
	$r = $_POST["rooms"];
	$sql = "UPDATE rooms_count SET available_rooms = available_rooms-$num WHERE room_type='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_removed1.php");
	}
?>
</html>