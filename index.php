<?php
/**
 * Page Name:index.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is Main index page for the CMS.
 */
include_once('Controllers/user.php');

if (!isset($_GET["pageId"])) {
	if (isUser()) {
		$title = "Dashboard";
		$templateString = 'Views/dashboard.php';
	} else {
		$title = "Home";
		$templateString = 'Views/home.php';
	}
} else {
	switch ($_GET["pageId"]) {
		case "About":
			$title = "About Us";
			$templateString = 'Views/content/about.php';
			break;
		case "Contact":
			$title = "Contact Us";
			$templateString = 'Views/content/contact.php';
			break;
		case "Login":
			$title = "Login";
			$templateString = 'Views/users/login.php';
			break;
		case "Logout":
			include_once("Controllers/user.php");
			Logout();
			$title = "Home";
			$templateString = 'Views/dashboard.php';
			break;
		case "Register":
			$title = "Register";
			$templateString = 'Views/users/register.php';
			break;
		case "PagesList":
			$title = "Pages";
			$templateString = 'Views/pages/list.php';
			break;
		case "PageDetails";
			if ($_GET["pageID"] == 0) {
				$title = "Add Page";
			} else {
				$title = "Edit Page";
			}
			$templateString = 'Views/pages/details.php';
			break;
		case "PageUpdate":
			$title = "Update Page";
			$templateString = 'Views/pages/update.php';
			break;
		case "PageDelete":
			$title = "Delete Page";
			$templateString = 'Views/pages/delete.php';
			break;
		case "PageView":
			$title = "Page View";
			$templateString = 'Views/pages/page.php';
			break;
		default:
			$title = "404";
			$templateString = "Views/errors/404.php";
			break;
	}
}
?>

<?php include_once('Views/partials/header.php'); ?>
<?php include_once('Scripts/pureChat.php'); ?>
<?php include_once('Views/partials/navbar.php'); ?>
<?php require($templateString); ?> <!-- Content -->
<?php include_once('Views/partials/footer.php');
