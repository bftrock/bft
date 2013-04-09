<?php
require_once("inc/util.bft.php");
require_once("Mail.php");

if (isset($_POST['message'])) {
	$host = "ssl://smtp.gmail.com:465";
	$username = "bftrock@gmail.com";
	$password = "";
	$to = "bftrock@gmail.com";
	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$message = "From: {$from}\nMessage: {$_POST['message']}";
	$headers = array("From"=>$from, "To"=>$to, "Subject"=>$subject);
	$smtp = Mail::factory('smtp', array("host" => $host, "auth" => true, "username" => $username, "password" => $password));
	$mail = $smtp->send($to, $headers, $message);
	if (PEAR::isError($mail)) {
		die("{$mail->getMessage()}");
	}
	header("Location:contact.php?m=a");
}
$ack = null;
if (isset($_GET['m']) && $_GET['m'] == "a") {
	$ack = true;
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bft.css">
	<title>Brendan F. Taylor: Contact</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/contact.js"></script>
	<style type="text/css">

#contact {
	margin: 20px auto 0 auto;
}

#contact th {
	text-align: right;
}

#contact td {
	vertical-align: top;
}

	</style>
</head>

<body>
<div id="container">
<?php include("inc/header.php"); ?>
	<div id="nav">
<?php get_nav("Contact"); ?>
	</div>

	<div id="content">
		
<?php if ($ack) { ?>

		<p>Thank you for making contact! I will respond to you shortly.</p>

<?php } else { ?>

		<form id="contact_form" method="post" action="">
			<table id="contact">
				<tr><th id="email_lbl">Your email address*:</td><td><input type="text" id="email" name="email" size="40"/></td></tr>
				<tr><th id="subject_lbl">Subject:</td><td><input type="text" id="subject" name="subject" size="40"/></td></tr>
				<tr><th id="message_lbl">Message*:</td><td><textarea id="message" name="message" rows="5" cols="50"></textarea></td></tr>
				<tr><td></td><td><input type="submit" value="Send Message"/><span id="msg"></span></td></tr>
			</table>
		</form>

<?php } ?>
		
	</div>

</div>
</body>

</html>
