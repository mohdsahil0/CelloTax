<?php
if($_GET['id'] != '') {
    // echo $_GET['cat'].'=======> '.$_GET['planname'].'========> '.$_GET['planamt'];

    $id = $_GET['id'];

} else {
    header('location: /');
}

include('mysql.php');

$query = "SELECT * FROM clientreviews WHERE id = ".$id."";
$result = @mysqli_query($conn, $query);

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
                <?php if ($result -> num_rows > 0) { $row = $result -> fetch_assoc();

echo '
    <title>'.$row["name"].'</title>
    <link rel="icon" href="/assets/icons/fevicon.png" type="image/icon">
</head>
<body>
    <div class="client-page">
    <div class="client-reviews">
            <div class="main-home">
                            <div class="nav-bar" id="navbar">
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
                                        <li class="item active"><a href="/blog">BLOG</a></li>
                                        <li class="item"><a href="#contact">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </div>
                </div>
        <div class="container" >
            <div class="client-hero">
            <div class=" left" >

                    <div class="client-img">
                        <img src="/assets/icons/'.$row["featuredimg"].'" alt="'.$row["name"].'">
                        <div class="client-name">
                            <h2>'.$row["name"].'</h2>
                        </div>
                    </div>
                    
    
            </div>
                <div class=" right ">
                    <div class="content">
                        <p>'.$row["review"].'</p>
                        <ul>
                            <li><a href="#"><img src="/assets/icons/instagram.png" alt=""></a></li>
                            <li><a href="#"><img src="/assets/icons/facebook.png" alt=""></a></li>
                            <li><a href="#"><img src="/assets/icons/twitter_1.png" alt=""></a></li>
                            <li><a href="#"><img src="/assets/icons/linkedin_1.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
'; } ?>
            
        
        </div>
        
    </div>
    <div class="client-form">
            <div class="container">
                <div class="form-area">
                    <div class="heading">
                        <h2 class="text-center">Register For Plan</h2>
                    </div>
                    <form>
                        <div class="row combined-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter Your Number" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter Your Name" required>
                            </div>
                        </div>
                        <a href="#">SUBMIT</a>
                    </form>
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
                <form action="/" method="POST">
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
        <p>&copy; Copyright 2021 by <a href="https://www.cellotax.com">CelloTax</a> All rights reserved. &nbsp;&nbsp; Designed by <a href="https://frazile.com/" target="_blank">Frazile Inc.</a></p>
    </div>
</body>
</html>