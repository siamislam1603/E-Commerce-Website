<?php
    session_start();
    include 'databasehandle.php';
    $conn=createConnection();
    if(!empty($_POST["userName"]) && !empty($_POST["userPass"])){
        $result=getUserInfo($conn,$_POST["userName"],md5($_POST["userPass"]));
        $row = mysqli_fetch_array($result);
        if(strcmp($_POST["userName"],$row["user_name"])==0){
            $_SESSION["userName"]=$_POST["userName"];
            $_SESSION["userId"]=$row["user_id"];
            header("location:".$_SESSION["currentPage"]);
        }
        else{
            header("location:".$_SESSION["currentPage"]."?message=Invalid User Name Or Email");
            exit;
        }
    }
    else{
        unset($_GET["message"]);
        header("location:".$_SESSION["currentPage"]);
    }
?>