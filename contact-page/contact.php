






<?php
$name =$_POST["name"];
$business =$_POST["business"];
$email =$_POST["email"];
$number =$_POST["number"];
$size =$_POST["size"];
$services =$_POST["services"];
$question =$_POST["question"];
$comments =$_POST["comments"];
$email_from = 'Namste Codes';
$email_subject = 'New message from Namaste Codes';
$email_body = "Name: $name.\n". 
               "Email: $email.\n". 
               "message: $comments.\n";
$to ="chantevaturi@gmail.com";
$headers = "from: $email_from\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>