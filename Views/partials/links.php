<?php
/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-03
 * Time: 9:35 PM
 */

include_once('Controllers/user.php');
require_once('Controllers/page.php');

$pages = ReadPages();
?>

<?php foreach($pages as $page) : ?>
	<li><a href="index.php?pageId=PageView&pageID=<?php echo $page['id'] ?>"><?php echo $page['title'] ?></a></li>
<?php endforeach; ?>
