<?php
/**
 * Page Name:user.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is controller class for the CMS.
 */

include_once("Config/database.php"); // database connection

function CheckIfAuthenticated()
{
	if (!isset($_SESSION["is_logged_in"])) {
		// if user is already logged in send him to index
		header('Location: index.php?pageId=Login');
	}

	return true;
}

function isUser()
{
	if (!isset($_SESSION["is_logged_in"])) {
		return false;
	}
	return true;
}

function Login($username, $password)
{
	$messages = ""; // initialize the message variable
	// exception handling - use a try / catch for error exception
	try {
		$db = DBConnection();
		$query = "SELECT password, displayName FROM users 
                  WHERE username = :username"; // SQL  Query statement
		$statement = $db->prepare($query);  // encapsulate the sql statement
		$statement->bindValue(':username', $username);
		$statement->execute(); // Run on the database server
		$hashed_password = $statement->fetch();


		if (password_verify($password, $hashed_password["password"])) { // Password hashing
			$statement->closeCursor(); // close the database connection

			if (session_status() != PHP_SESSION_ACTIVE) {
				session_start();
			}
			$_SESSION["is_logged_in"] = true;
			$_SESSION["displayName"] = $hashed_password["displayName"];

			header('Location: index.php'); // if this is valid then send to index.php
		} else {
			$statement->closeCursor(); // close the database connection
			$messages = "Invalid Username or Password";
		}
	} catch (Exception $e) {
		$messages = $e->getMessage();
	}

	return $messages;
}

function Register($username, $password)  //Registration function
{
	$messages = "";
	$isUserNameUnique = false;
	try {    // exception handling - use a try / catch for error exception
		$db = DBConnection();
		$query = "SELECT * FROM users 
                  WHERE username = :username"; //SQL Query Statement
		$statement = $db->prepare($query); // encapsulate the sql statement
		$statement->bindValue(':username', $username);
		$statement->execute(); // run on the database server
		if ($statement->rowCount() == 1) { // if have a match show error to the user
			$messages = "Invalid Username";
		} else {
			$isUserNameUnique = true; // else it is ok
		}
		$statement->closeCursor(); // close the connection
	} catch (Exception $e) {
		$messages = $e->getMessage();
	}

	if ($isUserNameUnique) {      // if he is uniqueUser is true
		try {
			$db = DBConnection();

			$hashed_password = password_hash($password, PASSWORD_BCRYPT); // hash password
			$displayName = $_POST["displayName"];

			$query = "INSERT INTO users (username, password, displayName) 
					  VALUES (:username, :password, :displayName)"; // SQL Query Statement
			$statement = $db->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->bindValue(':password', $hashed_password);
			$statement->bindValue(':displayName', $displayName);
			$statement->execute();
			$statement->closeCursor();

			$messages = Login($username, $password);
		} catch (Exception $e) {
			$messages = $e->getMessage();
		}
	}
	return $messages;
}

function Logout()
{
	if (session_status() != PHP_SESSION_ACTIVE) {
		session_start();
	}
	if (isset($_SESSION["is_logged_in"])) {
		$_SESSION = Array();
		session_destroy();
		// if that is good then send him to index page
		header('Location: index.php?pageId=Login');
	} else {
		header('Location: index.php');
	}
}
