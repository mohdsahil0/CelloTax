<?php
$to = "
aliakhanna1212@gmail.com, 
sahilstack@gmail.com,
support1@cellotax.com,
cellotax.com@gmail.com
";
$subject = "Cellotax";

$message = '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .mail .header{
            text-align: center;
            background-color: #cfecfa;
           
        }
        .mail .header h3{
            padding: 30px 0;
            font-size: 35px;
        }
        p{
            font-size: 18px;
            line-height: 1.3;
            color: #000;
        }
        .mail .content{
            width: 60%;
            margin: 30px auto ;
            box-shadow: 5px 5px 15px;
         
        }
        .mail .content .inner{
            padding: 30px 50px;
        }
        .mail .content .inner .footer{
            margin: 50px 0;
        }
        .mail .content .inner img{
            height: 110px;
            margin-top: 20px;
        }
        @media (max-width:580px){
            .mail .header h3 {
                font-size: 30px;
            }
            .mail .content {
                width: 80%;
            }
            .mail .content .inner {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="mail">
        <div class="header"><h3>'.$cat.'</h3></div>
        <div class="content">
            <div class="inner">
                <div class="cellotax">
                    <p>Hi CelloTax,</p>
                </div>
                <div class="plan">
                    <p>I <strong>'.$name.'</strong> has register for</p>
                    <p><strong>'.$cat.' Plan</strong></p>
                    <p>Plan: <strong>'.$planname.'</strong></p>
                    <p>Amount: <strong>'.$planamt.'</strong></p>
                    <p>Name: <strong>'.$name.'</strong></p>
                    <p>Phone: <strong>'.$phone.'</strong></p>
                </div>
                <div class="footer">
                    <p>Thanks & Regards</p>
                    <img src="https://cellotax.com/assets/icons/CelloTax2@2x.png" alt="CelloTax">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@cellotax.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

$mailconfirm = @mail($to,$subject,$message,$headers);

// if($mailconfirm) {
//     echo 'MAIL SENT!';
// } else {
//     echo 'MAIL NOT SENT!';
// }

?>