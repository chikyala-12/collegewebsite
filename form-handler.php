<?php
$name=$_POST['name'];
$visitor_email=POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 $email_form='kakatiya@women.com';
 $email_subject='new form submission';
 $email_body="user Name:$name.\n".
             "user Email:$visitor_email.\n".
             "subject:$subject.\n."
             "User Message:$message.\n";

$to='sahithi.chikyala@gmail.com';

$headers="form:$email_form\r\n";
$headers.="replay-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>