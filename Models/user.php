<?php

/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-03
 * Time: 8:35 PM
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