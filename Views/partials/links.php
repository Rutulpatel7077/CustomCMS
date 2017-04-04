<?php
/**
 * Page Name:contact.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page provides link of all pages.
 */

include_once('Controllers/user.php');
require_once('Controllers/page.php');

$pages = ReadPages();
?>

<?php foreach ($pages as $page) : ?>
    <li><a href="index.php?pageId=PageView&pageID=<?php echo $page['id'] ?>"><?php echo $page['title'] ?></a></li>
<?php endforeach; ?>
