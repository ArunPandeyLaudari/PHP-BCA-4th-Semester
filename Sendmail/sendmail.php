<?php

$to = "binishachapagain2@gmail.com";
$subject = "The is The PHP Test of Mail";
$message = "Hello! This is a simple email message.";
$form = "arpa_bca2079@lict.edu.np";
$header = "From:" . $form;
mail($to, $subject, $message, $header);
echo "Mail Sent";
