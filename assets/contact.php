<?php
session_start();

$_SESSION[ "username" ] = $_POST[ "name" ];

if ( isset( $_POST ) && count( $_POST ) > 0 ) {
  $response = 1;
  $to_email = 'piceee2021@gmail.com';
  $subject = "Path Identifier Command Contact Form";
  $message = "Name: " . $_POST[ 'name' ] . "\r\n";
  $message .= "Phone: " . $_REQUEST[ 'phone' ] . "\r\n";
  $message .= "Email: " . $_POST[ 'email' ] . "\r\n";
  $message .= "Company: " . $_REQUEST[ 'company' ] . "\r\n";
  $message .= "Subject: " . $_REQUEST[ 'subject' ] . "\r\n";
  $message .= "Message: " . $_REQUEST[ 'message' ] . "\r\n";

  $headers = "From:support@gs2pic.co.in";
  mail( $to_email, $subject, $message, $headers );
}
?>