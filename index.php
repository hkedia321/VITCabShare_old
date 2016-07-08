<?php
if($_POST['name']){


	require_once "php/PHPMailerAutoload.php";

	$mail = new PHPMailer;

//Enable SMTP debugging. 
	$mail->SMTPDebug = 0;                               
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
		header('Location: thankyou.html');
		exit();
		echo "Message has been sent successfully";
		echo 'Boolean';
	}

}
else {


	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>VIT Cab Share</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="VIT, Cab, Share, Sharing, Taxi, Vellore, Chennai, Airport, Bengaluru, Airport">
		<meta name="description" content="VIT Cab Share is an easy way to share your cab from Chennai or Bengaluru Airport to VIT Vellore. Built by VITians.">
		<meta name="author" content="Harshit Kedia, kediarocket@outlook.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/taxi.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<meta property="og:url"           content="http://vitcabshare.azurewebsites.net/" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="VIT Cab Share" />
		<meta property="og:description"   content="VIT Cab Share is an easy way to share your cab from Chennai or Bengaluru Airport to VIT Vellore. Built by VITians." />
		<meta property="og:image"         content="images/cover2.png" />

	</head>
	<body>
		<!--
		Looking for sharing a cab from Airport to VIT Vellore? 
Well, finding your co-passangers just got easier with vitcabshare.azurewebsites.net .
Register your journey details and Search for co passangers!
-->
<div id="nav">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" onclick="$('html, body').animate({scrollTop: $('#register').offset().top-100}, 800);"><img class="img-responsive" id="navbarimg" src="images/vitcabshare.png" alt="VIT Cab Share"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav nav-justified" id="navul">
					<li><a class="navas" onclick="$('html, body').animate({scrollTop: $('#register').offset().top -100}, 800);">Register/Search</a></li>
					<li><a class="navas" onclick="$('html, body').animate({scrollTop: $('#aboutus').offset().top-50}, 800);">About us</a></li>
					<li><a class="navas" onclick="$('html, body').animate({scrollTop: $('#contactus').offset().top-50}, 800);">Contact us</a></li> 
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="target" id="register">
	<div class="container">
		<h1 class="cabshareh1">VIT Cab Share<h1>
			<h2 class="cabshareh2">Cab Sharing Made Easy</h2>

			<div class="row">
				<div class="fb-share-button" style="display:inline-block;" data-href="https://www.facebook.com/vitcabshare/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fvitcabshare%2F&amp;src=sdkpreparse"><button type="button" class="btn btn-primary">Share on fb&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></button></a>
				</div>
			</div>
			<div class="row">
				<div class="regboxwrap">
					<div class="col-md-offset-3 col-md-6">
						<div class="regcolwrap container-fluid">
							<div class="col-md-6 regcol" id="reg">
								<h2>Register</h2>
								<p>Register to let people know your journey timings. Share your Taxi and save your Taxi cost.</p>
								<a href="register.php"><button id="regbutton" class="btn btn-primary">Register</button></a>
							</div>
							<div class="col-md-6 regcol" id="find">
								<h2>Search for Cab</h2>
								<p>See the list of passangers. Contact people who are travelling at same time as yours to share a Taxi!</p>
								<a href="search.html"><button id="findbutton" class="btn btn-primary">Search</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="target" id="aboutus">
		<div class="container">
			<div class="row">
				<div class="aboutusdiv1 col-md-7">
					<h1 style="font-size:4.5rem;text-decoration:underline;">About us</h1>
					<div class="aboutuscon">
						<p style="text-align:center;">This project is an initiative by VITians. We, like you, were fed up with paying high taxi fare for our journey of VIT Vellore to Chennai/Bangalore Airport and vice versa! We were fed up of asking everyone whether their flight timings are same as ours or not! So we made this Application to find co travellers! Why pay higher when we can divide the cost?
						</p>
					</div>
				</div>
				<div class="aboutusdiv2 col-md-5">
					<div class="howwork">
						<h1 style="font-size:4.1rem;text-decoration:underline;">How does it work?</h1>
						<p>You should <a href="register.php">register</a> first. We will store your journey details in our database. It will also be visible to others.</p><p> Then you can <a href="search.html">search</a> to view a table of all passangers along with their journey timings, and their contact option. Enjoy taxi sharing!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="target" id="contactus">
		<div class="container">
			<h1 style="font-size:4.5rem;">Contact us</h1>
			<p>If you have some querries or suggestions, feel free to drop a message.</p>
			<div class="contactusdiv1 container">
				<div class="addressdiv col-md-4"><i class="fa fa-map-marker fa-2x hidden-xs" aria-hidden="true"></i><i class="fa fa-map-marker visible-xs" aria-hidden="true"></i>
					VIT University, Vellore.
				</div>
				<div class="emaildiv col-md-4">
					<i class="fa fa-envelope fa-2x hidden-xs" aria-hidden="true"></i> <i class="fa fa-envelope visible-xs" aria-hidden="true"></i>
					vitcabshare@gmail.com
				</div>
				<div class="phndiv col-md-4">
					<i class="fa fa-phone-square fa-2x hidden-xs" aria-hidden="true"></i><i class="fa fa-phone-square visible-xs" aria-hidden="true"></i>
					+91 8420 391148
				</div>

			</div>
			<div class="container">
				<form class="form-horizontal" action="index.php" method="POST">
					<div class="form-group">
						<br><br>
						<label class="col-md-1 control-label" for="name">Name:<span class="red">*</span></label>
						<div class="col-md-5">
							<input type="text" required class="form-control" id="name" placeholder="Your name" name="name">
						</div>

						<label class="col-md-1 control-label" for="email">Email:<span class="red">*</span></label>
						<div class="col-md-5">
							<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required class="form-control" id="email" name="email" placeholder="Your Email">
						</div>
						<br><br class="hidden-xs"><br class="hidden-xs">
						<label class="col-md-1 control-label" for="message">Message:<span class="red">*</span>&nbsp;&nbsp;&nbsp;</label>
						<div class="col-md-11">
							<textarea required class="form-control" id="message" name="message" height="190" placeholder="Your message"></textarea>
						</div>
						<br><br class="hidden-xs"><br class="hidden-xs">
					</div>
					<a><input type="submit" class="col-xs-12 col-md-2 btn btn-primary pull-right"></a>
					<br><br><br>
				</form>
			</div>

		</div>
	</div>
	<hr>
	<footer>

		<div id="footer" class="container">
			<span class="pullright">
				<div class="fb-share-button" style="display:inline-block;" data-href="https://www.facebook.com/vitcabshare/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fvitcabshare%2F&amp;src=sdkpreparse"><button type="button" class="btn btn-primary">Share on fb&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></button></a>
				</div></span>
				<span class=""><span style="text-decoration:underline;"><a href="index.php">VIT Cab Share</a></span> - Cab Sharing made easy</span>

				<br>

				<div class="opensource text-center" style="text-align:center;">This website is an open source initiative.<br> You can contribute and improve it.<br>see on <a href="https://github.com/hkedia321/VITCabShare" target="_blank">github</a></div>
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/myjs.js"></script>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-79774000-2', 'auto');
		ga('send', 'pageview');

		</script>
	</body>
	</html>

	<?php
}
?>