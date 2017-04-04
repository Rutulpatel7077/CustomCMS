<?php
// connection string

if(session_status() == PHP_SESSION_NONE) {
	session_start();
}

function DBConnection() {
	// exception handling - use a try / catch
	try {

		//local db access
		$dsn = 'mysql:host=localhost;dbname=cmsdb';
		$Username = 'root';
		$Password = 'rutul7077';
		// instantiates a new pdo - an db object
		return new PDO($dsn, $Username, $Password);
	}
	catch(PDOException $e) {
		$message = $e->getMessage();
		echo "An error occurred: " . $message;
		return null;
	}
}
?>