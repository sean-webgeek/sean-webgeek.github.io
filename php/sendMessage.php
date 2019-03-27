<?php
  $to = 'sean@webgeek.me.uk';
  $send_date = date('d-m-Y ');
  $send_time = date('H:i:s');
  $subject = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $text = $_POST['message'];
  
  $message = '
    <html>
      <head>
        <title>Message from site</title>
      </head>
      <body>
        <p>hello</p>
      </body>
    </html>
  ';
  
  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=iso-8859-1';

  $header[] = 'To: sean@webgeek.me.uk';
  $header[] = 'From: Portfolio website <webgeek.me.uk>'; 

  $success = mail($to, $subject, $message, implode(. "\r\n", $header));
	if($success) {
	  header("Location: http://www.webgeek.me.uk/transmission_received.html"); }
	else {
	  header("Location: http://www.webgeek.me.uk/transmission_failed.html"); }
?>