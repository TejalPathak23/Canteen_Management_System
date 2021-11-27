<?php
include('dbcon.php');

// $reference = $database->getReference('loginForm');
// echo $reference->getValue();

?>

<!-- Admin's Login Page  -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS if you want to cdn style link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <!-- Bootstrap folder's files     -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src='bootstrap-5.0.2-dist\js\bootstrap.min.js'></script>


    <!-- Custom Css Stylesheet     -->
    <link rel="stylesheet" type="text/css" href="CSS\Logout.css">

    <!-- Title of the Page -->
    <title>Issues - Reset Password </title>
</head>

<body>

    <!-- NavBar / Heading -->
    <div class="tittle-login">MET BKC IOE Adgaon, Nashik</div>

    <!-- Alert's - Dismisable   -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hello ! </strong> You can Reset your password now !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- Login form  -->
    <div>
        <div class="container ">
            <div class="row  ">
                <div class="col ">

                </div class="loginForm mt-2">
                <div class="col border border-danger border-3 p-5 bg-dark text-white ">
                    <form action="#" onsubmit="return validateForm()" method=post name="myForm">

                        <h1 class="log-in-heading"><span class="color-ch">RE</span>set &nbsp;<span class="color-ch">PASS</span>word</h1>


                        <div class="form-group mb-1">
                            <label for="exampleInputPassword1" class="form-label">Current Password</label>
                            <input type="password" placeholder="Current Password"id="password" class="form-control" name="inputPassword" data-toggle="password">
                        </div>


                        <div class="form-group mb-1">
                            <label for="exampleInputPassword1" class="form-label">New Password</label>
                            <input type="password" placeholder="New Password" id="npassword" class="form-control" name="newPassword" data-toggle="password">
                        </div>


                        <div class="form-group mb-1">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" placeholder="New Password" id="cpassword" class="form-control" name="confirmPassword" data-toggle="password">
                        </div>


                        <div class="mb-3 mt-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div  class="mb-3">
                        <button type="submit" class="btn btn-light mx-5" name="saveData">Submit</button>
                    </form>
                </div>

                <div class="col">



                </div>
            </div>
        </div>

        <div>
            <div class="col-md-12 text-center mt-3">
                <button type="button" class="btn btn-danger"> <a href="Dashboard.html">Back To Dashboard</button>

            </div>
        </div>



    </div>


    <!-- Bootstrap starter Template extra code -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- <script src="DB\Include_DB.js"></script> -->


    <!-- script for validations in logout form  -->

    <script>
        function validateForm() {

            // for current Password 
            let z = document.forms["myForm"]["inputPassword"].value;
            if (z.length < 5) {
                alert("Password is too short");
                return false;

            }

            // for new Password 
            let n = document.forms["myForm"]["newPassword"].value;
            if (n.length < 5) {
                alert("New Password is too short");
                return false;

            }

            // for confirm Password 
            let c = document.forms["myForm"]["confirmPassword"].value;
            if (c.length < 5) {
                alert("Confirmed Password is too short");
                return false;

            }

        }
    </script>

</body>

</html>