<?php

session_start(); // start the session must be mentioned at the beginning

include('dbcon.php'); // include the database file

// -----------------------For Updating Data-------------------
// if (isset($_POST['updateData'])) {  //checking conditions 
//     $plantEmailId = $_POST['plantEmailId'];
//     $plantName = $_POST['plantName'];
//     $plantId = $_POST['plantId'];   // declaring variables
//     $noOfBots = $_POST['noOfBots'];
//     $password = $_POST['password'];



//     $updateData = [
//         'plantEmailId' => $plantEmailId,
//         'plantName' => $plantName,
//         'plantId' => $plantId,  // connecting variables to form fields(name)
//         'noOfBots' => $noOfBots,
//         'password' => $password,


//     ];

//     $ref_table = "/AdminSide/Reg" . $id;

//     $updatequery = $database->getReference($ref_table)->update($updateData);

//     if ($updatequery) {
//         echo '<script>window.alert("Data Updated Successfully");
//        window.location.href="add-contact.php"; </script>';
//     } else {
//         echo '<script>window.alert("Data is not updated");
//         window.location.href="add-contact.php"; </script>';
//     }
// }


if (isset($_POST['saveData'])) {  //checking conditions 
    $plantEmailId = $_POST['plantEmailId'];
    $plantName = $_POST['plantName'];
    $plantId = $_POST['plantId'];   //declaring variables
    $noOfBots = $_POST['noOfBots'];
    $password = $_POST['password'];



    $postData = [
        'plantEmailId' => $plantEmailId,
        'plantName' => $plantName,
        'plantId' => $plantId,  //connecting variables to form fields(name)
        'noOfBots' => $noOfBots,
        'password' => $password,


    ];
    $ref_table = "/AdminSide/Reg"; // Addresses of the refrence table
    $postRef = $database->getReference($ref_table)->push($postData); // Push the post data using refrence table
    if ($postRef) {
        // If else confition to check whether data is Inserted Successfully or not .
        // $_SESSION['status'] = " Data Inserted Successfully ! ";
        // echo "another if";
        // header("Location: add-contact.php");
        echo '<script>window.alert("Data Inserted Successfully");
       window.location.href="Reg.php"; </script>';
    } else {
        $_SESSION['status'] = "Data Not Inserted !";
        echo " another if !";
        //header("Location: add-contact.php");
    }
} else {
    echo "fail";
}
