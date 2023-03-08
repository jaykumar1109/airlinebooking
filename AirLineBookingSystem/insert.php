<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("127.0.0.1", "root", "", "userdetails");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$Gender = $_REQUEST['Gender'];
		$Address = $_REQUEST['Address'];
		$Email = $_REQUEST['Email'];
		$Password =$_REQUEST['Password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO authentication VALUES ('$FirstName',
			'$LastName','$Gender','$Address','$Email','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Hii thank you for registering , your data is been stored securely</h3>";

			echo nl2br("\n $FirstName\n $LastName\n "
				. "$Gender\n $Address\n $Email\n $Password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
