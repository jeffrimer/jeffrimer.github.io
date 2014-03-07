<?php

$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];


$mail_to = 'jmrimer@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$cf_email."\r\n";
$headers .= 'Reply-To: '.$cf_email."\r\n";

if ( $field_name != '' && $field_email != '' && $field_message != '' ) {
    $mail_status = mail($mail_to, $subject, $body_message, $headers);
} else { ?>
    <script language="javascript" type="text/javascript">
        alert('Please fill all fields.');
        window.location = 'contact_page.php';
    </script>
<?php }

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will get back with you as soon as I can.');
		window.location = 'contact_page.php';
	</script>
<?php
} else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email directly to me at jmrimer@gmail.com.');
		window.location = 'contact_page.php';
	</script>
<?php } ?>