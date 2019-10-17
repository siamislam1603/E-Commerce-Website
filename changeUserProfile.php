<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["updateProfileBtn"])){
        if(!empty($_POST["nUserName"]) && !empty($_POST["nUserEmail"])){
            $result=updateProfile($conn,$_SESSION["userId"],$_POST["nUserName"],$_POST["nUserEmail"]);
        }
    }
    header("location: userprofile.php");
?>