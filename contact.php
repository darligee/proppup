<?php
$field_name = $_POST[$name];
$field_email = $_POST[$email];
$field_message = $_POST[$message];

$mail_to = 'projectsplasher@gmail.com';
$subject = 'Message from a Proppup Visitor '$name';

$body_message = 'From: '$name."\n";
$body_message .= 'E-mail: '$email."\n";
$body_message .= 'Message: '$message;

$headers = 'From: '$email."\r\n";
$headers .= 'Reply-To: '$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you soon.');
		window.location = 'contacto.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to projectsplasher@gmail.com');
		window.location = 'contacto.html';
	</script>
<?php
}
?>