<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Head tag started  -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="CSS\UserDetails.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <!-- Title of the page  -->
    <title>Users Details</title>

</head>
<!-- Head tag has ended -->


<!-- Body tag has started  -->

<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header class="my_header">
        <label for="check">
            <i class="fas fa-bars" id="my_sidebar_btn"></i>
        </label>
        <div class="my_left_area">
        <h3>MET <span>BKC IOE</span></h3>
        </div>
        <div class="my_right_area">
            <a href="Admin-login.html" class="my_logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->

    <!--mobile navigation bar start-->
    <div class="my_mobile_nav">
        <div class="my_nav_bar">

            <i class="fa fa-bars my_nav_btn"></i>
        </div>
        <div class="my_mobile_nav_items">
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
    <div class="my_sidebar">
        <div class="my_profile_info">
            <!-- <img src="images/bot.svg" class="my_profile_image" alt="" style="width: 50px; height: 50px;"> -->
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

    <!-- Retreiving Database Data and Displaying it into the form of table -->
    <div class="my_content" id="my_content">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th> Email </th>
                    <th> Name </th>
                    <th> Phone Number </th>
                    <th> Dish Ordered </th>
                    <th> Password </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('dbcon.php');
                $ref_table = "/AdminSide/Reg";
                $fetchdata = $database->getReference($ref_table)->getValue();
                if ($fetchdata > 0) {
                    foreach ($fetchdata as $key => $row) {


                ?>
                        <tr>
                            <td><?= $row['pemail']; ?></td>
                            <td><?= $row['pname']; ?></td>
                            <td><?= $row['pID']; ?></td>
                            <td><?= $row['noOfBots']; ?></td>
                            <td><?= $row['pPassword']; ?></td>

                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">No Record Found</td>
                    </tr>

                <?php
                }


                ?>


            </tbody>


    </div>
    <!-- Closed - Retreiving Database Data and Displaying it into the form of table -->

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https: //firebase.google.com/docs/web/setup#available-libraries -->

    <!-- <script src="DB\include_db.js"></script> -->
    <script src="JS\UserDetails.js"></script>

</body>
<!-- Body tag has ended -->

</html>