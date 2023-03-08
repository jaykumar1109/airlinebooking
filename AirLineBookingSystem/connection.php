<?php

$conn = "";

try {
	$servername = "127.0.0.1";
	$dbname = "userdetails";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=userdetails",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
