<?php
/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-04
 * Time: 12:57 AM
 */
require_once('Controllers/page.php');


$pageID = $_GET["pageID"];
$page = GetPageById($pageID);


?>

<div class="container">
    <div class="row">
        <h1><?php echo $page['title'] ?></h1>
        <p><?php echo $page['content'] ?></p>

    </div>
</div>
