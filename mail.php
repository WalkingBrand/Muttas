<?php $firstname =$_POST['firstname'];
$lastname = $_POST["lastname"];
$country = $_POST["country"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$formcontent="From: $firstname \n Message: $subject";
$recipient = "sagarrison.g@gmail.com";
$subject = "Contact Forum";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you!";
?>