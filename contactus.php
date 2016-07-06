<?php

require_once "php/PHPMailerAutoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "vitcabshare@gmail.com";                 
$mail->Password = "harshitkediavitcabshare01";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "vitcabshare@gmail.com";
$mail->FromName = "VIT Cab share";

$mail->addAddress("geek.harshitkedia@gmail.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "contact";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$mail->Body = "From: $name\n E-Mail: $email\n Message:\n $message";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
	echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	header("Location:http://vitcabshare.azurewebsites.net/thankyou.html");
}