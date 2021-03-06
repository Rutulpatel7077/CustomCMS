<?php
/**
 * Page Name:page.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page template shows pages into the website
 */
require_once('Controllers/page.php');


$pageID = $_GET["pageID"];
$page = GetPageById($pageID);  //select page with using function getPageById

?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
        <h1 class="text-center"><?php echo $page['title'] ?></h1>
        <p class="text-justify"><?php echo $page['content'] ?></p>
        </div>
    </div>
</div>
