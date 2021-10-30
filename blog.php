<?php

include('mysql.php');

$query = "SELECT * FROM blogs";
$result = @mysqli_query($conn, $query);
while($row = mysqli_fetch_object($result)) $blogs[] = (object) $row;

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
    <title>CelloTax - Blog</title>
    <link rel="icon" href="/assets/icons/fevicon.png" type="image/icon">
</head>

<body>
    <div class="blog">
        <div class="main-home">
            <div class="nav-bar" id="navbar">
                <div class="container">
                    <div class="row nav">
                        <div class="menu col-md-8">
                            <ul>
                                <li class="item"><a href="/">HOME</a></li>
                                <li class="item"><a href="/it">INCOME TAX</a></li>
                                <li class="item"><a href="/gst">GST</a></li>
                                <li class="item active"><a href="#">BLOG</a></li>
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
                        <li class="item"><a href="/it">INCOME TAX</a></li>
                        <li class="item"><a href="/gst">GST</a></li>
                        <li class="item active"><a href="/blog">BLOG</a></li>
                        <li class="item"><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="blog-form">
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
        <div id="blog">
            <div class="container">
                <div class="row">

                <?php foreach($blogs as $key => $blog) :?>
<?php
// strip tags to avoid breaking any html
$content = strip_tags($blog->content);
    // truncate content
    $contentCut = substr($content, 0, 250);
    $endPoint = strrpos($contentCut, ' ');

    //if the content doesn't contain any space then it will cut without word basis.
    $content = ($endPoint ? substr($contentCut, 0, $endPoint) : substr($contentCut, 0)) . '...';
    // $teaser = ($endPoint ? substr($contentCut, 0, $endPoint) : substr($contentCut, 0)) . ' ...';
    // $content .= 'wgfew...';
// echo $content;
    
    ?>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="width: 19rem;">
                            <img class="card-img-top" src="/assets/icons/<?=$blog->image?>" alt="Card image cap">
                            <div class="card-body">
                                <h3 class=""><?=$blog->title?></h3>
                                <p class="card-text"><?=$content?></p>
                                <div class="text-right">
                                    <a href="blog_view.php?id=<?=$blog->id?>" class="read-more-btn">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>            


                <!-- <div class="view-all text-right mb-3 mt-3">
                    <a href="#">View All <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="add-blog">
            <div class="new-blog">
                <a href="javascript:;">New Blog</a>
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
        <p>&copy; Copyright 2021 by <a href="https://www.cellotax.com">CelloTax</a> All rights reserved. &nbsp;&nbsp; Developed by <a href="https://frazile.com/" target="_blank">Frazile Inc.</a></p>
    </div>
</body>

</html>