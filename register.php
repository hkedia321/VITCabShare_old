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
$mail->Password = "Aawrun#32";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "vitcabshare@gmail.com";
$mail->FromName = "VIT Cab share";

$mail->addAddress("geek.harshitkedia@gmail.com", "Recepient Name");

$mail->isHTML(true);


$name = $_POST['name'];
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$time = $_POST['time'];
$email = $_POST['email'];
$phnno = $_POST['phnno'];
$mail->Subject = "Register $name";

$mail->Body = "$name \n $from \n $to \n $date \n $time \n $email \n $phnno \n";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
	echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	echo "Message has been sent successfully";
}