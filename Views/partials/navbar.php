<?php
/**
 * Page Name:navbar.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is navigation bar for website.
 * Get Navigatiion Bar from the COMP1006 Lesson 12 repository
 */
?>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Custom CMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<?php
				include_once "links.php";
				?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class=<?php echo ($title == "About Us") ? "active" : "" ?>><a href="index.php?pageId=About">About
                        Us</a></li>
                <li class=<?php echo ($title == "Contact Us") ? "active" : "" ?>><a href="index.php?pageId=Contact">Contact
                        Us</a></li>
                <li class=<?php echo ($title == "Home") ? "active" : "" ?>><a href="index.php"><i
                                class="fa fa-home fa-lg"></i> Home</a></li>
				<?php if (isset($_SESSION["is_logged_in"])) : ?>
                    <li><p class="navbar-text">Welcome, <?php echo $_SESSION["displayName"]; ?></p></li>
                    <li><a href=index.php?pageId=Logout><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
				<?php else: ?>
                    <li class=<?php echo ($title == "Login") ? "active" : "" ?>><a href="index.php?pageId=Login"><i
                                    class="fa fa-sign-in fa-lg"></i> Login</a></li>
				<?php endif ?>
            </ul>
        </div><!-- /.navigation-collapse -->
    </div><!-- /.container-fluid -->
</nav>