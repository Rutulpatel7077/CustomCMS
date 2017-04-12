<?php
/**
 * Page Name: page.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is a controllers and all the functions for CMS
 */
include_once("Config/database.php"); // config database

function _executeAndClose($statement)
{
	$statement->execute(); // run on the db server
	$statement->closeCursor(); // close the connection
}

function CreatePage($pageTitle, $pageContent)  // function for creating page and insert value into database
{
	$db = DBConnection();
	$query = "INSERT INTO pages (title, content) VALUES (:page_title, :page_content)"; //SQL Query for database
	$statement = $db->prepare($query); // encapsulate the sql statement
	$statement->bindValue(':page_title', $pageTitle);
	$statement->bindValue(':page_content', $pageContent);
	_executeAndClose($statement);
}

function ReadPages()// function for selecting and page confirmation
{
	$db = DBConnection();
	$query = "SELECT * FROM pages"; // SQL statement
	$statement = $db->prepare($query); // encapsulate the sql statement
	$statement->execute(); // run on the db server
	$pages = $statement->fetchAll(); // returns an array
	$statement->closeCursor(); // close the connection
	return $pages;
}

function UpdatePage($pageID, $pageTitle, $pageContent) // function for updatePage
{
	$db = DBConnection();
	$query = "UPDATE pages SET title = :page_title, content = :page_content WHERE id = :page_id "; // SQL Query statement
	$statement = $db->prepare($query); // encapsulate the sql statement
	$statement->bindValue(':page_id', $pageID);
	$statement->bindValue(':page_title', $pageTitle);
	$statement->bindValue(':page_content', $pageContent);
	_executeAndClose($statement);
}

function GetPageById($pageId) // function for identifying page from id
{
	$db = DBConnection(); // Database Connection
	$query = "SELECT * FROM pages WHERE id = :page_id "; // SQL statement
	$statement = $db->prepare($query); // encapsulate the sql statement
	$statement->bindValue(':page_id', $pageId);
	$statement->execute(); // run on the db server
	$page = $statement->fetch(); // returns only one record
	$statement->closeCursor(); // close the connection
	return $page;
}

function DeletePage($pageId)  // function for the Deleting page with use functionId
{
	$db = DBConnection(); // Database Connection
	$query = "DELETE FROM pages WHERE id = :page_id ";
	$statement = $db->prepare($query);
	$statement->bindValue(":page_id", $pageId);
	_executeAndClose($statement);
}

?>
