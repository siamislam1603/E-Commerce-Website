<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["proceedToCheckOut"])){
        header("location: checkout.php");
    }
?>