<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(!empty($_SESSION["userName"]) && ($_SESSION["userId"])!=0)
        include 'userprofileheader.php';
    else{
        include 'header.php';
        if(!empty($_GET["message"])){
            $message=$_GET["message"];
            unset($_GET["message"]);
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        }
    }
?>