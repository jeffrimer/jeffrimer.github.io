<?php

 	require_once 'google/appengine/api/mail/Message.php';
    use google\appengine\api\mail\Message;

	if( $_POST['cf_name'] == '' || $_POST['cf_email'] == '' || $_POST['cf_message'] == '' ) {

	echo '<script language="javascript" type="text/javascript">
        alert(\'Please fill all fields.\');
        window.location = \'contact-me.php\';
		</script>';
		exit(0);
	}

    $emailBody = $_POST['cf_message'] . ' -- ' . $_POST['cf_name'] . ' - ' . $_POST['cf_email'];

    $mail_options = [
       "sender" => 'jmrimer@gmail.com',
       "to" => 'jmrimer@gmail.com',
       "subject" => "Email Received from JeffRimer.com",
       "textBody" => $emailBody
    ];

    try {
       $message = new Message($mail_options);
       $message->send();
       echo '<script language="javascript" type="text/javascript">
		  alert(\'Thank you for the message. I will get back with you as soon as I can.\');
		  window.location = \'contact-me.php\';
	   </script>';
    } catch (InvalidArgumentException $e) {
    	echo '<script language="javascript" type="text/javascript">
		   alert(\'Message failed. Please send an email directly to me at jmrimer@gmail.com.\');
		   window.location = \'contact-me.php\';
	    </script>';
       echo $e;
    }