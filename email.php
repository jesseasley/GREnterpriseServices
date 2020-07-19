<?php

	$headers = "From: webbrowser@grenterpriseservices.com\r\n"; 
	$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Bcc: Jess Easley <jess@jesseasley.com>\r\n";
	$headers .= "Cc: Ruben E. Diaz <ruben.e.diaz@gmail.com>\r\n";
	$subject = $_POST["txtSubject"];
	$name = $_POST["txtName"];
	$email = $_POST["txtEmail"];
	$message = $_POST["txtMessage"];
	
	$body = "You've received an email from the web site.<br><br>" .
		"Name:       " . $name . "<br>" . 
		"Email:      " . $email . "<br>" . 
		"Subject:    " . $subject . "<br>" . 
		"Message	 " . $message . "<br>"; 
	//$send_to = "jess@jesseasley.com";
	$send_to = $_POST["txtTo"];
	
  if (trim($name) . trim($email) != ""){
	  if ($_SERVER["SERVER_NAME"] != "localhost")
		  if (!(mail($send_to, "Email from GREnterpriseServices.com", $body, $headers)))
			  if ($_POST["txtPage"] == "english")
				  header("location:emailerror.php");
			  else
				  header("location:emailerrorsp.php");
		  else
			  if ($_POST["txtPage"] == "english")
				  header("location:emailsuccess.php");
			  else
				  header("location:emailsuccesssp.php");
	  else
		  if ($_POST["txtPage"] == "english")
			  header("location:emailsuccess.php");
		  else
			  header("location:emailsuccesssp.php");
  }
  else
			  if ($_POST["txtPage"] == "english")
				  header("location:emailerror.php");
			  else
				  header("location:emailerrorsp.php");
  
?>