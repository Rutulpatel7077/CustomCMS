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

// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");

	$from = new SendGrid\Email(null, $emailAddress);
	$subject = "Email from Contact Form";
	$to = new SendGrid\Email(null, "rutulpatel7077@gmail.com");

	$message .= "\n \nFull Name:" . $fullName . "\nContact Number: " . $contactNumber;

	$content = new SendGrid\Content("text/plain", $message);
	$mail = new SendGrid\Mail($from, $subject, $to, $content);



	$apiKey = getenv('SENDGRID_API_KEY');
	$sg = new \SendGrid($apiKey);
//	$apiKey = $_ENV["SENDGRID_API"];
//	require '../sendGridAPI.php';
//	$sg = new \SendGrid("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");

	// send the mail
	$response = $sg->client->mail()->send()->post($mail);


	return $response->statusCode();
}


?>