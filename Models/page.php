<?php

/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-03
 * Time: 8:35 PM
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