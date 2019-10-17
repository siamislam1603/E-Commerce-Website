<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["updateCart"])){
        $result=updateCart($conn,$_GET["cid"],$_POST["quantity"]);
        header("location: cart.php");
    }
    else if(isset($_POST["cartBtn"])){
        $result=updateCart($conn,$_GET["cid"],$_POST["cartQuantity"]);
        header("location: cart.php");
    }
?>