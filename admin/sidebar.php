<?php

if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
    header('Location: /');
    // echo $_COOKIE['password'];
    exit();
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
    <link rel="stylesheet" href="css/admin-style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <script src="./js/admin.js"></script>
    <script>
        $(document).ready(function() {
            $("#user-btn").click(function(){
                $("#user-show").toggleClass("show");
                $(".first").toggleClass("rotate");
            });
        });
    </script>
    <title>CelloTax - Admin Panel</title>
</head>

<body>
    <div class="top-nav">
        <!-- Navbar -->
                <!-- Navbar -->
<nav class="navbar navbar-expand-md nav-col">

  <!-- Right -->
  <ul class="navbar-nav nav-flex-icons ml-auto">
    <li class="nav-item avatar dropdown d-flex align-items-center">
      <a class="nav-link dropdown-toggle user-name" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img src="./images/icon/user.png" class="rounded-circle z-depth-0"
          alt="avatar image">
        CelloTax
      </a>
      <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdownMenuLink-55">
        <a class="dropdown-item" href="#!">Action</a>
        <a class="dropdown-item" href="#!">Another action</a>
        <a class="dropdown-item" href="#!">Something else here</a>
      </div>
    </li>
  </ul>

</nav>
    </div>
    <div class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
            <i class="fa fa-bars"></i>
          </label>
        </div>
        <div class="sidebar_menu">
            <div class="logo">
                <a href="#"><img src="./images/icon/Cellotax1.png" alt=""></a>
            </div>
            <div class="btn_two">
                <label for="check">
                <i class="fa fa-times"></i>
              </label>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        
                        <a href="index.php">Home</a>
                    </li>
                    <li  id="user-btn" >
                        <a href="javascript:;">Users</a>
                        <i class="fa fa-caret-down first"></i>
                        <ul id="user-show">
                            <li>    
                                <a href="registered.php">Registered</a>
                            </li>
                            <li>    
                                <a href="contacted.php">Contacted</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="/logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            
        </div>
  <!-- <h1 class="mani">This is sidebar</h1> -->
<!-- 
</body>

</html> -->