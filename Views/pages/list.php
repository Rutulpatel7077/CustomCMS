<?php
/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-03
 * Time: 9:35 PM
 */

include_once('Controllers/user.php');
CheckIfAuthenticated();

require_once('Controllers/page.php');

$pages = ReadPages();
?>

<div class="container">
    <h1 class="pull-left">Pages List</h1>
    <a class="add-btn btn btn-primary pull-right" href="index.php?pageId=PageDetails&pageID=0">
        <i class="fa fa-plus"></i> Add New Page
    </a>
    <br><br>
    <table class="table-pages table btn-sm table-hover table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th class="col-md-2">Title</th>
            <th class="col-md-8">Content</th>
            <th class="th-action">Actions</th>
        </tr>
        </thead>
        <tbody>
		<?php foreach ($pages as $page) : ?>
            <tr>
                <td><?php echo $page['id'] ?></td>
                <td>
                    <a href="index.php?pageId=PageView&pageID=<?php echo $page['id'] ?>"><?php echo $page['title'] ?></a>
                </td>
                <td><?php echo $page['content'] ?></td>
                <!-- This line sends the pageID to the page_details page -->

                <td>
                    <a class="btn btn-sm btn-primary"
                       href="index.php?pageId=PageDetails&pageID=<?php echo $page['id'] ?>">
                        <i class="fa fa-pencil-square-o"></i> Edit
                    </a>
                    <a class="btn btn-sm btn-danger"
                       href="index.php?pageId=PageDelete&pageID=<?php echo $page['id'] ?>">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>


</div>

