<?php
/**
 * Created by PhpStorm.
 * User: Rutul
 * Date: 2017-04-10
 * Time: 5:50 PM
 */
function ProcessEmail($fullName, $emailAddress, $contactNumber, $message)
{
	// If you are using Composer (recommended)
	require 'vendor/autoload.php';
//	Code get from the sendGrid template recommended by SendGrid
	$from = new SendGrid\Email(null, $emailAddress); // use user email address for sending  mail vai sendgrid
	$subject = "Email from Contact Form";
	$to = new SendGrid\Email(null, "rutulpatel7077@gmail.com"); // admin emailaddress

	$message .= "\n \nFull Name:" . $fullName . "\nContact Number: " . $contactNumber; // messages and details for the admin

	$content = new SendGrid\Content("text/plain", $message);
	$mail = new SendGrid\Mail($from, $subject, $to, $content);

	$sg = new \SendGrid("YOUR_API_KEY_SENDGRID"); // API key of sendGrid With private github repo
	// send the mail
	$response = $sg->client->mail()->send()->post($mail);

	return $response->statusCode();
}

?>
