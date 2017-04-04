<?php
/**
 * Page Name:details.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page ask user to make a new page
 */

include_once('Controllers/user.php');
CheckIfAuthenticated();

include_once('Controllers/page.php');

$pageID = $_GET["pageID"]; // assigns the pageID from the URL

if($pageID == 0) {
	$page = null;
	$isAddition = 1;
} else {
	$isAddition = 0;
	$page = GetPageById($pageID);
}

?>

<div class="container">
			<h1>Page Details</h1>
			<form action="index.php?pageId=PageUpdate" method="post">
				<div class="form-group">
					<label for="IDTextField" hidden>Page ID</label>
					<input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
					       placeholder="Page ID" value="<?php echo $page['id']; ?>">
				</div>
				<div class="form-group">
					<label for="TitleTextField">Page Title</label>
					<input type="text" class="form-control" id="TitleTextField"  name="TitleTextField"
					       placeholder="Page Title" required  value="<?php echo $page['title']; ?>">
				</div>
				<div class="form-group">
					<label for="ContentTextField">Page Content</label>
                    <input type="text" class="form-control" id="ContentTextField"  name="ContentTextField"
                           placeholder="Page Content" required  value="<?php echo $page['content']; ?>">
				</div>
				<input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
				<button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
				<a href="index.php?pageId=PagesList">
					<input type="button" class="btn btn-danger" value="Cancel"/>
				</a>

			</form>


</div>


