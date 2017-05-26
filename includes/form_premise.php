<?php	
	if(empty($_POST['space_admin_email_premise']) && strlen($_POST['space_admin_email_premise']) == 0)
	{
		return false;
	}
	
	$premisesize = $_POST['premisesize'];
	$premiselocation = $_POST['premiselocation'];
	$space_admin_email_premise = $_POST['space_admin_email_premise'];
	$premise_message = $_POST['premise_message'];
	
	$to = 'enigmabridgecomsupport@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from theprivate.space";
	$email_body = "You have received a new message. \n\n".
				  "Premisesize: $premisesize \nPremiselocation: $premiselocation \nSpace_Admin_Email_Premise: $space_admin_email_premise \nPremise_Message: $premise_message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: privatespace@enigmabridge.com\n";
	$headers .= "Reply-To: $space_admin_email_premise";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
