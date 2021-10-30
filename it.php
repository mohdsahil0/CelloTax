<?php
include_once('mysql.php');

$sql = "SELECT * FROM itPlans";
$result = mysqli_query($conn, $sql);

// Close the connection
mysqli_close($conn);
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
    <title>CelloTax - Income Tax</title>
    <link rel="icon" href="/assets/icons/fevicon.png" type="image/icon">
</head>

<body>
    <div class="tax-home">

        <div class="main-home">
            <div class="nav-bar" id="navbar">
                <div class="container">
                    <div class="row nav">
                        <div class="menu col-md-8">
                            <ul>
                                <li class="item"><a href="/">HOME</a></li>
                                <li class="item active"><a href="/it">INCOME TAX</a></li>
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
                        <li class="item"><a href="/">HOME</a></li>
                        <li class="item active"><a href="#">INCOME TAX</a></li>
                        <li class="item"><a href="/gst">GST</a></li>
                        <li class="item"><a href="/blog">BLOG</a></li>
                        <li class="item"><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="hero container">
                <div class="tax-img">
                    <img src="/assets/images/incometax.png" alt="">
                </div>
                <div class="form-area">
                    <h3>Register For Plan
                        <hr class="line1 line">
                    </h3>

                    <div class="form">
                        <form action="/thankyou" method="POST" onsubmit="return formfunc()">
                            <div class="form-group">
                                <input type="text" class="form-control"  id="regnumber" name="regnumber" placeholder="Enter Your Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="regname" name="regname" placeholder="Enter Your Name" required>
                            </div>
                            <!-- <a class="btn" href="/thankyou">Submit</a> -->
                            <div class="submit">
                                <input type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/taxcello/" target="_blank"><img src="/assets/icons/instagram.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/CelloTaxCom-108610298188184" target="_blank"><img src="/assets/icons/facebook.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CelloTax" target="_blank"><img src="/assets/icons/twitter_1.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/cello-tax-b18580218/" target="_blank"><img src="/assets/icons/linkedin_1.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="income-tax">
        <div class="heading">
            <h1>INCOME TAX</h1>
        </div>
        <div class="tax-card-back">
            <div class="container">
                <div class="row pb-4 pt-5">

                <?php if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

    echo '

                    <div class="col-sm-12 col-md-6 col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">'.$row["planname"].'</h4>
                                <div class="amt">
                                    <h5>'.$row["planamt"].'</h5>
                                    <p>You can pay after your work has done.</p>
                                </div>
                                <div class="who">
                                    <a href="#" class="">Who can Purchase this Plan?</a>
                                </div>
                                <div class="content">
                                    <ol>
                                    '.$row["content"].'                                    </ol>
                                    <h4>Services:</h4>
                                    <ol>
                                    '.$row["services"].'                                    </ol>
                                </div>
                                <div class="text-right">
                                    <a href="/register?cat=Income Tax&planname='.$row["planname"].'&planamt='.$row["amt"].'" class="buy-btn">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    ';
                }
                                    }
                
                                    ?>

                </div>
            </div>
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
                        <div class="mail1"><a href="mailto:cellotax.com@gmail.com"><i class="fa fa-envelope"></i> <span>cellotax.com@gmail.com</span></a></div>
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
                <form action="/thankyou" method="POST" onsubmit="return contactformfunc()">
                    <div class="form-group">
                        <input type="text" class="form-control" id="contactname" name="contactname" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="contactemail" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputnumber1" name="contactphone" placeholder="Enter Your Number" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="contactmsg" placeholder="Enter Your Message" rows="3" required></textarea>
                    </div>
                    <!-- <a href="#" class="submit">SUBMIT</a> -->
                    <div class="submit">
                        <input type="submit" value="SUBMIT" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
    <p>&copy; Copyright 2021 by <a href="https://www.cellotax.com/">CelloTax</a> All rights reserved. &nbsp; Developed by <a href="https://frazile.com/">Frazile Inc.</a></p>
    </div>
</body>

</html>