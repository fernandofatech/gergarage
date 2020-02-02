<?php
//Trim the signUp input !
include "config.php";
$fname = trim($_POST["fname"]);
$surname=trim( $_POST['sName']);
$email= trim($_POST['email']);
$mNumber= trim($_POST['mNumber']);
$address=trim( $_POST['address']);
$address2=trim( $_POST['address2']);
$eircode= trim($_POST['eircode']);
$password=trim( $_POST['password']);




$sql = "INSERT INTO user (fname, sName, email, mNumber, address, address2, eircode, password) values 
('$fname','$surname',' $email','$mNumber','$address','$address2','$eircode','$password')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";

    session_start();
     = mysqli_insert_id($link);
    
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
    header("Location: index.php");
}

$link->close();
header("Location: loggedInIndex.php");


?>