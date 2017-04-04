<?php
/**
 * Page Name: page.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is Model class for pages.
 */
class Page
{
	function __construct($title, $content, $slug)
	{
		$this->title = $title;
		$this->content = $content;
		$this->slug = $slug;
	}
}

?>