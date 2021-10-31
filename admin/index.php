<?php
include('../mysql.php');

if(isset($_POST['login-submit'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '".$uname."' AND password = '".$password."' LIMIT 0,1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        setcookie('username', $uname, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('password', $password, time() + (86400 * 30), "/"); // 86400 = 1 day
        header('Location: /recent.php');
        // echo "You Have logged in";
        exit();
    } else {
        echo "You Have entered incorrect password!";
        exit();
    }
}

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    header('Location: /recent.php');
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
    <script src="js/admin.js"></script>
    <title>Cello Tax - Admin Panel</title>
</head>
<body>
        <div class="log-in">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="./images/icon/Cellotax1.png" id="icon" alt="User Icon" />
                    </div>

                    <!-- Login Form -->
                    <form name="loginform" method="POST"> 
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required />
                    <div id="user_error">Please Enter Valid Username</div>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required /> 
                    <div id="pass_error">Please Enter Valid Password</div>
                    <input type="submit" class="fadeIn fourth" value="Log In" name="login-submit">
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                    </div>

                </div>
        </div>
        </div>
</body>
</html>