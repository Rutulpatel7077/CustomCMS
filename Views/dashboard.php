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
                <li><a href="index.php" class="btn btn-primary">Referesh your Dashboard</a></li>
				<?php if (isset($_SESSION["is_logged_in"])) : ?>
                    <li><a href="index.php?pageId=PagesList" class="btn btn-primary">Your Pages</a></li>
				<?php endif ?>
                <div class="container">
                    <div class="row">
                    </div>
            </ul>
        </div>
    </div>
</div>
<?php include_once('Scripts/pureChat.php'); ?>
<!--This container shows all the pages of your site-->
<div class="container">
    <div class="jumbotron">
        <h2 class="text-center">Your Curret Pages on Site</h2>
        <!--This foreach loop shows all pages into the blockin dashboard-->
		<?php foreach ($pages as $page) : ?>
            <a href="index.php?pageId=PageView&pageID=<?php echo $page['id'] ?>">
                <div class="container"
                     style="width: 30%; display: inline-block; background-color:darkseagreen; margin: 10px; padding: 3px; text-align: center;">
                    <h1><?php echo $page['title'] ?></h1>
                </div>
            </a>
		<?php endforeach; ?>
        <!-- end of foreach loop-->
    </div>
</div>

