<?php
/**
 * Page Name:login.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is login page for website which user can use for login.
 */

if (isset($_POST["username"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	include_once("Controllers/user.php");

	$messages = Login($username, $password);
} else {
	$messages = "";
}

$title = "Login";
?>

<main class="container">
	<?php if ($messages != "") : ?>
        <div class="alert alert-danger"><?php echo $messages ?></div>
	<?php endif ?>

    <?php
    include_once("Scripts/facebook.php");
    ?>

    ?>
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <br>
            <h1 class="text-center">Please Login</h1>
            <br>
            <form method="post" action="index.php?pageId=Login">
                <input placeholder="username" type="text" class="form-control" name="username" required autofocus/><br>
                <input placeholder="password" type="password" class="form-control" name="password" required/><br>
                <input type="submit" class="btn btn-success btn-block" value="Log In"/><br>
                <p class="text-center">or <a href="index.php?pageId=Register">New User? Register Now</a></p><br>
            </form>
        </div>
    </div>
</main>
