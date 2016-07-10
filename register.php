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


	$name = $_POST['name'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$email = $_POST['email'];
	$phnno = $_POST['phnno'];
	$mail->Subject = "Register $name";

	$mail->Body = "$date  \n $time  \n  $name \n $from \n $to \n  $email \n $phnno";
	$mail->AltBody = "This is the plain text version of the email content";

	if(!$mail->send()) 
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		header('Location: thankyou2.html');
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
		<title>VIT Cab Share-Register</title>
		<meta charset="UTF-8">
		
		<meta name="keywords" content="VIT, Cab, Share, Sharing, Taxi, Vellore, Chennai, Airport, Bengaluru, Airport">
		<meta name="description" content="VIT Cab Share is an easy way to share your cab from Chennai or Bengaluru Airport to VIT Vellore. Built by VITians.">
		<meta name="author" content="Harshit Kedia, kediarocket@outlook.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/taxi.png">
		<!--Bootstrap CND-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqmds1yVqOtnepnHVP9aJ7md" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<meta property="og:image"         content="https://raw.githubusercontent.com/hkedia321/VITCabShare/master/images/taxi.png" />

		<script src="js/jquery.js"></script>
	</head>
	<body>
		
		<div id="registercon">
			<div class="container">
				<h1 class="cabsh1 text-center">VIT Cab Share</h1>
				<h2 class="shareh2 text-center">Cab Sharing Made Easy</h2>
				<a href="index.php"><button class="goback btn btn-primary" type="button">Go Back</button></a>

				<div class="formdiv">
					<h1 class="text-center">Register</h1>
					<h4 class="text-center"><span id="badge" class="badge"><span id="badgespan">79</span> registrations!</span></h4>
					<br>
					<form action="register.php" method="POST" name="registerform" onsubmit="return validate()">
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="name">Name:<span class="red">&nbsp;*</span></label>
								<div class="col-md-10">
									<input type="text" required class="form-control" id="name" placeholder="Your name" name="name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label for="from" class="col-md-2 control-label">From:&nbsp;<span class="required">*</span></label>
								<div class="col-md-4">
									<input type="text" placeholder="select.." list="destlist1" class="form-control" id="from" style="margin-bottom:15px;" name="from" onfocus="checkpla()">
									<datalist id="destlist1">
										<option id="op11" value="Chennai Airport"></option>
										<option id="op12" value="Bengalore Airport"></option>
										<option id="op13" value="VIT Vellore"></option>
									</datalist>
								</div>
								<label for="to" class="col-md-2 control-label">To:&nbsp;<span class="required">*</span></label>
								<div class="col-md-4">
									<input type="text" placeholder="select.." list="destlist2" class="form-control" id="to" style="margin-bottom:15px;" name="to" onfocus="checkpla()">
									<datalist id="destlist2">
										<option id="op21" value="Chennai Airport"></option>
										<option id="op22" value="Bengalore Airport"></option>
										<option id="op23" value="VIT Vellore"></option>
									</datalist>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="date">Date:<span class="red">&nbsp;*</span></label>
								<div class="col-md-4">
									<input type="date" required class="form-control" id="date" placeholder="" name="date">
								</div>
								<label class="col-md-2 control-label" for="name">Time:<span class="red">&nbsp;*</span></label>
								<div class="col-md-4">
									<input type="time" required class="form-control" id="time" name="time">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" required for="email">Email:&nbsp;<span class="red">*</span></label>
								<div class="col-md-4">
									<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" id="email" name="email" placeholder="Your Email">
								</div>
								<label class="col-md-2 control-label" for="phnno">Phone no:&nbsp;</label>
								<div class="col-md-4">
									<input type="number" pattern="[0-9]{10}" class="form-control" id="phnno" name="phnno" placeholder="Your Mobile no.(optional)">
								</div>
							</div>
						</div>
						<br>
						<span class="col-sm-6"><a href="index.php#contactus">Contact Us</a> for any kind of support.
							<a></span><input type="submit" class="col-xs-12 col-sm-6 col-md-2 btn btn-primary pull-right"></a>
						</form>
					</div>
				</div>
			</div>
			<hr>
			<footer>

				<div id="footer" class="container">
					<span class="pullright"><div class="fb-share-button" style="display:inline-block;" data-href="https://www.facebook.com/vitcabshare/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fvitcabshare%2F&amp;src=sdkpreparse"><button type="button" class="btn btn-primary">Share on fb&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></button></a></div></span>
					<span class=""><span style="text-decoration:underline;"><a href="index.php">VIT Cab Share</a></span> - Cab Sharing made easy</span>

					<br>

					<div class="opensource text-center" style="text-align:center;">This website is an open source initiative.<br> You can contribute and improve it.<br>see on <a href="https://github.com/hkedia321/VITCabShare" target="_blank">github</a></div>
				</div>
			</footer>
			<script src="js/jquery.js"></script>
			<script>
			$('#badgespan').each(function () {
				$(this).prop('Counter',0).animate({
					Counter: $(this).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			});
			</script>
				<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-79774000-2', 'auto');
				ga('send', 'pageview');

				</script>
				<script>
				function validate() {
					var x = document.forms["registerform"]["from"].value;
					var y = document.forms["registerform"]["to"].value;
					if (x == y) {
						alert("Source and destination cannot be same!");
						return false;
					}
				}
				</script>


			</body>
			</html>

			<?php
		}
		?>