<?php
$to = "
aliakhanna1212@gmail.com, 
sahilstack@gmail.com,
support1@cellotax.com,
cellotax.com@gmail.com
";
$subject = "Cellotax";

$message = '
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <Style>
        * {
            margin: 0;
            padding: 0;
        }
        
        .nav-bar {
            background-color: #B5B6ff;
        }
        
        .nav-bar .plan-name {
            text-align: center;
            font-size: 26px;
            font-weight: 900;
        }
        
        .nav-bar .logo {
            margin: 10px 0;
        }
        
        .nav-bar .logo img {
            height: 100px;
            align-items: center;
        }
        
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 50px;
        }
        
        .mail-body {
            margin: 0 auto;
        }
        
        .mail-body .card {
            background-color: #f7f7f7;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #7e7e7e;
            /* height: 535px; */
            position: relative;
            margin-bottom: 40px;
            margin: 40px auto;
            max-width: 500px;
        }
        
        .mail-body .card .card-body {
            padding: 25px;
        }
        
        .mail-body .card .card-body h4 {
            text-align: center;
            color: black;
            font-size: 30px;
            font-weight: 900;
        }
        
        .mail-body .card .card-body .amt {
            padding: 0 30px;
        }
        
        .mail-body .card .card-body .amt h5 {
            color: #66ac4c;
            font-size: 30px;
            font-weight: 900;
            margin-bottom: 0;
        }
        
        .mail-body .card .card-body .amt h5 .paise {
            font-size: 22px;
        }
        
        .mail-body .card .card-body .amt p {
            font-size: 12px;
            margin-bottom: 0;
        }
        
        .mail-body .card .card-body .who {
            text-align: center;
            margin: 20px 0 10px 0;
        }
        
        .mail-body .card .card-body .who a {
            color: white;
            background: #023c6c;
            /* background: rgba(2, 60, 108, ); */
            backdrop-filter: blur(10px);
            padding: 10px 10px;
            font-size: 16px;
            font-weight: 900;
            text-decoration: none;
            border-radius: 35px;
        }
        
        .mail-body .card .card-body .content {
            padding: 10px 30px 10px 50px;
        }
        
        .mail-body .card .card-body .content ol li {
            font-size: 14px;
            line-height: 20px;
        }
        
        .mail-body .card .card-body .buy-btn:hover {
            border: 1px solid #66ac4c;
            color: #66ac4c;
            background-color: #ffffff;
        }
        
        .client-details {
            padding: 20px 30px;
        }
        
        @media (max-width:1200px) {
            .mail-body .card .card-body .who a {
                font-size: 16px;
            }
            .mail-body .card .card-body .content {
                padding: 10px 0px 10px 20px;
            }
        }
        
        @media (max-width:767px) {
            .mail-body .card {
                max-width: 400px;
                margin: 20px auto;
            }
        }
        
        @media (max-width:580px) {
            .mail-body .card .card-body h4 {
                font-size: 24px;
            }
            .mail-body .card .card-body .amt h5 {
                font-size: 22px;
            }
            .mail-body .card .card-body .buy-btn {
                font-size: 14px;
                padding: 2px 20px;
            }
            .mail-body .card {
                max-width: 350px;
            }
            .mail-body .card .card-body .who a {
                font-size: 14px;
            }
            .nav-bar .logo img {
                height: 85px;
            }
            .nav-bar .plan-name {
                font-size: 24px;
            }
        }
        
        @media (max-width:480px) {
            .mail-body .card {
                max-width: 300px;
                margin: 50px auto;
            }
            .nav-bar .plan-name {
                font-size: 20px;
            }
        }
    </Style>
</head>

<body>
    <div class="mail">
        <div class="nav-bar">
            <div class="container">
                <div class="em">

                </div>
                <div class="plan-name">INCOME TAX</div>
                <div class="logo">
                    <img src="https://cellotax.com/assets/icons/CelloTax2@2x.png" alt="CelloTax">
                </div>

            </div>
        </div>
        <div class="mail-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Plan - A</h4>
                    <div class="amt">
                        <h5><i class="fa fa-rupee"></i> 349.<span class="paise">00</span></h5>
                        <p>You can pay after your work has done.</p>
                    </div>
                    <div class="who">
                        <a href="#" class="">Who can Purchase this Plan?</a>
                    </div>
                    <div class="content">
                        <ol>
                            <li>Having Salary Income.</li>
                            <li>Having Income up to INR 50 Lakh.</li>
                            <li>Having One House Property.</li>
                            <li>Having Exempt Income.</li>
                        </ol>
                        <h4>Services:</h4>
                        <ol>
                            <li>Compute of Total Income.</li>
                            <li>ITR Filing.</li>
                            <li>Having One House Property.</li>
                        </ol>
                    </div>
                </div>
                <div class="client-details">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td>'.$name.'</td>
                            </tr>
                            <tr>
                                <td>Contact No.:</td>
                                <td>'.$phone.'</td>
                            </tr>
                        </tbody>
                    </table>
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