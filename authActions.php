<?php
include('dbcon.php');

 $authEmail = $_POST['plantEmailId'];
 $authPassword = $_POST['password'];

 if(isset($_POST['saveData']))
{
   $auth = $firebase->getAuth();
   $user = $auth->createUserWithEmailAndPassword($email, $password);
   header("Location:LoginAdmin.php")
}



/*
<?php
include('dbcon.php');

if (isset($_POST['saveData'])) {


    $pemail = $_POST['pemail'];
    $pPassword = $_POST['pPassword'];


    // $auth = $firebase->getAuth();
    // $user = $auth->createUserWithEmailAndPassword($authEmail, $authPassword);
    // header("Location:LoginAdmin.php");

    $userProperties = [
        'email' => $pemail,
        'emailVerified' => false,
        'password' =>  $pPassword,
        
        
    ];
    
    $createdUser = $auth->createUser($userProperties);
    if($createdUser)
    {
        
        echo '<script>window.alert("Data Inserted Successfully");
       window.location.href="LoginAdmin.php"; </script>';
       header("Location:Registration.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted !";
        echo " Data Not Inserted !";
    }
    
}
else {
    echo "fail";
}

?>

*/