<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["removeCart"])){
        $result=removeFromCart($conn,$_GET["cid"]);
        header("location: cart.php");
        
    }
?>