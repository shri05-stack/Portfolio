<?php

if(isset($_POST['Send message']))
{
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailTo = "srijanprak@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an email from".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers );

header("Location: index.html?mailsend");
}





?>