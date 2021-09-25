<?php
$to = "aliakhanna1212@gmail.com, sahilstack@gmail.com";
$subject = "Cellotax";

$message = "
<html>
<head>
<title>CelloTax</title>
</head>
<body>
<p>Parth Aggarwal has just registered for the GSTR-I. Contact Number 9310456538</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@cellotax.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
    echo 'MAIL SENT!';
} else {
    echo 'MAIL NOT SENT!';
}

?>