<?php
// connection string
/**
 * Page Name:database.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is configuration of the database.
 */

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
function DBConnection()
{
	// exception handling - use a try / catch for error exception
	try {

//		Connection to the database
		$dsn = 'mysql:host=sql.computerstudi.es;port= 3306;dbname=gc200335158';
		$Username = 'gc200335158';
		$Password = 'TxL9qDbL';
		// instantiates a new pdo - an db objects
		return new PDO($dsn, $Username, $Password);
	} catch (PDOException $e) {
		$message = $e->getMessage();
		echo "An error occurred: " . $message;
		return null;
	}
}

?>