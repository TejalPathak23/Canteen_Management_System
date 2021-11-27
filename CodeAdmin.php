<?php

session_start(); // Must be Mentioned at Start

include('dbcon.php'); // Including Database Connection file

if (isset($_POST['saveData'])) { // This saveData is the button name that will transfer the data
    $inputEmail = $_POST['inputEmail'];  // Declaring email variable .
    $inputPassword = $_POST['inputPassword']; // Declaring password variable .

    $postData = [
        'inputEmail' => $inputEmail,   // Connecting email variable to form data
        'inputPassword' => $inputPassword, // Connecting password variable to form data


    ];
    $ref_table = "/AdminSide/Login"; // Address of the refrence table where we want to redirect the data

    $postRef = $database->getReference($ref_table)->push($postData); // declaring a new varibale for pushing postData methord to the database
    
    if ($postRef) {   
        // if else loop to check the condition whether data is inserted or not
        
        // $_SESSION['status'] = " Data Inserted Successfully ! "; 
        // echo "another if";
        //    header("Location: add-contact.php");
        
        echo '<script>window.alert("Data Inserted Successfully");
       window.location.href="LoginAdmin.php"; </script>';
    } else {
        $_SESSION['status'] = "Data Not Inserted !";
        echo " Data Not Inserted !";
        // header("Location: add-contact.php");
    }
} else {
    echo "fail";
}
