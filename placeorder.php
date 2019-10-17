<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["placeOrderBtn"])){
        if(strlen(($_POST["phoneNo"]))==11 && !empty($_POST["address"]) && !empty($_POST["city"])&& !empty($_POST["postCode"])){
            $result=insertOrder($conn,$_POST["phoneNo"],$_POST["address"],$_POST["city"],$_SESSION["userId"],$_POST["postCode"]);
            $resultset=deleteFromCart($conn,$_SESSION["userId"]);
            header("location:myorder.php?message=Order Placed Successfully!");
        }
        else{
            header("location:checkout.php?message=Fill Up All Fields!");
        }
    }
?>