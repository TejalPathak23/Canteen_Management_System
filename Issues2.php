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
    <title> Issues Page </title>
</head>

<body>




    <!-- NavBar / Heading -->
    <div class="tittle-login">Autobot Admin</div>



    <!-- Alert's - Dismisable   -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hello ! </strong> Tell Your Issues !.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


    <!-- Form  -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Column -->
                <div class="card mt-5" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?technology,Issues" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Genral FAQ's
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Genral FAQ's</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    
                                    
                                        <thead>
                                            <tr>
                                                <th>Genral Issues</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('dbcon.php');
                                            $ref_table = "/AdminSide/Issues";
                                            $fetchdata = $database->getReference($ref_table)->getValue();
                                            if ($fetchdata > 0) {
                                                foreach ($fetchdata as $key => $row) {


                                            ?>
                                                    <tr>
                                                        <td><?= $row['inputDesc']; ?></td>
                                                       

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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-5" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?technology,solar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-secondary">Who had the issues ?</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Column -->
                <div class="card mt-5" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?technology,Notification" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-secondary">Login</button>
                    </div>
                </div>

                <div class="card mt-5" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x900/?technology,bot" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-secondary">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col">
            </div class="loginForm mt-3">
            <div class="col border border-danger border-3 p-5 bg-dark text-white ">

                <!-- Form Started  -->
                <form action="codeIssues.php" onsubmit="return validateForm()" method='post' name="myForm">

                    <h1 class="log-in-heading"><span class="color-ch">I</span>SSUES &nbsp;<span class="color-ch"></span>
                    </h1>

                    <div class="mt-5">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp">

                    </div>

                    <!-- Comments / Descriptions  -->

                    <label class="form-label mt-2">Describe your issues here</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="inputDesc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="inputPassword" data-toggle="password">

                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" onclick="myFunction()" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Show Password</label>
                    </div>
                    <button type="submit" class="btn btn-light mx-5" name="saveData">Submit</button>
                </form>

                <!-- Form Ended  -->
            </div>

        </div>
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
    <!-- Custom JavaScript File connection -->
    <script src="JS\Logout.js"></script>





    <!-- script for validations in logout form  -->

    <script>
        function validateForm() {



            // for Email
            let y = document.forms["myForm"]["inputEmail"].value;
            if (y.length < 5) {
                alert("Email is too short");
                return false;
            }

            // for Password 
            let z = document.forms["myForm"]["inputPassword"].value;
            if (z.length < 5) {
                alert("Password is too short");
                return false;
            }

        }
    </script>

</body>

</html>