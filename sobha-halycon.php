<?php
$name=$_REQUEST['name'];
$email_id=$_REQUEST['email_id'];
$contact_no=$_REQUEST['contact_no'];

$mail_message='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
			"http://www.w3.org/TR/html4/loose.dtd">
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<style>
			#mailtable{
			border-collapse:collapse;
			vertical-align:top;
			border:1px solid #ccc;
			}
			#mailtable td{
			padding:10px;
			font-family:Arial, Helvetica, sans-serif;
			font-size:12px;
			font-weight:bold;
			border:1px solid #ccc;
			vertical-align:top;
			}
			</style>
			
			</head>
			
			<body>
			<table width="600"  border="0" cellspacing="0" cellpadding="0" id="mailtable">
			  <tr>
				<td width="197">Name</td>
				<td width="403">'. $name .'</td>
			  </tr>
			  <tr>
				<td>Email Id</td>
				<td>'. $email_id .'</td>
			  </tr>
			    <tr>
				<td>Contact No</td>
				<td>'. $contact_no .'</td>
			  </tr>
			   </tr>
			</table>
			
			</body>
			</html>';
		  $mail_message = wordwrap(str_replace("<p>", "\n<p>", $mail_message),800);
		  
		  $from=$email_id;
		  $to="contact@kinhousing.com";
		
		$subject = "Sobha Halycon";
		
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:'.$from.''."\r\n";
		
		  if(!empty($name) && !empty($email_id)){
			 if (mail($to,$subject,$mail_message,$headers)) {
				$msg="ok";
			} 
			
		 }
		 else{
		   header("Location: sobha-halycon.php");
		 }
		 echo $msg;
?>