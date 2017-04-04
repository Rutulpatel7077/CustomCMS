<?php
include_once('Controllers/user.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/page.php');

$pageID = $_GET["pageID"]; // assigns the pageID from the URL

if($pageID != false) {
	DeletePage($pageID);
}

// redirect to index page
header('Location: index.php?pageId=PagesList');

?>