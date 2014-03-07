<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="styles.css" />
	<title>Contact Jeff Rimer</title>
</head>

<body>
	<div id="page-wrap">
	    <!-- Header and Nav Bar -->
		<?php include("header.php"); ?>
		<!-- end of header and nav bar -->

		<div id="objective" style="width: 800px;">
			<p style="color: black;">If interested in contacting me, please fill out the small form below. I will return your message as soon as time permits. Thank you!</p>
		</div>
		<form action="contact.php" method="post" id="contact">
			<div class="hideOnSubmit">
				<label for="cf_name" class="contactLabel">Your name</label>
				<input type="text" class="contactInput" name="cf_name" />
			</div>
			<div class="hideOnSubmit">
				<label for="cf_email" class="contactLabel">Your e-mail</label>
				<input type="text" class="contactInput" name="cf_email" />
			</div>
			<div class="hideOnSubmit">
				<label for="cf_message" class="contactLabel">Message</label>
				<textarea name="cf_message"></textarea>
			</div>
			<div class="hideOnSubmit">
				<input type="submit" id="contactSubmit" class="submit" value="Send">
				<input type="reset" value="Clear" class="submit">
			</div>
		</form>
	</div>
</body>
</html>

