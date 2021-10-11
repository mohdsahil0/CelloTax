<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['contactemail'];
}

include('mysql.php');

$query = "SELECT * FROM clientreviews";
$result = @mysqli_query($conn, $query);
while($row = mysqli_fetch_object($result)) $reviews[] = (object) $row;

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.6/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.6/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/main.js">
    </script>
    <title>CelloTax</title>
    <link rel="icon" href="/assets/icons/fevicon.png" type="image/icon">
</head>

<body>
    <div id="home">
        <div class="main-home">
            <div class="nav-bar" id="navbar">
                <div class="container">
                    <div class="row nav">
                        <div class="menu col-md-8">
                            <ul>
                                <li class="item active"><a href="#">HOME</a></li>
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
                        <li class="item active"><a href="#home">HOME</a></li>
                        <li class="item"><a href="/it">INCOMETAX</a></li>
                        <li class="item"><a href="/gst">GST</a></li>
                        <li class="item"><a href="/blog">BLOG</a></li>
                        <li class="item"><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="hero container">
                <div class="content">
                    <h1>
                        <Span class="content-color">File Your</Span> Tax Returns With us Quickly as Soon as Possible With Our Tax Experts Team With <span class="content-color">Low Price.</span>
                    </h1>
                    <h3>Do Not Go Out In That Pandemic Without Any Reason Let Your Tax Filing Headache On Our Tax Experts.</h3>
                    <hr class="line1 line">
                    <hr class="line2 line">
                    <hr class="line3 line">
                    <div class="lable">
                        <img src="/assets/icons/staysafe.png" alt="" class="staysafe">
                    </div>
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
            <div class="connect">
                <a href="#" onclick="toggle()"><img src="/assets/icons/chat.png" alt=""></a>
            </div>
        </div>
        
    </div>
    <div id="popup">
                <div class="close"><a href="#" onclick="toggle()"><i class="fa fa-times"></i></a></div>
                <div class="chat-box">
                    <div class="chat-bubble left">Hello</div>
                    <div class="chat-bubble left">Welcome to CelloTax.com</div>
                    <div class="chat-bubble left">Please Ask.</div>
                    <div class="chat-bubble right">Typing...</div>
                    <div class="chat-bubble right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus molestias in dolorem soluta eum, consequuntur expedita necessitatibus non assumenda numquam.</div>
                </div>
                <div class="message-box">
                    <textarea type="text" class="message-input" placeholder="Type Here..."></textarea>
                    <button type="submit" class="message-submit">Send</button>
                </div>
        </div>
    <div id="services">
        <div class="heading">
            <div class="box-4">
                <h1>Our Tax Services</h1>
            </div>
            <p>We Provide All Tax Services</p>
        </div>
        <div class="main">
            <div class="content">
                <div class="left">
                    <div class="income-tax">
                        <h2>Income Tax</h2>
                        <h3>(Individual, Businessmen, Freelancer, Professional.)</h3>
                        <div class="content-item">
                            <ul>
                                <li>Tax Planing</li>
                                <li>ITR Filing</li>
                                <li>Tax Refund</li>
                            </ul>
                            <img src="/assets/icons/incometax.png" alt="">
                        </div>
                        <a class="learn-more-btn" href="/it">Learn More</a>
                    </div>
                    <div class="gst">
                        <h2>GST <span class="gst-sub">(Goods and Services Tax)</span></h2>
                        <h3>(For Traders, Manufacturer Service Provider etc.)</h3>
                        <div class="content-item">
                            <ul>
                                <li>GST Registration</li>
                                <li>GST Return Filing</li>
                                <li>GST Compliance</li>
                            </ul>
                            <img src="/assets/icons/gst.png" alt="">
                        </div>
                        <a class="learn-more-btn" href="/gst">Learn More</a>
                    </div>
                </div>
                <div class="right">
                    <div class="tax-notice">
                        <img src="/assets/icons/Group 321.png" alt="">
                        <br>
                        <a class="learn-more-btn" href="/register_plan">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /* ************ BLOG ************* */ -->
    <div id="blog">
        <div class="heading">
            <h1>BLOG</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-3">
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/assets/icons/blog3.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="">Income Tax exemption in new tax slab on NPS!</h3>
                            <p class="card-text">A system of new tax slab is being given for the taxpayers along with the old slab from 2020-21. This was peoposed by the Finance Minister of India in the Budget-2020</p>
                            <div class="text-right">
                                <a href="blog_view.php" class="read-more-btn">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3">
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/assets/icons/blog2.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="">Section 194H: TDS on income from commission & brokerage:</h3>
                            <h5>Introduction of Section 194H:</h5>
                            <p class="card-text">Any income from commission or brokerage includes any payment made directly.</p>
                            <div class="text-right">
                                <a href="blog-view.php" class="read-more-btn">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/assets/icons/blog3.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="">Section 194C: TDS on payment to contractors</h3>
                            <h5>Introduction of Section 194C:</h5>
                            <p class="card-text">Any person responsible for paying any amount to any resident (hereafter in this section referred to as the contractor)</p>
                            <div class="text-right">
                                <a href="blog-view.php" class="read-more-btn">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all text-right mb-3 mt-3">
                <a href="/blog">View All <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div id="client-review">
        <div class="container">
            <div class="heading">
                <h1>Our Clients Reviews</h1>
            </div>
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-md-offset-2 col-md-8">
                        <div id="testimonial-slider" class="owl-carousel">

                        <?php foreach($reviews as $key => $review) :?>

                        <div class="testimonial">
                                <div class="pic">
                                    <img src="/assets/icons/<?=$review->filename?>" alt="client">
                                </div>
                                        <h1><?=$review->count?></h1>
                                        <div class="client-name">
                                            <h3><?=$review->name?></h3>
                                        </div>
                                        <div class="client-text">
                                            <p><?=$review->review?></p>
                                        </div>
                                        <div class="read-more">
                                            <a href="/client-review">Read More...</a>
                                        </div>
                                        <div class="rating">
                                        <?php for($i = 1; $i <= $review->ratings; $i++) {
                                            echo'<i class="fa fa-star"></i>';
                                        }?>
                                        </div>
                            </div>
                            <?php endforeach ?>            

                        </div>
                    </div>
                </div>
        </div>
    </div></div>
    <div class="app">
        <div class="container">
            <div class="app-row">
                <p>Download our App Now to Install Click Here</p>
                <a target="_blank" href="https://www.apple.com/"><img src="/assets/icons/App Store.png" alt="Appstore"></a>
                <a target="_blank" href="https://www.google.com/"><img src="/assets/icons/Google play.png" alt="Playstore"></a>
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
                <form action="/thankyou" method="POST">
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
        <p>&copy; Copyright 2021 by <a href="https://www.cellotax.com/">CelloTax</a> All rights reserved. &nbsp; Designed by <a href="https://frazile.com/" target="_blank">Frazile Inc.</a></p>
    </div>
</body>

</html>