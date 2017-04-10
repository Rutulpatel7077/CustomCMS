<?php
$messages = "";

if(isset($_POST["fullname"])) {
	$fullName = $_POST["fullname"];
	$emailAddress = $_POST["email"];
	$contactNumber = $_POST["contactnumber"];
	$message = $_POST["message"];

	include_once("Controllers/email.php");

	if(ProcessEmail($fullName, $emailAddress, $contactNumber, $message) == 202) {
		$messages = "Message has been sent";
	}
	else {
		$messages = "Problem sending message";
	}
}

?>


<div class="container">
	<?php if ($messages != "") : ?>
        <div class="alert alert-warning"><?php echo $messages ?></div>
	<?php endif ?>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Contact Us</h1>

            <form method="post" action="index.php?pageId=Contact">
                <div class="form-group">
                    <label for="FullNameTextBox">Full Name:</label>
                    <input type="text" class="form-control" id="FullNameTextBox" name="fullname" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="EmailTextBox">Email:</label>
                    <input type="email" class="form-control" id="EmailTextBox" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label for="ContactNumberTextBox">Contact Number:</label>
                    <input type="tel" class="form-control" id="ContactNumberTextBox" name="contactnumber" placeholder="Enter Your Contact Number" required>
                </div>
                <div class="form-group">
                    <label for="MessageTextArea">Message:</label>
                    <textarea class="form-control" rows="5" id="MessageTextArea" name="message" placeholder="Enter Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?pageId=Contact">
                    <input type="button" class="btn btn-warning" value="Cancel"/>
                </a>
            </form>


        </div>
    </div>
</div>