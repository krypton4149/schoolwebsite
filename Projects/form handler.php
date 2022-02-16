<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'iampiyushyadav007@gmail.com';

$email_subject = 'New form submission';

$email_body = "user Name: $name.\n".
               "user Email: $visitor_email.\n".
              "Subject: $subject. \n";
$to = 'mafia22111999@gmail.com';

$header = "from: $email_from \r\n";

$header .= " Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");

?>