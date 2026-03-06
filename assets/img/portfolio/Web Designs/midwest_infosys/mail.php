<?
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subj=$_POST['subj'];
$comments=$_POST['comments'];

$ToEmail = "info@midwestinformationsystems.com";
$ToSubject = "Contact Form from Your Website Name";

$EmailBody =   "Name: $name\n 
Address: $address\n
Phone: $phone\n
Email: $email\n
Subject: $subj\n
Comments: $comments\n";

$Message = $EmailBody;


$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

?>