<?php
//define the receiver of the email
$to = 'sean@webgeek.me.uk';
//define the subject of the email
$subject = 'Test email'; 
//define the message to be sent. Each line should be separated with \n
$message = "Hello World!\r\nThis is my test mail.\r\n"; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: portfolio site\r\n sucess.";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
?>