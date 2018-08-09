<?php
// used to connect to the database
$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$db_name = getenv("DB_NAME");
$username = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

try {
	$con = new PDO("mysql:host={$host};dbname={$db_name};port={$port}", $username, $password);
}

// to handle connection error
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
?>
