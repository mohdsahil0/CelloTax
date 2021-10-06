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
    <title>Register</title>
</head>

<body>
    <div class="register-page">
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
                        <li class="item"><a href="/">HOME</a></li>
                        <li class="item"><a href="#">INCOMETAX</a></li>
                        <li class="item"><a href="/gst">GST</a></li>
                        <li class="item"><a href="/blog">BLOG</a></li>
                        <li class="item"><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="hero container">
                <div class="form-area">
                    <h3>Register For Plan
                        <hr class="line1 line">
                    </h3>

                    <div class="form">
                        <form action="/thankyou" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="regnumber" name="regnumber" placeholder="Enter Your Number" required>
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
        </div>
    </div>
</body>

</html>