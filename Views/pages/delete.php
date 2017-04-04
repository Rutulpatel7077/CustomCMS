<?php
/**
 * Page Name:delete.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page delete the page from database
 */

include_once('Controllers/user.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/page.php');

$pageID = $_GET["pageID"]; // assigns the pageID from the URL

if ($pageID != false) {
	DeletePage($pageID);
}

// redirect to index page
header('Location: index.php?pageId=PagesList');

?>