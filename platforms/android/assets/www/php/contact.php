
<?php
// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","ssl://smtp.gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","465");

// Please specify the return address to use
ini_set('sendmail_from', 'emmanuelolayiwola@gmail.com');
    // variables start
	$name = "";
	$email = "";
	$message = "";
	
	$name =  trim($_POST['contactNameField']);
	$email =  trim($_POST['contactEmailField']);
	$message =  trim($_POST['contactMessageTextarea']);
	// variables end
	
	// email address starts
	$emailAddress = 'emmanuelolayiwola@gmail.com';
	// email address ends
	
	$subject = "Message From: $name";	
	$message = "<strong>From:</strong> $name <br/><br/> <strong>Message:</strong> $message";
	
	$headers .= 'From: '. $name . '<' . $email . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	mail($emailAddress, $subject, $message, $headers);
	//send email function ends
?>