<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "misbahulkhoir097@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@github.io" . "\r\n" .
"CC: noreply@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
