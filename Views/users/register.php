<?php
/**
 * Page Name:register.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is for registration
 */

$messages = "";
$isUserNameUnique = false;

include_once('Models/user.php');

if (isset($_POST["username"])) {

	include_once('Config/database.php');

	$username = $_POST["username"];
	$password = $_POST["password"];
	include_once("Controllers/user.php");
	// TODO: Checking user name  is already register or not

	$messages = Register($username, $password);
} else {
	$messages = "";
}

$title = "Register";

?>

<!-- Render the Registration form  -->
<main class="container">
    <!-- Display flash messages  -->
	<?php if ($messages != "") : ?>
        <div class="alert alert-danger"><?php echo $messages ?></div>
	<?php endif ?>

    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <br>
            <h1 class="text-center">Register To Make Websites</h1>
            <br>
            <form method="post" action="index.php?pageId=Register">
                <input placeholder="username" name="username" type="text" class="form-control" required autofocus/><br>
                <input placeholder="password" name="password" type="password" class="form-control" required/><br>
                <input placeholder="display name" name="displayName" type="text" class="form-control" required/><br>
                <input type="submit" class="btn btn-success btn-block" value="Submit"/><br>
                <p class="text-center">or <a href="index.php?pageId=Login">Already Registered? Login Now</a></p><br>
            </form>
        </div>
    </div>
</main>
