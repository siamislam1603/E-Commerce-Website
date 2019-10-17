<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(isset($_POST["cartBtn"])){
        if(!empty($_POST["cartQuantity"])){
            $result=insertToCart($conn,$_POST["cartQuantity"],$_SESSION["userId"],$_GET["pid"]);
            $noOfData=mysqli_num_rows($result)
            if($noOfData>0){
                header("location: cart.php");
            }
        }
    }
?>