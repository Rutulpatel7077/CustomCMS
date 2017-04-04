<?php
/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-03
 * Time: 9:51 PM
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