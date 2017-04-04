<?php
/**
 * Page Name:dashboard.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is dashboard for admin user.
 */
?>
<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <ul class="dashboard-menu">
                <li><a href="index.php">Dashboard</a></li>
				<?php if (isset($_SESSION["is_logged_in"])) : ?>
                    <li><a href="index.php?pageId=PagesList">Pages List</a></li>
				<?php endif ?>
            </ul>
        </div>
    </div>
</div>
<?php include_once('Scripts/pureChat.php'); ?>