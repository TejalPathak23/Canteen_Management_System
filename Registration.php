<?php
include('dbcon.php');

// Code to check whether database is successfully connected to our code or not -->
// $reference = $database->getReference('loginForm');
// echo $reference->getValue();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Registration.css">
    <link rel="stylesheet" type="text/css" href="CSS\index.css">>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Register User</title>

</head>

<body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
        <h3>MET <span>BKC IOE</span></h3>
        </div>
        <div class="right_area">
            
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">

            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="Dashboard.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="UserDetails.php"><i class="fas fa-table"></i><span>Users Details</span></a>
            <a href="Registration.php"><i class="fas fa-user"></i><span>New user</span></a>
            <!-- <a href="Issues.html"><i class="fas fa-question"></i><span>Issues</span></a> -->
            <a href="LoginAdmin.php"><i class="fas fa-info-circle"></i><span>Login</span></a>
            <a href="ResetPassword.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <!-- <img src="images/bot.svg" class="profile_image" alt="" style="width: 50px; height: 50px;"> -->
            <!-- <h4 class="autobot-h">AutoBot</h4> -->
        </div>
        <a href="Dashboard.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="UserDetails.php"><i class="fas fa-table"></i><span>Users Details</span></a>
        <a href="Registration.php"><i class="fas fa-user"></i><span>New user</span></a>
        <!-- <a href="Issues.html"><i class="fas fa-question"></i><span>Issues</span></a> -->
        <a href="LoginAdmin.php"><i class="fas fa-info-circle"></i><span>Login</span></a>
        <a href="ResetPassword.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->


    <div class="login-page"></div>

    <div class="form">
        <span id="create-error"></span>
        <h1 class="reg-in-heading"><span class="reg-color-ch">R</span>EGISTER</h1>

        <!-- Form Started  -->

        <form class="login-from" id="reg-from" action="codeRegistration.php" method="POST">

            <span class="error-msg" id="userEmailError">Invalid Email Id,Please enter valid email id</span>
            <input type="text" placeholder="Email" id="email" name="pemail">

            <span class="error-msg" id="plantNameError">Enter valid Plant Name</span>
            <input type="text" placeholder="Name" id="plantName" name="pname">

            <span class="error-msg" id="plantIdError">Enter valid Plant Id</span>
            <input type="text" placeholder="Phone Number" id="plantId" name="pID">

            <span class="error-msg" id="noOfBotsError">Enter valid number of bots</span>
            <input type="text" placeholder="Dish Ordered" id="noOfBots" name="noOfBots">

            <span class="error-msg" id="userPasswordError">Password must be minimum eight characters, at least one
                letter, one number and one special character</span>
            <input type="password" placeholder="Password" id="password" name="pPassword">

            <!-- An element to toggle between password visibility -->
            <div class="show-pass">
                <input type="checkbox" onclick="myFunction()" id="chckBox"> Show Password
            </div>

            <button onclick="registerUser()" id="regBtn" name="saveData" type="submit" style="margin-top: 10px;"><a href="#">Register</a></button>
        </form>

        <!-- Form Ended  -->
    </div>
    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <!-- <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script> -->
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https: //firebase.google.com/docs/web/setup#available-libraries -->

    <!-- <script src="include_db.js"></script> -->

    <!--custom java script-->
    <script src="JS\Registration.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

</body>

</html>