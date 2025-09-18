<?php
session_start();

$_SESSION["username"] = $_POST["name"];

if(isset($_POST) && count($_POST) > 0){	
    $response = 1;
	$to_email = 'mistyretreats@gmail.com';
$subject = "Path Identifier Command Contact Form";
$message = "Name: ".$_POST['name']."\r\n";
$message .= "Phone: ".$_REQUEST['phone']."\r\n";
$message .= "Email: ".$_POST['email']."\r\n";
$message .= "Company: ".$_REQUEST['company']."\r\n";
$message .= "Subject: ".$_REQUEST['msgsubject']."\r\n";
$message .= "Message: ".$_REQUEST['message']."\r\n";

$headers = "From:harshnee.h@gmail.com";
mail($to_email,$subject,$message,$headers);
}
?>