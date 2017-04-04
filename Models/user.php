<?php

/**
 * Page Name: user.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This is user class for the CMS.
 */

class User
{
	function __construct($username, $password, $displayName)
	{
		$this->username = $username;
		$this->password = $password;
		$this->displayName  = $displayName;
	}
}
?>