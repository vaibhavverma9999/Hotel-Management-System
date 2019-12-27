<html>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["book_id"];
		$sql = "SELECT * from user_room_book";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[15])
			{
				$room = $row[3];
				$sql1 = "SELECT * FROM rooms_count WHERE room_type='$room'";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				if($r[1]>0)
				{
					$r[1] = $r[1] - 1;
					$sql2 = "UPDATE rooms_count SET available_rooms='$r[1]' WHERE room_type='$room'";
					mysqli_query($conn, $sql2);
					$r[2] = $r[2] + 1;
					$sql2 = "UPDATE rooms_count SET occupied_rooms='$r[2]' WHERE room_type='$room'";
					mysqli_query($conn, $sql2);
					$sql2 = "UPDATE user_room_book SET status='Confirmed' WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					$sql2 = "INSERT INTO confirmed_booking VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[14]','$row[15]')";
					mysqli_query($conn, $sql2);
					$sql2 = "DELETE FROM user_room_book WHERE book_id='$bid'";
					mysqli_query($conn, $sql2);
					header("Location: confirm_room1.php");
				}
				else
				{
					header("Location: confirm_room2.php");
				}
			}
		}
	?>
</body>
</html>