<?php
	//Online Thinkers Technology

	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$subject = "FastCat - Inquiry Submitted";
	$to = "inquiry.apfc@fastcat.com.ph, customercare.apfc@fastcat.com.ph"; 

	
	
$headers = "From: $email";
$headers .= "\r\nReply-To: inquiry.apfc@fastcat.com.ph, customercare.apfc@fastcat.com.ph";
$headers .= "\r\nX-Mailer: PHP/".phpversion();
	
	
	$content="



*** INQUIRY SUBMITTED ***


Name: ".$name."


Address: ".$address."



Email: ".$email."



Contact Number: ".$phone."



Message: ".$message."


*** END ***

";

$message = stripslashes($content);

				$mailSent = @mail( $to, $subject, $content,$headers); //, "From: \"".$name."\" <".$email.">\n");
				if($mailSent){
					header("Location: archipelago-contact.html");
					
				}
	ob_end_flush();
?>