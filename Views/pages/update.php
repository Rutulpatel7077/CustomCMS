<?php
/**
 * Page Name:update.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page will update the database for pages
 */

include_once('Controllers/user.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/page.php');

$isAddition = filter_input(INPUT_POST, "isAddition");
$pageTitle = filter_input(INPUT_POST, "TitleTextField"); //$_POST["NameTextField"];
$pageContent = filter_input(INPUT_POST, "ContentTextField"); //$_POST["CostTextField"];

if($isAddition == "1") {
	CreatePage($pageTitle, $pageContent);
}
else {
	$pageID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
	UpdatePage($pageID, $pageTitle, $pageContent);
}
// redirect to index page
header('Location: index.php?pageId=PagesList');
?>