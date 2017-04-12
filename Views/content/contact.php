<?php
/**
 * Page Name:contact.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is a contact page for user to send mail to the site admin
 * Get some of the idea from the templates of Bootstrap
 */
$messages = ""; // initialize message variable

if (isset($_POST["fullname"])) {
	$fullName = $_POST["fullname"];
	$emailAddress = $_POST["email"];
	$contactNumber = $_POST["contactnumber"];
	$message = $_POST["message"];

	include_once("Controllers/email.php");  //include email.php for sendGrid mail sender

	if (ProcessEmail($fullName, $emailAddress, $contactNumber, $message) == 202) {
		$messages = "Message has been sent"; // if everything is Good
	} else {
		$messages = "Problem sending message";
	}
}
?>

<div class="container">
    <!--    showing messgae to the use-->
	<?php if ($messages != "") : ?>
        <div class="alert alert-warning"><?php echo $messages ?></div>
	<?php endif ?>
    <!--    jumbotron for the contact page-->
    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Contact us
                        <small>Feel free to contact us</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form method="post" action="index.php?pageId=Contact"> <!-- post method for the Contact page-->
                        <div class="form-group">
                            <label for="FullNameTextBox">Full Name:</label>
                            <input type="text" class="form-control" id="FullNameTextBox" name="fullname"
                                   placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="EmailTextBox">Email:</label>
                            <input type="email" class="form-control" id="EmailTextBox" name="email"
                                   placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="ContactNumberTextBox">Contact Number:</label>
                            <input type="tel" class="form-control" id="ContactNumberTextBox" name="contactnumber"
                                   placeholder="Enter Your Contact Number" required>
                        </div>
                        <div class="form-group">
                            <label for="MessageTextArea">Message:</label>
                            <textarea class="form-control" rows="5" id="MessageTextArea" name="message"
                                      placeholder="Enter Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php?pageId=Contact">
                            <input type="button" class="btn btn-warning" value="Cancel"/>
                        </a>
                    </form>
                    <!--end of form-->
                </div>
            </div>

            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                    <address>
                        <strong>Guuju Boy</strong><br>
                        2 Kozlov St, 402 Apartment<br>
                        Barrie, ON L4N5A1<br>
                        <abbr title="Phone">
                            P:</abbr>
                        (647) 470-7728
                    </address>
                    <address>
                        <strong>Rutul Patel</strong><br>
                        <a href="mailto:#">rutulpatel7077@gmail.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>
