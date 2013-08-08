<?php
	//Online Thinkers Technology

	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$subject = "FastCat - Cargo Consolidation Inquiry Submitted";
	$to = "inquiries.apfc@fastcat.com.ph"; 
//
	
	
$headers = "From: $email";
$headers .= "\r\nReply-To: inquiries.apfc@fastcat.com.ph";
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
					header("Location: archipelago-cargo-consolidation.html");
					
				}
	ob_end_flush();
?>