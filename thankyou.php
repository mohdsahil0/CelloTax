<?php
include('mysql.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['cat'])) {
        $phone = $_POST['regnumber']; 
        $name = $_POST['regname'];
        $cat = $_POST['cat'];
        $planname = $_POST['planname'];
        $planamt = $_POST['planamt'];
        $query = "INSERT INTO users SET phone = '".$phone."', name = '".$name."' ";
        $result = @mysqli_query($conn, $query);
        include_once('mail2.php');
    } 
    else if (isset($_POST['contactname'])) {
        $cname = $_POST['contactname'];
        $cemail = $_POST['contactemail'];
        $cphone =  $_POST['contactphone'];
        $cmsg = $_POST['contactmsg'];
        include_once('mail3.php');
    }
    else {
        $phone = $_POST['regnumber']; 
        $name = $_POST['regname'];
        $query = "INSERT INTO users SET phone = '".$phone."', name = '".$name."' ";
        $result = @mysqli_query($conn, $query);
        include_once('mail.php');
    }

    
    // Close the connection
    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/main.js">
    </script>
    <title>Thank You</title>
    <link rel="icon" href="/assets/icons/fevicon.png" type="image/icon">
</head>
<body>
    <div class="thankyou">
        <div class="main-home">
            <div class="nav-bar" id="navbar" style="background-color: #fff; opacity:75%;">
                <div class="container">
                    <div class="row nav">
                        <div class="menu col-md-8">
                            <ul>
                                <li class="item"><a href="/">HOME</a></li>
                                <li class="item"><a href="/it">INCOMETAX</a></li>
                                <li class="item"><a href="/gst">GST</a></li>
                                <li class="item"><a href="/blog">BLOG</a></li>
                                <li class="item"><a href="#contact">CONTACT US</a></li>
                            </ul>
                        </div>
                        <div class="logo col-md-4">
                            <img src="/assets/icons/CelloTax2@2x.png" alt="CelloTAX.COM">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mob-nav">
                <div class="hambar" id="hambar"><i class="fa fa-bars"></i></div>
                <div id="sidebar-menu">
                    <div class="cros" id="cros"><i class="fa fa-times"></i></div>
                    <div class="mob-logo">
                            <img src="/assets/icons/CelloTax2@2x.png" alt="CelloTAX.COM">
                    </div>
                    <ul>
                        <li class="item "><a href="/">HOME</a></li>
                        <li class="item"><a href="/it">INCOMETAX</a></li>
                        <li class="item"><a href="/gst">GST</a></li>
                        <li class="item"><a href="/blog">BLOG</a></li>
                        <li class="item"><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
       
        </div>
        
           <div class="thanks">
           <img src="/assets/images/Path 291.png" alt="">
            <h1>Thank you !</h1>
            <p>Our Representative Contact You Soon.</p>
           </div>
    </div>
    <div id="contact">
        <div class="left">
            <div class="left-item">
                <div class="sub-logo">
                    <img src="/assets/icons/Cellotax1.png" alt="CelloTax">
                </div>
                <div class="connect">
                    <div class="mail">
                    <div class="mail1"><a href="mailto:cellotax@gmail.com"><i class="fa fa-envelope"></i> <span>cellotax@gmail.com</span></a></div>
                        <div class="mail2"><a href="mailto:support1@cellotax.com"><i class="fa fa-envelope"></i> <span>support1@cellotax.com</span></a></div>
                    </div>
                    <div class="social">
                        <p>FOLLOW US</p>
                        <ul>
                        <li><a href="https://www.instagram.com/taxcello/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/cello-tax-b18580218/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.facebook.com/CelloTaxCom-108610298188184" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                            <li>
                            <a href="https://wa.me/+919335747476" target="_blank"><i class="fa fa-whatsapp" target="_blank"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/CelloTax" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-form">
                <h1>CONTACT US</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputnumber1" placeholder="Enter Your Number" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Your Message" rows="3" required></textarea>
                    </div>
                    <a href="#" class="submit">SUBMIT</a>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
    <p>&copy; Copyright 2021 by <a href="https://www.cellotax.com/">CelloTax</a> All rights reserved. &nbsp; Designed by <a href="https://frazile.com/">Frazile Inc.</a></p>
    </div>
</body>
</html>