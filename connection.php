<?php

$conn = new mysqli($servername, $username, $password);

try {
	$servername = "dberp.czr48qkizqnc.ap-southeast-1.rds.amazonaws.com";
	$dbname = "dberp";
	$username = "admin";
	$password = "0881085759Hot";

	$conn = new PDO(
		"mysql:host=$servername; dbname=dberp.czr48qkizqnc.ap-southeast-1.rds.amazonaws.com",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
