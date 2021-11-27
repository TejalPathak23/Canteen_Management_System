<!-- Including Database through PHP -->
<?php

include('dbcon.php');

?>

<!-- Started HTML Code here  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Head Tag started  -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Reg.css">
    <link rel="stylesheet" type="text/css" href="CSS\index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <!-- Title of the page  -->
    <title>Registeration Page</title>

</head>
<!-- Head Tag Closed  -->

<!-- Body Tag Started  -->

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
            <a href="UserDetails.html"><i class="fas fa-table"></i><span>Users Details</span></a>
            <a href="Reg.html"><i class="fas fa-user"></i><span>New user</span></a>
            <a href="Issues.html"><i class="fas fa-question"></i><span>Issues</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="Settings.html"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->


    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="images/bot.svg" class="profile_image" alt="" style="width: 50px; height: 50px;">
            <h4 class="autobot-h">AutoBot</h4>
        </div>
        <a href="Dashboard.html"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="UserDetails.html"><i class="fas fa-table"></i><span>Users Details</span></a>
        <a href="Reg.html"><i class="fas fa-user"></i><span>New user</span></a>
        <a href="Issues.html"><i class="fas fa-question"></i><span>Issues</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="Settings.html"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <!-- Registration Form Started  -->
    <div class="login-page"></div>
    <div class="form">
        <span id="create-error"></span>
        <h1 class="reg-in-heading"><span class="reg-color-ch">R</span>EGISTER</h1>
        <form class="login-from" onsubmit="return validateForm()" id="reg-from" name="myForm" action='CodeReg.php' method='post'>


            <input type="text" placeholder="Plant Email Id" id="email" name="plantEmailId">


            <input type="text" placeholder="Plant Name" id="plantName" name="plantName">


            <input type="text" placeholder="Plant Id" id="plantId" name="plantId">


            <input type="text" placeholder="No of bots" id="noOfBots" name="noOfBots">


            <input type="password" placeholder="Password" id="password" name="password">

            <div class="show-pass">
                <input type="checkbox" onclick="myFunction()" id="chckBox"> Show Password
            </div>

            <button name="saveData" id="regBtn" type="submit" style="margin-top: 10px;"><a href="#">Register</a></button>
        </form>
    </div>
    </div>
    <!-- Registration Form Ended  -->

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https: //firebase.google.com/docs/web/setup#available-libraries -->


    <!--custom java script-->
    <script src="JS\Reg.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

</body>
<!-- Body Tag ended here  -->

</html>
<!-- Html code ends here  -->