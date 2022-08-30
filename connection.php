<?php

$conn = new mysqli($servername, $username, $password);

try {
	$servername = "dberp.czr48qkizqnc.ap-southeast-1.rds.amazonaws";
	$dbname = "dberp";
	$username = "admin";
	$password = "0881085759Hot";

	$conn = new PDO(
		"mysql:host=$servername; dbname=dberp",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
