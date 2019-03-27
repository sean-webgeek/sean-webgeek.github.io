<?php
	$to = 'sean@webgeek.me.uk';
	$send_date = date('d-m-Y ');
	$send_time = date('H:i:s');
	$subject = $_POST['subject'];
	$message = '
		<!DOCTYPE html>
		<html>
		
		<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Message sent via WebGeek portfolio</title>
		</head>

		<body >
			<p style="font: 1em/1.25 Arial, Helvetica, sans-serif;">Message sent on:'.$send_date.' at:'.$send_time.'</p>
			<table style="font: 1em/1.25 Arial, Helvetica, sans-serif;">
				<tr>
					<td>Name: '.$_POST['name'].'</td>
				</tr>
				<tr>
					<td>Phone number: '.$_POST['phone'].'</td>
				</tr>
				<tr>
					<td>E-mail: <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a></td>
				</tr>
				<tr>
					<td>Subject: '.$_POST['subject'].'</td>
				</tr>					
				<tr>
					<td>Message:<br><br>'.$_POST['message'].'</td>
				</tr>
			</table>
		</body>
		
		</html>';
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "Form: ".$_POST['name']." <".$_POST['email'].">\r\n";
	$header .= "From: Web Geek Portfolio\r\n";
	
	$success = mail($to, $subject, $message, $header);
	if($success) {
	  header("Location: http://www.webgeek.me.uk/transmission_received.html"); }
	else {
	  header("Location: http://www.webgeek.me.uk/transmission_failed.html"); }
?>

