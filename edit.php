<!-- For Updating the user details section  -->

<?php
include('dbcon.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Reg.css">
    <link rel="stylesheet" type="text/css" href="CSS\index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


    <title>Edit Registration Data</title>

</head>

<body>

    <input type="checkbox" id="check">

    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Robo <span>fever</span></h3>
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


    <div class="login-page"></div>
    <?php
    include('dbcon.php');
    $ref_table = "/AdminSide/Reg";
    $id = $_GET['id'];
    $editdata = $database->getReference($ref_table)->getChild($id)->getValue();

    ?>

    <div class="form">
        <span id="create-error"></span>
        <h1 class="reg-in-heading"><span class="reg-color-ch">R</span>EGISTER</h1>
        <form class="login-from" id="reg-from" action='CodeReg.php' method='post'>
            <input type="hidden" name="id" value="<?= $id;?>">

            
            <input type="text" value="<?= $editdata['plantEmailId']; ?>" placeholder="Plant Email Id" id="email" name="plantEmailId">

            <input type="text" value="<?= $editdata['plantName']; ?>" placeholder="Plant Name" id="plantName" name="plantName">

            <input type="text" value="<?= $editdata['plantId']; ?>" placeholder="Plant Id" id="plantId" name="plantId">

            <input type="text" value="<?= $editdata['noOfBots']; ?>" placeholder="No of bots" id="noOfBots" name="noOfBots">

            
            <input type="password" value="<?= $editdata['password']; ?>" placeholder="Password" id="password" name="password">

            <!-- An element to toggle between password visibility -->
            <div class="show-pass">
                <input type="checkbox" onclick="myFunction()" id="chckBox"> Show Password
            </div>

            <button onclick="registerUser()" name="updateData" id="regBtn" type="submit" style="margin-top: 10px;"><a href="UserDetails.php">Update</a></button>
        </form>






    </div>
    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https: //firebase.google.com/docs/web/setup#available-libraries -->

    <script src="DB\Include_DB.js"></script>

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

</html>