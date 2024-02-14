<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$query = $_POST['query'];
$message = $_POST['message'];

$email_from = 'nachde@gmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'krutikasakharkar290@gmail.com';

$headers = "From: $email_from \r\n";

$header .= "Reply -To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
