<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	try{
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
     $msg = "Name: " . $name . "\n";
     $msg = $msg . "Email:" . $email . "\n";
     $msg = $msg . "Message:" . $message . "\n";

	// send email
	mail("info@avs-in.com",$subject,$msg);
    echo("OK");
	}catch(Exception $e) {
	  $msg = "An error occurred whilst sending an email from your contact page. The email was from:" . $_POST["email"] . ".\n";
	  mail("jacob@morrisprogramming.com","Error sending Email",$msg);
      echo("Your message could not be sent. Please email us directly. We are sorry for the inconvenience!");
	}

}
?>
