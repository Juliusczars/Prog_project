<?php
include('session.php');
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contact - ICT KNH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div id="heade">
       <span style="padding: 30px 0;"><img src="images/logo.png"></span>
       <label style="float:right"><a href="logout.php" >|Logout</a></label>
       <label style="float:right"><span style="color:#000;">Welcome, <?php echo $login_session; ?> </span></label>
	</div>
	<div id="header">
		<ul id="navigation">
			<li>
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="procurement.php">Procurement</a>
			</li>
			<li >
				<a href="dispatch.php">Dispatch</a>
			</li>
			<li>
				<a href="#">Support</a>
				<ul>
					<li>
						<a href="support.php">Helpdesk</a>
					</li>
					
					<li>
						<a href="workshop.php">Workshop</a>
					</li>
				</ul>
			</li>
			<li class="current">
				<a href="contact.php">Contact</a>
			</li>
			<li>
				<a href="reports.php">Reports</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
		<div id="contact">
		<form action="index.html">
			<h3>Inquiries</h3>
			<label for="name">
				<span>Name</span>
				<input type="text" id="name">
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email">
			</label>
			<label for="subject">
				<span>Subject</span>
				<input type="text" id="subject">
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input type="submit" id="send" value="Send">
		</form>
		</div>
	</div>
	<div id="footer">
		<div>
			
			<p>
				&copy; 2017 Kenyatta National Hospital . All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https:://www.facebook.com/Kenyatta-National-Hospital-222808627792716/" id="facebook" target="_blank">Facebook</a>
			<a href="https:://twitter.com/knh_hospital?lang=en" id="twitter" target="_blank">Twitter</a>
			<a href="https://knh.or.ke/" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
</body>
</html>