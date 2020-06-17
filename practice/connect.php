
<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["option"];
	$content = $_POST["message"];

	$toEmail = "chiron.cse1998@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    echo "Your contact information is received successfully.";
	    $type = "success";
	} else {
		echo'succes';
	}

}

?>